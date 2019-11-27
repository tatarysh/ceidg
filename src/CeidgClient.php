<?php

namespace TataRysh\Ceidg;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use TataRysh\Ceidg\Type\GetID;
use TataRysh\Ceidg\Type\GetIDResponse;
use TataRysh\Ceidg\Type\GetMigrationData201901;
use TataRysh\Ceidg\Type\GetMigrationData201901Response;

/**
 * Class CeidgClient
 */
class CeidgClient extends Client
{
    /**
     * @param  RequestInterface|GetID $parameters
     * @return ResultInterface|GetIDResponse
     * @throws SoapException
     */
    public function getID(GetID $parameters): GetIDResponse
    {
        return $this->call('GetID', $parameters);
    }

    /**
     * @param  RequestInterface|GetMigrationData201901 $parameters
     * @return ResultInterface|GetMigrationData201901Response
     * @throws SoapException
     */
    public function getMigrationData201901(GetMigrationData201901 $parameters): GetMigrationData201901Response
    {
        return $this->call('GetMigrationData201901', $parameters);
    }
}
