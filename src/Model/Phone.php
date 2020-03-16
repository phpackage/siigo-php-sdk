<?php

namespace Phpackage\Siigo\Model;

class Phone implements Model
{
    use ArrayableModel;

    /**
     * @var int|null Indicativo
     */
    public $indicative;

    /**
     * @var int|null Número
     */
    public $number;

    /**
     * @var int|null Extensión
     */
    public $extention;

    private function __construct()
    {
    }

    public static function fromNumber(int $number)
    {
        return self::create(null, $number, null);
    }

    public static function create(?int $indicative, ?int $number, ?int $extention)
    {
        $phone = new self();
        $phone->indicative = $indicative;
        $phone->number = $number;
        $phone->extention = $extention;

        return $phone;
    }

    /**
     * @return int|null
     */
    public function getIndicative(): ?int
    {
        return $this->indicative;
    }

    /**
     * @param int|null $indicative
     * @return Phone
     */
    public function setIndicative(?int $indicative): Phone
    {
        $this->indicative = $indicative;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     * @return Phone
     */
    public function setNumber(?int $number): Phone
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExtention(): ?int
    {
        return $this->extention;
    }

    /**
     * @param int|null $extention
     * @return Phone
     */
    public function setExtention(?int $extention): Phone
    {
        $this->extention = $extention;
        return $this;
    }
}
