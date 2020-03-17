<?php

namespace Phpackage\Siigo\Model;

class City implements Model
{
    use ArrayableModel;

    /**
     * @var string|null
     */
    public $countryCode;

    /**
     * @var string|null
     */
    public $stateCode;

    /**
     * @var string|null
     */
    public $cityCode;

    private function __construct()
    {
    }

    public static function create(?string $countryCode, ?string $stateCode, ?string $cityCode)
    {
        $city = new self();
        $city->countryCode = $countryCode;
        $city->stateCode = $stateCode;
        $city->cityCode = $cityCode;

        return $city;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     * @return City
     */
    public function setCountryCode(?string $countryCode): City
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    /**
     * @param string|null $stateCode
     * @return City
     */
    public function setStateCode(?string $stateCode): City
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @param string|null $cityCode
     * @return City
     */
    public function setCityCode(?string $cityCode): City
    {
        $this->cityCode = $cityCode;
        return $this;
    }
}
