<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRCompany;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:44 +0000
 * @method AbstractCRCompanyAlias setAlias() setAlias(string $value)
 * @method string getAlias getAlias()
 * @method AbstractCRCompanyAlias setCompanyAliasID() setCompanyAliasID(integer $value)
 * @method integer getCompanyAliasID getCompanyAliasID()
 * @method AbstractCRCompanyAlias setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRCompanyAlias setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 */
abstract class AbstractCRCompanyAlias extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRCompanyAlias';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $alias;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $companyAliasID;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("companyAliasID");
        $entityConfiguration->setName("CRCompanyAlias");
    }
}
