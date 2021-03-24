<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:21 +0000
 * @method AbstractCRAttachmentData setContent() setContent(string $value)
 * @method string getContent getContent()
 * @method AbstractCRAttachmentData setContentHash() setContentHash(string $value)
 * @method string getContentHash getContentHash()
 * @method AbstractCRAttachmentData setContentText() setContentText(string $value)
 * @method string getContentText getContentText()
 */
abstract class AbstractCRAttachmentData extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRAttachmentData';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSData
     * @allows_null 1
     */
    public $content;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 32
     */
    public $contentHash;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $contentText;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("attachmentDataID");
        $entityConfiguration->setName("CRAttachmentData");
    }
}
