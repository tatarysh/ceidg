<?php

namespace TataRysh\Ceidg\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

/**
 * Class GetMigrationData201901
 */
class GetMigrationData201901 implements RequestInterface
{
    /**
     * @var string
     */
    private $AuthToken;

    /**
     * @var ArrayOfString
     */
    private $NIP;

    /**
     * @var ArrayOfString
     */
    private $REGON;

    /**
     * @var ArrayOfString
     */
    private $NIP_SC;

    /**
     * @var ArrayOfString
     */
    private $REGON_SC;

    /**
     * @var ArrayOfString
     */
    private $Name;

    /**
     * @var ArrayOfString
     */
    private $Province;

    /**
     * @var ArrayOfString
     */
    private $County;

    /**
     * @var ArrayOfString
     */
    private $Commune;

    /**
     * @var ArrayOfString
     */
    private $City;

    /**
     * @var ArrayOfString
     */
    private $Street;

    /**
     * @var ArrayOfString
     */
    private $Postcode;

    /**
     * @var DateTimeInterface
     */
    private $DateFrom;

    /**
     * @var DateTimeInterface
     */
    private $DateTo;

    /**
     * @var ArrayOfString
     */
    private $PKD;

    /**
     * @var ArrayOfInt
     */
    private $status;

    /**
     * @var ArrayOfString
     */
    private $UniqueId;

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
     * @return GetMigrationData201901
     */
    public function withAuthToken($AuthToken)
    {
        $new = clone $this;
        $new->AuthToken = $AuthToken;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getNIP()
    {
        return $this->NIP;
    }

    /**
     * @param  ArrayOfString $NIP
     * @return GetMigrationData201901
     */
    public function withNIP($NIP)
    {
        $new = clone $this;
        $new->NIP = $NIP;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getREGON()
    {
        return $this->REGON;
    }

    /**
     * @param  ArrayOfString $REGON
     * @return GetMigrationData201901
     */
    public function withREGON($REGON)
    {
        $new = clone $this;
        $new->REGON = $REGON;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getNIP_SC()
    {
        return $this->NIP_SC;
    }

    /**
     * @param  ArrayOfString $NIP_SC
     * @return GetMigrationData201901
     */
    public function withNIP_SC($NIP_SC)
    {
        $new = clone $this;
        $new->NIP_SC = $NIP_SC;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getREGON_SC()
    {
        return $this->REGON_SC;
    }

    /**
     * @param  ArrayOfString $REGON_SC
     * @return GetMigrationData201901
     */
    public function withREGON_SC($REGON_SC)
    {
        $new = clone $this;
        $new->REGON_SC = $REGON_SC;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  ArrayOfString $Name
     * @return GetMigrationData201901
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getProvince()
    {
        return $this->Province;
    }

    /**
     * @param  ArrayOfString $Province
     * @return GetMigrationData201901
     */
    public function withProvince($Province)
    {
        $new = clone $this;
        $new->Province = $Province;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getCounty()
    {
        return $this->County;
    }

    /**
     * @param  ArrayOfString $County
     * @return GetMigrationData201901
     */
    public function withCounty($County)
    {
        $new = clone $this;
        $new->County = $County;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getCommune()
    {
        return $this->Commune;
    }

    /**
     * @param  ArrayOfString $Commune
     * @return GetMigrationData201901
     */
    public function withCommune($Commune)
    {
        $new = clone $this;
        $new->Commune = $Commune;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param  ArrayOfString $City
     * @return GetMigrationData201901
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param  ArrayOfString $Street
     * @return GetMigrationData201901
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param  ArrayOfString $Postcode
     * @return GetMigrationData201901
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

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
     * @return GetMigrationData201901
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
     * @return GetMigrationData201901
     */
    public function withDateTo($DateTo)
    {
        $new = clone $this;
        $new->DateTo = $DateTo;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getPKD()
    {
        return $this->PKD;
    }

    /**
     * @param  ArrayOfString $PKD
     * @return GetMigrationData201901
     */
    public function withPKD($PKD)
    {
        $new = clone $this;
        $new->PKD = $PKD;

        return $new;
    }

    /**
     * @return ArrayOfInt
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param  ArrayOfInt $status
     * @return GetMigrationData201901
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return ArrayOfString
     */
    public function getUniqueId()
    {
        return $this->UniqueId;
    }

    /**
     * @param  ArrayOfString $UniqueId
     * @return GetMigrationData201901
     */
    public function withUniqueId($UniqueId)
    {
        $new = clone $this;
        $new->UniqueId = $UniqueId;

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
     * @return GetMigrationData201901
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
     * @return GetMigrationData201901
     */
    public function withMigrationDateTo($MigrationDateTo)
    {
        $new = clone $this;
        $new->MigrationDateTo = $MigrationDateTo;

        return $new;
    }
}
