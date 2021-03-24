<?php

namespace Carerix\Api\Rest;

use SimpleXMLElement;

class Exception extends \Exception
{
    /**
     * @var integer
     */
    protected $code = 500;

    /**
     * @var string
     */
    protected $name = __CLASS__;

    /**
     * @var string
     */
    protected $info = '';

    /**
     * @param null            $message
     * @param int             $code
     * @param \Exception|null $previous
     * @see   \Exception
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, (int)$code, $previous);

        $this->init($message);
    }

    /**
     * Init properties
     * @param mixed string|Zend_Http_Response
     */
    protected function init($message)
    {
        switch (true) {
            case $this->isXml($message):
                $this->fromXml($message);
                break;
            default:
                $this->message = $message;
        }
    }

    /**
     * Check if message is xml string
     * @param string $value
     * @return boolean
     */
    protected function isXml($value)
    {
        if (substr($value, 0, 5) == trim('<?xml')) {
            return true;
        }
        return false;
    }

    /**
     * Expected format:
     * <?xml version="1.0" encoding="utf-8"?>
     *  <NSException>
     *  <name><!-- short exception name --></name>
     *  <reason><!-- description of the exception (usually a single sentence) --></reason>
     *  <userInfo><!-- additional information, context, hints, etc. --></userInfo>
     * </NSException>
     *
     * @param  string $value
     * @return void
     */
    protected function fromXml($value)
    {
        try {
            $sxe = @ new SimpleXMLElement($value);
        } catch (\Exception $ex) {
            $this->name    = 'Exception';
            $this->message = 'Unable to parse XML exception';
            return;
        }

        $this->name    = (string)$sxe->name;
        $this->message = (string)$sxe->reason;
        $this->info    = (string)$sxe->userInfo;
    }

    /**
     * Get exception name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get exception info
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }
}
