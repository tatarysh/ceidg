<?php

namespace TataRysh\Ceidg\Type;

use Phpro\SoapClient\Type\ResultInterface;

/**
 * Class GetMigrationData201901Response
 */
class GetMigrationData201901Response implements ResultInterface
{
    /**
     * @var string
     */
    private $GetMigrationData201901Result;

    /**
     * @return string
     */
    public function getGetMigrationData201901Result()
    {
        return $this->GetMigrationData201901Result;
    }

    /**
     * @param  string $GetMigrationData201901Result
     * @return GetMigrationData201901Response
     */
    public function withGetMigrationData201901Result($GetMigrationData201901Result)
    {
        $new = clone $this;
        $new->GetMigrationData201901Result = $GetMigrationData201901Result;

        return $new;
    }
}
