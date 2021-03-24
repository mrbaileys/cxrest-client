<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRFinance;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:26 +0000
 * @method AbstractCREmployeeFinance setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployeeFinance setToFinance() setToFinance(array|CRFinance $value)
 * @method CRFinance getToFinance getToFinance($index = null)
 * @method AbstractCREmployeeFinance setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 */
abstract class AbstractCREmployeeFinance extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmployeeFinance';

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
     * @var CRFinance
     * @OneToOne (targetEntity="CRFinance")
     * @mandatory 0
     * @destination_entity CRFinance
     * @to_many 0
     * @name toFinance
     */
    public $toFinance;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 1
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeFinanceID");
        $entityConfiguration->setName("CREmployeeFinance");
    }
}
