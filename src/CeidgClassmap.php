<?php

namespace TataRysh\Ceidg;

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use TataRysh\Ceidg\Type;

/**
 * Class CeidgClassmap
 */
class CeidgClassmap
{
    /**
     * @return ClassMapCollection
     */
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('ArrayOfInt', Type\ArrayOfInt::class),
            new ClassMap('GetID', Type\GetID::class),
            new ClassMap('GetIDResponse', Type\GetIDResponse::class),
            new ClassMap('GetMigrationData201901', Type\GetMigrationData201901::class),
            new ClassMap('GetMigrationData201901Response', Type\GetMigrationData201901Response::class),
        ]);
    }
}
