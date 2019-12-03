<?php

namespace TataRysh\Ceidg\Type;

use Phpro\SoapClient\Type\ResultInterface;
use SimpleXMLElement;
use TataRysh\Ceidg\Exceptions\InvalidXmlException;

/**
 * Class GetResponse
 */
abstract class GetResponse implements ResultInterface
{
    /**
     * @return string|null
     */
    abstract public function toRaw(): ?string;

    /**
     * @return SimpleXMLElement
     * @throws InvalidXmlException
     */
    public function toXml(): SimpleXMLElement
    {
        libxml_use_internal_errors(true);

        $xml = simplexml_load_string($this->toRaw());

        if ($xml instanceof SimpleXMLElement) {
            return $xml;
        }

        throw new InvalidXmlException('XML could not be parsed. Response is invalid.');
    }
}
