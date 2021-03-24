<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:23 +0000
 * @method AbstractCREmailAddress setEmailAddress() setEmailAddress(string $value)
 * @method string getEmailAddress getEmailAddress()
 * @method AbstractCREmailAddress setEmailAddressID() setEmailAddressID(integer $value)
 * @method integer getEmailAddressID getEmailAddressID()
 * @method AbstractCREmailAddress setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmailAddress setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmailAddress setInvalid() setInvalid(integer $value)
 * @method integer getInvalid getInvalid()
 * @method AbstractCREmailAddress setIsPrimary() setIsPrimary(integer $value)
 * @method integer getIsPrimary getIsPrimary()
 * @method AbstractCREmailAddress setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCREmailAddress setToEmailAddressLabel() setToEmailAddressLabel(array|CRDataNode $value)
 * @method CRDataNode getToEmailAddressLabel getToEmailAddressLabel($index = null)
 */
abstract class AbstractCREmailAddress extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmailAddress';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $emailAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $emailAddressID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $invalid;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isPrimary;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toEmailAddressLabel
     * @default 0
     * @nodeType E-mailadres-label
     */
    public $toEmailAddressLabel;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("emailAddressID");
        $entityConfiguration->setName("CREmailAddress");
    }
}
