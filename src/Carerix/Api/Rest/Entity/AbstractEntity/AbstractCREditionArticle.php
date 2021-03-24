<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRArticle;
use Carerix\Api\Rest\Entity\CRToDo;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:23 +0000
 * @method AbstractCREditionArticle setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREditionArticle setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCREditionArticle setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCREditionArticle setToArticle() setToArticle(array|CRArticle $value)
 * @method CRArticle getToArticle getToArticle($index = null)
 * @method AbstractCREditionArticle setToEdition() setToEdition(array|CRToDo $value)
 * @method CRToDo getToEdition getToEdition($index = null)
 */
abstract class AbstractCREditionArticle extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREditionArticle';

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $code;

    /**
     * @cx_field true
     * @access private
     * @var CRArticle
     * @OneToOne (targetEntity="CRArticle")
     * @mandatory 0
     * @destination_entity CRArticle
     * @to_many 0
     * @name toArticle
     */
    public $toArticle;

    /**
     * @cx_field true
     * @access private
     * @var CRToDo
     * @OneToOne (targetEntity="CRToDo")
     * @mandatory 1
     * @destination_entity CRToDo
     * @to_many 0
     * @name toEdition
     */
    public $toEdition;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("editionArticleID");
        $entityConfiguration->setName("CREditionArticle");
    }
}
