# CEIDG Soap Client

The purpose of this package is to get company data from the CEIDG database using their public API.

All API queries require an authorization key. You can get it by registering on the [government website](https://datastore.ceidg.gov.pl).

## Installation

You need to use Composer to add the CEIDG Soap Client to your project:

```
composer require tatarysh/soap-ceidg
```

## Usage

```php
<?php

use TataRysh\Ceidg\CeidgClientFactory;
use TataRysh\Ceidg\Type\GetID;
use TataRysh\Ceidg\Type\GetMigrationData201901;

$token = 'your-token';
$client = CeidgClientFactory::factory();

$params = (new GetID())->withAuthToken($token);
$response = $client->getID($params);
var_dump($response->getGetIDResult());

$params = (new GetMigrationData201901())->withAuthToken($token);
$response = $client->getMigrationData201901($params);
var_dump($response->getGetMigrationData201901Result());
```
To read more about the return data format, see: [here](https://datastore.ceidg.gov.pl/CEIDG.DataStore/Styles/Regulations/API_Datastore_20190314.pdf).

## Information

CEIDG Soap Client package has been created using [phpro/soap-client](https://github.com/phpro/soap-client) wizard.

Package is still in pre-release stage.

## TODO

- unit tests
- code optimization
- psr standards
