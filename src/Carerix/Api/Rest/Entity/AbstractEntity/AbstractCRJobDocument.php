<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:28 +0000
 * @method AbstractCRJobDocument setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRJobDocument setJobDocumentID() setJobDocumentID(integer $value)
 * @method integer getJobDocumentID getJobDocumentID()
 * @method AbstractCRJobDocument setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRJobDocument setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRJobDocument setValidUntilDate() setValidUntilDate(string $value)
 * @method string getValidUntilDate getValidUntilDate()
 * @method AbstractCRJobDocument setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRJobDocument setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRJobDocument setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRJobDocument setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRJobDocument setToDocumentNode() setToDocumentNode(array|CRDataNode $value)
 * @method CRDataNode getToDocumentNode getToDocumentNode($index = null)
 * @method AbstractCRJobDocument setToAttachment() setToAttachment(array|CRAttachment $value)
 * @method CRAttachment getToAttachment getToAttachment($index = null)
 */
abstract class AbstractCRJobDocument extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRJobDocument';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $creationDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $jobDocumentID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $validUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner;

    /**
     * @cx_field true
     * @access private
     * @var CRJob
     * @OneToOne (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 0
     * @name toJob
     */
    public $toJob;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toDocumentNode
     */
    public $toDocumentNode;

    /**
     * @cx_field true
     * @access private
     * @var CRAttachment
     * @OneToOne (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 0
     * @name toAttachment
     */
    public $toAttachment;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("jobDocumentID");
        $entityConfiguration->setName("CRJobDocument");
    }
}
