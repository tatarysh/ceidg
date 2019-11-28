<?php

namespace TataRysh\Ceidg\Type;

use Phpro\SoapClient\Type\ResultInterface;
use SimpleXMLElement;

/**
 * Class GetResponse
 */
abstract class GetResponse implements ResultInterface
{
    /**
     * @return string
     */
    abstract public function getResponse(): string;

    /**
     * @return SimpleXMLElement
     */
    public function toXml(): SimpleXMLElement
    {
        return simplexml_load_string($this->getResponse());
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->xml2array($this->toXml());
    }

    /**
     * @param  SimpleXMLElement  $xml
     *
     * @return array
     */
    private function xml2array(SimpleXMLElement $xml): array
    {
        $array = [];

        foreach ((array)$xml as $index => $node) {
            $array[$index] = (is_object($node)) ? $this->xml2array($node) : $node;
        }

        return $array;
    }
}
