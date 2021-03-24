<?php

namespace Carerix\Api\Rest;

use Exception;
use SimpleXMLElement;

class Token
{
    /**
     * Get REST API application token
     * @param array   $params  array('systemName' => $systemName, 'password' => $password)
     * @param Manager $manager [optional] allows you to configure HTTP client w/ custom options: endpoint, proxy, etc.
     * @return string application token
     * @throws Exception
     */
    public static function get($params = [], Manager $manager = null)
    {
        $path = '/token/get?' . http_build_query($params);

        $request = new Request();
        if ($manager instanceof Manager) {
            $client = $manager->getClient();
        } else {
            $client  = new Client();
            $manager = new Manager($client);
        }

        $request
            ->setUrl($manager->getUrl() . $path)
            ->setProxy($manager->getProxy());
        $result = $client->get($request);

        try {
            $xml = new SimpleXMLElement($result);
        } catch (Exception $ex) {
            throw new Exception('Unable to parse response.');
        }

        if (property_exists($xml, 'token')) {
            return $xml->token;
        }

        throw new Exception('Token was not found in the response.');
    }
}
