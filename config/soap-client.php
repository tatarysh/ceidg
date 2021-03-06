<?php

use Phpro\SoapClient\CodeGenerator\Assembler\GetterAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler\GetterAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler\ImmutableSetterAssembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults(
            'https://datastore.ceidg.gov.pl/CEIDG.DataStore/services/DataStoreProvider201901.svc?wsdl',[]
        )->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('TataRysh\Ceidg\Type')
    ->setClientDestination('src')
    ->setClientName('CeidgClient')
    ->setClientNamespace('TataRysh\Ceidg')
    ->setClassMapDestination('src')
    ->setClassMapName('CeidgClassmap')
    ->setClassMapNamespace('TataRysh\Ceidg')
    ->addRule(new Rules\AssembleRule(new GetterAssembler(new GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new ImmutableSetterAssembler()));
