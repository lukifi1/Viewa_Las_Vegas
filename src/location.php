<?php

namespace Htlw3r\Viewa;

class location
{
    private string $country;
    private string $postal;
    private string $city;
    private string $street;
    private string $number;

    /**
     * @param string $country
     * @param string $postal
     * @param string $city
     * @param string $street
     * @param string $number
     */
    public function __construct(string $country, string $postal, string $city, string $street, string $number)
    {
        $this->country = $country;
        $this->postal = $postal;
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPostal(): string
    {
        return $this->postal;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}