<?php

namespace TataRysh\Ceidg\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

/**
 * Class GetID
 */
class GetID implements RequestInterface
{
    /**
     * @var string
     */
    private $AuthToken;

    /**
     * @var DateTimeInterface
     */
    private $DateFrom;

    /**
     * @var DateTimeInterface
     */
    private $DateTo;

    /**
     * @var DateTimeInterface
     */
    private $MigrationDateFrom;

    /**
     * @var DateTimeInterface
     */
    private $MigrationDateTo;

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->AuthToken;
    }

    /**
     * @param  string $AuthToken
     * @return GetID
     */
    public function withAuthToken($AuthToken)
    {
        $new = clone $this;
        $new->AuthToken = $AuthToken;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param  DateTimeInterface $DateFrom
     * @return GetID
     */
    public function withDateFrom($DateFrom)
    {
        $new = clone $this;
        $new->DateFrom = $DateFrom;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

    /**
     * @param  DateTimeInterface $DateTo
     * @return GetID
     */
    public function withDateTo($DateTo)
    {
        $new = clone $this;
        $new->DateTo = $DateTo;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getMigrationDateFrom()
    {
        return $this->MigrationDateFrom;
    }

    /**
     * @param  DateTimeInterface $MigrationDateFrom
     * @return GetID
     */
    public function withMigrationDateFrom($MigrationDateFrom)
    {
        $new = clone $this;
        $new->MigrationDateFrom = $MigrationDateFrom;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getMigrationDateTo()
    {
        return $this->MigrationDateTo;
    }

    /**
     * @param  DateTimeInterface $MigrationDateTo
     * @return GetID
     */
    public function withMigrationDateTo($MigrationDateTo)
    {
        $new = clone $this;
        $new->MigrationDateTo = $MigrationDateTo;

        return $new;
    }
}
