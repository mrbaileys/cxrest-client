Carerix REST API Client Library
=========
Client library to access your Carerix application via RESTful API (https://api.carerix.com) 

Installation
------------
Recommened way is to install the library using composer and private Careix composer channel:
```bash
$ composer config repositories.carerix composer https://composer.carerix.com
$ composer require carerx/cxrest-client  
```

Basic usage
- 
Bootstrapping:
```php
use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Manager;
use Carerix\Api\Rest\Entity;

$client = new Client();

$manager = new Manager($client);
$manager->autoDiscoverEntities();

$manager->setUsername(CUSTOMER_NAME);
$manager->setPassword(API_TOKEN);

Entity::setManager($manager);
```

Usage (after entity manager was bootstrapped correctly): 
```php
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRUser;

// get user by ID
$user = CRUser::find(125);

// apply for a job
$params = array('x-cx-pub' => PUBLICATION_ID_GOES_HERE);

$employee = new CREmployee();
$employee
    ->setFirstName('John')
    ->setLastName('Smith');
$employee->apply($params); 
```

Resources
---------
http://res.carerix.com/manual/english/cxfields.htm Carerix Data Models
http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest - RESTful API description
http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods - Detailed description of the methods provided by Carerix RESTful API
http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_client - Detailed description and examples for this Client Library 
http://development.wiki.carerix.com/cxwiki/doku.php?id=xml - all developers, examples of XML packages that can be used with Carerix RESTful API
https://groups.google.com/forum/#!forum/carerix-rest-api - Carerix RESTful API Google Group - see if your question had already been answered. If not post your question and get an answer.

To access these resources you'll have to apply a partner developer account.  

License
-------
All contents of this project is licensed under the MIT license. See `LICENSE` file for details.

Acknowledgements
----------------
This project is highly inspired by Doctrine's (www.doctrine-project.org) implementation of the ActiveRecord pattern and Doctrine REST API Client.
