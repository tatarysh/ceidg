<?php

namespace TataRysh\Ceidg\Type;

use Phpro\SoapClient\Type\ResultInterface;

/**
 * Class GetIDResponse
 */
class GetIDResponse implements ResultInterface
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
}
