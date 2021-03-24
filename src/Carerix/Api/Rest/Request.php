<?php

namespace Carerix\Api\Rest;

class Request
{
    private $body;
    private $method;
    private $password;
    private $proxy;
    private $responseTransformer;
    private $responseType;
    private $url;
    private $username;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Request
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     * @return Request
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Request
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param mixed $proxy
     * @return Request
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseTransformerImpl()
    {
        return $this->responseTransformer;
    }

    /**
     * @param mixed $responseTransformer
     * @return Request
     */
    public function setResponseTransformerImpl($responseTransformer)
    {
        $this->responseTransformer = $responseTransformer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @return string
     */
    public function getFormattedResponseType()
    {
        $contentType = 'application/xml';
        switch ($this->responseType) {
            case 'json':
                $contentType = 'application/json';
                break;
            case 'sencha':
            case 'js':
                $contentType = 'application/javascript';
                break;
        }

        return $contentType;
    }

    /**
     * @param mixed $responseType
     * @return Request
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Request
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Request
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
}
