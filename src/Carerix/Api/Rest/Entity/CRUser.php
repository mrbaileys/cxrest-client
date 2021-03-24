<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRUser;
use Carerix\Api\Rest\Exception;

/**
 * @method CRUser setSyncmail setSyncmail(integer $value) Set syncmail attribute. Provides a fluent interface.
 * @method string getSyncmail getSyncmail() Get syncmail attribute
 * @method string getBusinessOrPrivateEmailAddress getBusinessOrPrivateEmailAddress() Get business or private email attribute
 * @method string getPrimaryOrBusinessEmailAddress getPrimaryOrBusinessEmailAddress() - Gets primary or if not defined business email attribute
 * @method string getPrimaryOrPrivateEmailAddress getPrimaryOrPrivateEmailAddress() - Gets primary or if not defined private email attribute
 * @method string getPrimaryEmailAddress getPrimaryAddress() - Gets primary email attribute
 */
class CRUser extends AbstractCRUser
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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     */
    public $userRoleID;

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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     */
    public $lessFormalNameString;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $emailAddressPrivate;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $businessOrPrivateEmailAddress;

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
     * @cx_field           true
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @access             private
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @nodeType           Kandidaat-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * Added for BC reasons.
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @access   private
     */
    public $toCompany;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddressBusiness;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $homeEmailAddress = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toMailingCountryNode
     * @default
     * @nodeType           Land
     */
    public $toMailingCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toMailingProvinceNode
     * @default
     * @nodeType           Regio
     */
    public $toMailingProvinceNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     */
    public $syncmail;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $mailboxType;

    /**
     * @return integer
     */
    public function getUserRoleID()
    {
        return $this->userRoleID;
    }

    /**
     * @param integer $userRoleID userRoleID
     * @return self
     */
    public function setUserRoleID($userRoleID)
    {
        $this->userRoleID = $userRoleID;
        return $this;
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
     * @return CRUser
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
     * @return string
     */
    public function getLessFormalNameString()
    {
        return $this->lessFormalNameString;
    }

    /**
     * @param string $lessFormalNameString lessFormalNameString
     * @return self
     */
    public function setLessFormalNameString($lessFormalNameString)
    {
        $this->lessFormalNameString = $lessFormalNameString;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddressPrivate()
    {
        return $this->emailAddressPrivate;
    }

    /**
     * @param string $emailAddressPrivate emailAddressPrivate
     * @return self
     */
    public function setEmailAddressPrivate($emailAddressPrivate)
    {
        $this->emailAddressPrivate = $emailAddressPrivate;
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
     * @return CRCompany
     */
    public function getToCompany()
    {
        return $this->toCompany;
    }

    /**
     * @param array|CRCompany $toCompany toCompany
     * @return self
     */
    public function setToCompany($toCompany)
    {
        if (is_array($toCompany)) {
            $toCompany = new CRCompany($toCompany);
        }
        $this->toCompany = $toCompany;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToStatusNode()
    {
        return $this->toStatusNode;
    }

    /**
     * @param CRDataNode $toStatusNode toStatusNode
     * @return self
     */
    public function setToStatusNode($toStatusNode)
    {
        $this->toStatusNode = $toStatusNode;
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
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * @param string mailboxType mailboxType
     * @return self
     */
    public function setMailboxType($mailboxType)
    {
        $this->mailboxType = $mailboxType;
        return $this;
    }

    /**
     * @param string $value [optional]
     * @return self
     */
    public function setHomeEmailAddress($value)
    {
        $this->homeEmailAddress = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeEmailAddress()
    {
        return $this->homeEmailAddress;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToMailingCountryNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toMailingCountryNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToMailingCountryNode()
    {
        return $this->toMailingCountryNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToMailingProvinceNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toMailingProvinceNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToMailingProvinceNode()
    {
        return $this->toMailingProvinceNode;
    }

    /**
     * Get a list of meetings for a given user
     * @param array   $parameters [optional] e.g. array('startDate' => '-30 days', 'endDate' => 'now')
     * @param integer $hydrate    [optional] hydration method
     * @return Collection
     * @throws Exception
     */
    public function meeting($parameters = null, $hydrate = null)
    {
        if (!$this->getId()) {
            throw new Exception('Please load the object from the REST API first or set id.');
        }

        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = [];
        }

        $parameters = array_merge((array)$parameters, ['userID' => $this->getId()]);
        $className  = get_class($this);
        $action     = 'meeting';
        $url        = self::generateUrl(get_defined_vars(), $className);

        return self::getManager()->execute('CRToDo', $url, Client::GET, null, null, $hydrate);
    }

    /**
     * Get a list of meetings for a given user
     * This is an improved version of meetings.xml
     * @param array   $parameters [optional] e.g. array('startDate' => '-30 days', 'endDate' => 'now')
     * @param integer $hydrate    [optional] hydration method
     * @return Collection
     * @throws Exception
     */
    public function meeting2($parameters = null, $hydrate = null)
    {
        if (!$this->getId()) {
            throw new Exception('Please load the object from the REST API first or set id.');
        }

        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = [];
        }

        $parameters = array_merge((array)$parameters, ['user' => $this->getId()]);
        $className  = get_class($this);
        $action     = 'meeting2';
        $url        = self::generateUrl(get_defined_vars(), $className);

        return self::getManager()->execute('CRToDo', $url, Client::GET, null, null, $hydrate);
    }

    /**
     * Get user object by auth
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return CRUser
     * @throws \Exception
     */
    public static function getByAuth(array $parameters, $hydrate = null)
    {
        return self::execute(Client::GET, 'get-by-auth', $parameters, null, $hydrate);
    }

    /**
     * Get user object by username and hash
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return CRUser
     * @throws \Exception
     */
    public static function getByUsernameAndHash(array $parameters, $hydrate = null)
    {
        return self::execute(Client::GET, 'get-by-username-and-hash', $parameters, null, $hydrate);
    }

    /**
     * Get user object by username and encrypted password
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return CRUser
     * @throws \Exception
     */
    public static function loginWithEncryptedPassword(array $parameters, $hydrate = null)
    {
        return self::execute(Client::GET, 'login-with-encrypted-password', $parameters, null, $hydrate);
    }

    /**
     * Get user token and id by userName,password or encryptedPassword, systemName and type
     * If you specify HYDRATE_NONE as hydration method be sure to take care of the
     * scenario when multiple user tokens might be returned for same user if she
     * has duplicate Notes in the system
     * @param string  $action
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return mixed xml|array
     * @throws Exception
     */
    private static function doGetTokenStatic($action, array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!in_array($hydrate, [self::HYDRATE_NONE, self::HYDRATE_ARRAY])) {
            throw new Exception('Unsupported hydration mode for ' . __METHOD__);
        }

        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        $result = self::getManager()->execute($className, $url, Client::GET, null, null, $hydrate);

        // special logic to deal with multiple user tokens if duplicate notes exist in user's account
        if ($hydrate == self::HYDRATE_ARRAY) {
            if (isset($result['debug'])) {
                unset($result['debug']);
            }
            if (isset($result['token']) && is_array($result['token'])) {
                $result['token'] = array_shift($result['token']);
            }
        }

        return $result;
    }

    /**
     * @param array $parameters
     * @param int   $hydrate
     * @return mixed
     * @throws Exception
     * @see doGetTokenStatic
     */
    public static function getTokenStatic(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        return self::doGetTokenStatic('get-token', $parameters, $hydrate);
    }

    /**
     * @param array $parameters
     * @param int   $hydrate
     * @return mixed
     * @throws Exception
     * @see doGetTokenStatic
     */
    public static function getTokenStaticUsingEncryptedPassword(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        return self::doGetTokenStatic('get-token-using-encrypted-password', $parameters, $hydrate);
    }

    /**
     * Get user token and id by systemName and type
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     * @return mixed xml|array
     * @throws Exception
     */
    public function getToken(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!$this->getUserName() || !$this->getPassword()) {
            throw new Exception('Please load the object from the REST API first or set userName and password before calling this method.');
        }
        $parameters = array_merge($parameters, ['userName' => $this->getUserName(), 'password' => $this->getPassword()]);
        return CRUser::getTokenStatic($parameters, $hydrate);
    }

    /**
     * Get user token and id by systemName and type using encryptedPassword
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return mixed xml|array
     * @throws Exception
     */
    public function getTokenUsingEncryptedPassword(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!$this->getUserName() || !$this->getEncryptedPassword()) {
            throw new Exception('Please load the object from the REST API first or set userName and encryptedPassword before calling this method.');
        }
        $parameters = array_merge($parameters, ['userName' => $this->getUserName(), 'encryptedPassword' => $this->getEncryptedPassword()]);
        return CRUser::getTokenStaticUsingEncryptedPassword($parameters, $hydrate);
    }

    /**
     * @param array|null $parameters
     * @param int|null   $hydrate
     * @return CREmployee
     * @see Entity::subscribe()
     */
    public function subscribe(array $parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        return call_user_func_array(['parent', 'subscribe'], $args);
    }
}
