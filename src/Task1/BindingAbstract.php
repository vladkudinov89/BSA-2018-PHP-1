<?php

namespace Cryptocurrency\Task1;


class BindingAbstract implements Currency
{

    protected $nameCrypt = '';

    protected $logoURLCrypt = '';

    protected $day_price = 0;

    public function __construct($day_price)
    {
        $this->day_price = $day_price;
    }

    public function getName(): string{
        return $this->nameCrypt;
    }

    public function getDailyPrice(): float{
        return $this->day_price;
    }

    public function getLogoUrl(): string{
        return $this->logoURLCrypt;
    }


}