<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmployee;
use Exception;

/**
 * @method CREmployee setToAdminVisitProvinceNode() setToAdminVisitProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminVisitProvinceNode getToAdminVisitProvinceNode()
 * @method CREmployee setToAdminVisitCountryNode() setToAdminVisitCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminVisitCountryNode getToAdminVisitCountryNode()
 * @method CREmployee setAdminVisitNumber() setAdminVisitNumber(string $value)
 * @method string getAdminVisitNumber getAdminVisitNumber()
 * @method CREmployee setAdminVisitNumberSuffix() setAdminVisitNumberSuffix(string $value)
 * @method string getAdminVisitNumberSuffix getAdminVisitNumberSuffix()
 * @method CREmployee setAdminVisitPostalCode() setAdminVisitPostalCode(string $value)
 * @method string getAdminVisitPostalCode getAdminVisitPostalCode()
 * @method CREmployee setAdminVisitStreet() setAdminVisitStreet(string $value)
 * @method string getAdminVisitStreet getAdminVisitStreet()
 * @method CREmployee setAdminVisitAddress() setAdminVisitAddress(string $value)
 * @method string getAdminVisitAddress getAdminVisitAddress()
 * @method CREmployee setAdminVisitCity() setAdminVisitCity(string $value)
 * @method string getAdminVisitCity getAdminVisitCity()
 * @method CREmployee setToAdminHomeProvinceNode() setToAdminHomeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminHomeProvinceNode getToAdminHomeProvinceNode()
 * @method CREmployee setToAdminHomeCountryNode() setToAdminHomeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminHomeCountryNode getToAdminHomeCountryNode()
 * @method CREmployee setAdminHomeNumber() setAdminHomeNumber(string $value)
 * @method string getAdminHomeNumber getAdminHomeNumber()
 * @method CREmployee setAdminHomeNumberSuffix() setAdminHomeNumberSuffix(string $value)
 * @method string getAdminHomeNumberSuffix getAdminHomeNumberSuffix()
 * @method CREmployee setAdminHomePostalCode() setAdminHomePostalCode(string $value)
 * @method string getAdminHomePostalCode getAdminHomePostalCode()
 * @method CREmployee setAdminHomeStreet() setAdminHomeStreet(string $value)
 * @method string getAdminHomeStreet getAdminHomeStreet()
 * @method CREmployee setAdminHomeAddress() setAdminHomeAddress(string $value)
 * @method string getAdminHomeAddress getAdminHomeAddress()
 * @method CREmployee setAdminHomeCity() setAdminHomeCity(string $value)
 * @method string getAdminHomeCity getAdminHomeCity()
 * @method CREmployee setToAdminAlternativeProvinceNode() setToAdminAlternativeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminAlternativeProvinceNode getToAdminAlternativeProvinceNode()
 * @method CREmployee setToAdminAlternativeCountryNode() setToAdminAlternativeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToAdminAlternativeCountryNode getToAdminAlternativeCountryNode()
 * @method CREmployee setAdminAlternativeNumber() setAdminAlternativeNumber(string $value)
 * @method string getAdminAlternativeNumber getAdminAlternativeNumber()
 * @method CREmployee setAdminAlternativeNumberSuffix() setAdminAlternativeNumberSuffix(string $value)
 * @method string getAdminAlternativeNumberSuffix getAdminAlternativeNumberSuffix()
 * @method CREmployee setAdminAlternativePostalCode() setAdminAlternativePostalCode(string $value)
 * @method string getAdminAlternativePostalCode getAdminAlternativePostalCode()
 * @method CREmployee setAdminAlternativeStreet() setAdminAlternativeStreet(string $value)
 * @method string getAdminAlternativeStreet getAdminAlternativeStreet()
 * @method CREmployee setAdminAlternativeAddress() setAdminAlternativeAddress(string $value)
 * @method string getAdminAlternativeAddress getAdminAlternativeAddress()
 * @method CREmployee setAdminAlternativeCity() setAdminAlternativeCity(string $value)
 * @method string getAdminAlternativeCity getAdminAlternativeCity()
 * @method CREmployee setAdminBirthDate() setAdminBirthDate(string $value)
 * @method string getAdminBirthDate getAdminBirthDate()
 * @method CREmployee setAdminInitials() setAdminInitials(string $value)
 * @method string getAdminInitials getAdminInitials()
 * @method CREmployee setAdminFullFirstNames() setAdminFullFirstNames(string $value)
 * @method string getAdminFullFirstNames getAdminFullFirstNames()
 * @method CREmployee setAdminFirstName() setAdminFirstName(string $value)
 * @method string getAdminFirstName getAdminFirstName()
 * @method CREmployee setAdminLastName() setAdminLastName(string $value)
 * @method string getAdminLastName getAdminLastName()
 * @method CREmployee setAdminLastNamePrefix() setAdminLastNamePrefix(string $value)
 * @method string getAdminLastNamePrefix getAdminLastNamePrefix()
 * @method CREmployee setAdminSofiNumber() setAdminSofiNumber(string $value)
 * @method string getAdminSofiNumber getAdminSofiNumber()
 * @method string getPrimaryOrBusinessEmailAddress getPrimaryOrBusinessEmailAddress()
 * @method string getPrimaryOrPrivateEmailAddress getPrimaryOrPrivateEmailAddress()
 * @method string getPrimaryEmailAddress getPrimaryAddress()
 */
class CREmployee extends AbstractCREmployee
{
    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $hasPhoto = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $photo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $photoList = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $fullAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $city = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     * @alias       toUser.emailAddresses[0].emailAddress
     */
    public $emailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     * @alias       toUser.emailAddresses[0].emailAddress
     */
    public $emailAddressBusiness = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryOrBusinessEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryOrPrivateEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $phoneNumberBusiness = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $phoneNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $mobileNumber;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $mobileNumberBusiness;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $firstName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $lastName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $lastNamePrefix = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCountryNode
     * @default            1
     * @nodeType           Land
     */
    public $toCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toGenderNode
     * @nodeType
     */
    public $toGenderNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default
     * @nodeType           Kandidaat-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toPovinceNode
     */
    public $toPovinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProductTypeNode1
     */
    public $toProductTypeNode1 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProductTypeNode2
     *
     */
    public $toProductTypeNode2 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProductTypeNode3
     */
    public $toProductTypeNode3 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toMinSalaryPeriodNode
     */
    public $toMinSalaryPeriodNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name owner
     */
    public $owner = null;

    /**
     * ATTENTION: Does not work for save operation!!!
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groups
     * @nodeType           Groep-Kandidaat
     */
    public $groups = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     * @nodeType           Groep-Kandidaat
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CREmailAddress")
     * @mandatory          0
     * @destination_entity CREmailAddress
     * @to_many            1
     * @name emailAddresses
     */
    public $emailAddresses = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $suffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $title = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $birthDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $homeNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $homeNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $homePostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $homeStreet = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toHomeCountryNode
     * @default
     * @nodeType
     */
    public $toHomeCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toHomeProvinceNode
     * @default
     * @nodeType
     */
    public $toHomeProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminVisitProvinceNode
     * @default
     * @nodeType
     */
    public $toAdminVisitProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminVisitCountryNode
     * @default
     * @nodeType
     */
    public $toAdminVisitCountryNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminVisitNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminVisitNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $adminVisitPostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $adminVisitStreet = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $adminVisitAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminVisitCity = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminHomeProvinceNode
     * @default
     * @nodeType
     */
    public $toAdminHomeProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminHomeCountryNode
     * @default
     * @nodeType
     */
    public $toAdminHomeCountryNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminHomeNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminHomeNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $adminHomePostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $adminHomeStreet = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $adminHomeAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminHomeCity = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminAlternativeProvinceNode
     * @default
     * @nodeType
     */
    public $toAdminAlternativeProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAdminAlternativeCountryNode
     * @default
     * @nodeType
     */
    public $toAdminAlternativeCountryNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminAlternativeNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $adminAlternativeNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $adminAlternativePostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $adminAlternativeStreet = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $adminAlternativeAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminAlternativeCity = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $adminBirthDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       12
     */
    public $adminInitials = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $adminFullFirstNames = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminFirstName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $adminLastName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminLastNamePrefix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $adminSofiNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       12
     */
    public $initials = null;

    /**
     * @param array|Collection $values
     * @return AbstractCREmployee
     */
    public function setGroupNodes($values)
    {
        $this->toUser = (is_null($this->toUser)) ? new CRUser() : $this->toUser;
        $this->toUser->setGroupNodes($values);
        return $this;
    }

    /**
     * @param integer $index get an item at specified index
     * @return Collection|CRDataNode
     */
    public function getGroupNodes($index = null)
    {
        if (!is_null($this->toUser)) {
            return $this->toUser->getGroupNodes($index);
        }

        return null;
    }

    /**
     * @param array|Collection $values
     * @return AbstractCREmployee
     */
    public function setGroups($values)
    {
        if (is_array($values)) {
            $values = new Collection($values, 'CRDataNode');
        }
        $this->groups = $values;
        return $this;
    }

    /**
     * @param integer $index get an item at specified index
     * @return Collection|CRDataNode
     */
    public function getGroups($index = null)
    {
        if ($index !== null) {
            return $this->groups[$index];
        }
        return $this->groups;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToMinSalaryPeriodNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toMinSalaryPeriodNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToMinSalaryPeriodNode()
    {
        return $this->toMinSalaryPeriodNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToProductTypeNode3($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toProductTypeNode3 = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToProductTypeNode3()
    {
        return $this->toProductTypeNode3;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToProductTypeNode2($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toProductTypeNode2 = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToProductTypeNode2()
    {
        return $this->toProductTypeNode2;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToProductTypeNode1($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toProductTypeNode1 = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToProductTypeNode1()
    {
        return $this->toProductTypeNode1;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToPovinceNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toPovinceNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToPovinceNode()
    {
        return $this->toPovinceNode;
    }

    /**
     * @return CRDataNode
     */
    public function getToHomeProvinceNode()
    {
        return $this->toHomeProvinceNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return $this
     */
    public function setToHomeProvinceNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toHomeProvinceNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToHomeCountryNode()
    {
        return $this->toHomeCountryNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToHomeCountryNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toHomeCountryNode = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePostalCode()
    {
        return $this->homePostalCode;
    }

    /**
     * @param string $homePostalCode homePostalCode
     * @return self
     */
    public function setHomePostalCode($homePostalCode)
    {
        $this->homePostalCode = $homePostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeNumberSuffix()
    {
        return $this->homeNumberSuffix;
    }

    /**
     * @param string $homeNumberSuffix homeNumberSuffix
     * @return self
     */
    public function setHomeNumberSuffix($homeNumberSuffix)
    {
        $this->homeNumberSuffix = $homeNumberSuffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeHomeNumber()
    {
        return $this->homeNumber;
    }

    /**
     * @param string $homeNumber homeNumber
     * @return self
     */
    public function setHomeNumber($homeNumber)
    {
        $this->homeNumber = $homeNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeStreet()
    {
        return $this->homeStreet;
    }

    /**
     * @param string $homeStreet homeStreet
     * @return self
     */
    public function setHomeStreet($homeStreet)
    {
        $this->homeStreet = $homeStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate birthDate
     * @return self
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix suffix
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @param string $initials initials
     * @return self
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @param array|Collection $values
     * @return self
     */
    public function setEmailAddresses($values)
    {
        if (is_array($values)) {
            $values = new Collection($values, 'CREmailAddress');
        }
        $this->emailAddresses = $values;
        return $this;
    }

    /**
     * @param integer $index get an item at specified index
     * @return Collection|CREmailAddress
     */
    public function getEmailAddresses($index = null)
    {
        if ($index !== null) {
            return $this->emailAddresses[$index];
        }
        return $this->emailAddresses;
    }

    /**
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress fullAddress
     * @return self
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddressBusiness()
    {
        return $this->emailAddressBusiness;
    }

    /**
     * @param string $emailAddressBusiness emailAddressBusiness
     * @return self
     */
    public function setEmailAddressBusiness($emailAddressBusiness)
    {
        $this->emailAddressBusiness = $emailAddressBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumberBusiness()
    {
        return $this->phoneNumberBusiness;
    }

    /**
     * @param string $phoneNumberBusiness phoneNumberBusiness
     * @return self
     */
    public function setPhoneNumberBusiness($phoneNumberBusiness)
    {
        $this->phoneNumberBusiness = $phoneNumberBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber mobileNumber
     * @return self
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumberBusiness()
    {
        return $this->mobileNumberBusiness;
    }

    /**
     * @param string $mobileNumberBusiness mobileNumberBusiness
     * @return self
     */
    public function setMobileNumberBusiness($mobileNumberBusiness)
    {
        $this->mobileNumberBusiness = $mobileNumberBusiness;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastNamePrefix()
    {
        return $this->lastNamePrefix;
    }

    /**
     * @param string $lastNamePrefix lastNamePrefix
     * @return self
     */
    public function setLastNamePrefix($lastNamePrefix)
    {
        $this->lastNamePrefix = $lastNamePrefix;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToCountryNode()
    {
        return $this->toCountryNode;
    }

    /**
     * @param CRDataNode $toCountryNode toCountryNode
     * @return self
     */
    public function setToCountryNode($toCountryNode)
    {
        $this->toCountryNode = $toCountryNode;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToGenderNode()
    {
        return $this->toGenderNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToGenderNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toGenderNode = $value;
        return $this;
    }

    /**
     * @param array|CRDataNode $value
     * @return CREmployee
     */
    public function setToStatusNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toStatusNode = $value;
        return $this;
    }

    /**
     * @return null|CRDataNode
     */
    public function getToStatusNode()
    {
        return $this->toStatusNode;
    }

    /**
     * @return CRUser
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param array|CRUser $value
     * @return CREmployee
     */
    public function setOwner($value)
    {
        if (is_array($value)) {
            $value = new CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }

    /**
     * Alias for _todos setter
     * @param $values
     * @return AbstractCREmployee
     */
    public function setTodos($values)
    {
        return $this->set_todos($values);
    }

    /**
     * Alias for _todos getter
     * @return Collection|CRToDo
     */
    public function getTodos()
    {
        return $this->get_todos();
    }

    /**
     * Get employee by username and password
     * @param array $parameters
     * @return CREmployee
     * @throws Exception
     */
    public static function getBy(array $parameters)
    {
        return self::execute(Client::GET, 'get-by', $parameters);
    }

    /**
     * Create or modify an employee object and perform additional tasks in one go.
     * @param array $parameters
     * @return CREmployee
     */
    public function apply($parameters = null)
    {
        $method = $this->exists() ? 'put' : 'post';
        return $this->$method('apply', $parameters);
    }

    /**
     * @param array|null $parameters
     * @param null       $hydrate
     * @return CREmployee
     * @see Entity::subscribe()
     */
    public function subscribe(array $parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        return call_user_func_array(['parent', 'subscribe'], $args);
    }
}
