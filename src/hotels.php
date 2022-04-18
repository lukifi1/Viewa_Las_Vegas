<?php

namespace Htlw3r\Viewa;

class hotels
{
    private string $name;
    private int $stars;
    private location $location;
    private string $des;

    /**
     * @param string $name
     * @param int $stars
     * @param location $location
     * @param string $des
     */
    public function __construct(string $name, int $stars, location $location, string $des)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->location = $location;
        $this->des = $des;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @return location
     */
    public function getLocation(): location
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getDes(): string
    {
        return $this->des;
    }


}