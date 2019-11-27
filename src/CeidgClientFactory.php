<?php

namespace TataRysh\Ceidg;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

/**
 * Class CeidgClientFactory
 */
class CeidgClientFactory
{
    protected const WSDL_PROD = 'https://datastore.ceidg.gov.pl/CEIDG.DataStore/services/DataStoreProvider201901.svc?wsdl';

    /**
     * @param  string|null  $wsdl
     * @return CeidgClient
     */
    public static function factory(string $wsdl = null) : CeidgClient
    {
        $wsdl = $wsdl ?: self::WSDL_PROD;

        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(CeidgClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();

        return new CeidgClient($engine, $eventDispatcher);
    }
}
