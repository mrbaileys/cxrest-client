<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:27 +0000
 * @method AbstractCRFetchSpecification setFetchSpecificationID() setFetchSpecificationID(integer $value)
 * @method integer getFetchSpecificationID getFetchSpecificationID()
 * @method AbstractCRFetchSpecification setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRFetchSpecification setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRFetchSpecification setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRFetchSpecification setFetchSpecification() setFetchSpecification(string $value)
 * @method string getFetchSpecification getFetchSpecification()
 */
abstract class AbstractCRFetchSpecification extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRFetchSpecification';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $fetchSpecificationID;

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
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $fetchSpecification;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("fetchSpecificationID");
        $entityConfiguration->setName("CRFetchSpecification");
    }
}
