<?php

namespace TataRysh\Ceidg\Type;

/**
 * Class GetIDResponse
 */
class GetIDResponse extends GetResponse
{
    /**
     * @var string
     */
    private $GetIDResult;

    /**
     * @return string
     */
    public function getGetIDResult(): string
    {
        return $this->GetIDResult;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->getGetIDResult();
    }
}
