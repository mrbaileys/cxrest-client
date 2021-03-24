<?php

namespace Carerix\Api\Rest;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\RequestOptions;

class Client
{
    const POST   = 'POST';
    const GET    = 'GET';
    const PUT    = 'PUT';
    const DELETE = 'DELETE';

    /**
     * @var GuzzleRequest
     */
    protected $lastGuzzleRequest = null;

    /**
     * @var GuzzleResponse
     */
    protected $lastGuzzleResponse = null;

    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var array
     */
    protected $historyContainer = [];

    public function __construct()
    {
        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::history($this->historyContainer));

        $this->client = new GuzzleClient([
            'handler' => $handlerStack
        ]);
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function post(Request $request)
    {
        $request->setMethod(self::POST);
        return $this->execute($request);
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function get(Request $request)
    {
        $request->setMethod(self::GET);
        return $this->execute($request);
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function put(Request $request)
    {
        $request->setMethod(self::PUT);
        return $this->execute($request);
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function delete(Request $request)
    {
        $request->setMethod(self::DELETE);
        return $this->execute($request);
    }

    /**
     * @param bool $safe
     * @return string
     */
    public function getLastRequest($safe = true)
    {
        $request = $this->lastGuzzleRequest;

        $requestString = sprintf('%s %s HTTP/%s', $request->getMethod(), $request->getRequestTarget(), $request->getProtocolVersion());
        foreach ($request->getHeaders() as $header => $values) {
            foreach ($values as $value) {
                $requestString .= "\r\n" . $header . ': ' . $value;
            }
        }

        if ($safe) {
            $requestString = preg_replace('/Authorization: ([^\n]+)/sim', 'Authorization: ****', $requestString, 1);
        }

        $requestString .= "\r\n\r\n" . $request->getBody();

        return $requestString;
    }

    /**
     * @return string
     */
    public function getLastResponse()
    {
        $response = $this->lastGuzzleResponse;

        $lastResponseString = sprintf('HTTP/%s %s %s', $response->getProtocolVersion(), $response->getStatusCode(), $response->getReasonPhrase());

        foreach ($response->getHeaders() as $header => $values) {
            foreach ($values as $value) {
                $lastResponseString .= "\r\n" . $header . ': ' . $value;
            }
        }

        $lastResponseString .= "\r\n\r\n" . $response->getBody();

        return $lastResponseString;
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function execute(Request $request)
    {
        $options = [
            RequestOptions::VERIFY => false,
        ];

        $username = $request->getUsername();
        $password = $request->getPassword();

        if ($username && $password) {
            $options[RequestOptions::AUTH] = [$username, $password];
        }

        if ($request->getProxy()) {
            $options[RequestOptions::PROXY] = $request->getProxy();
        }

        $headers = [
            'Accept'     => '*/*',
            'User-Agent' => __CLASS__,
        ];

        switch ($request->getMethod()) {
            case self::POST:
            case self::PUT:
                $headers['Content-Type'] = $request->getFormattedResponseType();

                $guzzleRequest = new GuzzleRequest($request->getMethod(), $request->getUrl(), $headers, $request->getBody());
                break;
            default:
                $guzzleRequest = new GuzzleRequest($request->getMethod(), $request->getUrl(), $headers);
        }

        try {
            $response = $this->client->send($guzzleRequest, $options);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if (!$response) {
                throw new Exception($e->getMessage(), $e->getCode(), $e);
            }

            throw new Exception($response->getBody()->getContents(), $response->getStatusCode());
        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        } finally {
            $transaction = array_pop($this->historyContainer);
            if ($transaction) {
                $this->lastGuzzleResponse = $transaction['response'];
                $this->lastGuzzleRequest  = $transaction['request'];
            }
        }

        return $response->getBody()->getContents();
    }
}
