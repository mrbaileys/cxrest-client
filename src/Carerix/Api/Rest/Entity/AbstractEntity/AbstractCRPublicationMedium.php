<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRPublication;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:30 +0000
 * @method AbstractCRPublicationMedium setToMedium() setToMedium(array|CRMedium $value)
 * @method CRMedium getToMedium getToMedium($index = null)
 * @method AbstractCRPublicationMedium setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 */
abstract class AbstractCRPublicationMedium extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRPublicationMedium';

    /**
     * @cx_field true
     * @access private
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toMedium
     */
    public $toMedium;

    /**
     * @cx_field true
     * @access private
     * @var CRPublication
     * @OneToOne (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 0
     * @name toPublication
     */
    public $toPublication;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("publicationMediumID");
        $entityConfiguration->setName("CRPublicationMedium");
    }
}
