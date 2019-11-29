<?php

namespace TataRysh\Ceidg\Type;

/**
 * Class GetMigrationData201901Response
 */
class GetMigrationData201901Response extends GetResponse
{
    /**
     * @var string
     */
    private $GetMigrationData201901Result;

    /**
     * @return string
     */
    public function getGetMigrationData201901Result(): string
    {
        return $this->GetMigrationData201901Result;
    }

    /**
     * @return string
     */
    public function toRaw(): string
    {
        return $this->getGetMigrationData201901Result();
    }
}
