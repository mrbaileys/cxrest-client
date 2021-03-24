<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:21 +0000
 * @method AbstractCRAttributeChange setAttributeEntityName() setAttributeEntityName(string $value)
 * @method string getAttributeEntityName getAttributeEntityName()
 * @method AbstractCRAttributeChange setId1() setId1(integer $value)
 * @method integer getId1 getId1()
 * @method AbstractCRAttributeChange setId2() setId2(integer $value)
 * @method integer getId2 getId2()
 * @method AbstractCRAttributeChange setEffectiveDate() setEffectiveDate(string $value)
 * @method string getEffectiveDate getEffectiveDate()
 * @method AbstractCRAttributeChange setValue() setValue(string $value)
 * @method string getValue getValue()
 * @method AbstractCRAttributeChange setAttributeName() setAttributeName(string $value)
 * @method string getAttributeName getAttributeName()
 * @method AbstractCRAttributeChange setAttributeChangeID() setAttributeChangeID(integer $value)
 * @method integer getAttributeChangeID getAttributeChangeID()
 * @method AbstractCRAttributeChange setEffectiveEndDate() setEffectiveEndDate(string $value)
 * @method string getEffectiveEndDate getEffectiveEndDate()
 * @method AbstractCRAttributeChange setOldValue() setOldValue(string $value)
 * @method string getOldValue getOldValue()
 * @method AbstractCRAttributeChange setRemoteAddress() setRemoteAddress(string $value)
 * @method string getRemoteAddress getRemoteAddress()
 * @method AbstractCRAttributeChange setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 */
abstract class AbstractCRAttributeChange extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRAttributeChange';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 31
     */
    public $attributeEntityName;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $id1;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $id2;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $effectiveDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $value;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 31
     */
    public $attributeName;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $attributeChangeID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $effectiveEndDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $oldValue;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $remoteAddress;

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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("attributeChangeID");
        $entityConfiguration->setName("CRAttributeChange");
    }
}
