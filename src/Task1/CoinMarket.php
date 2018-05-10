<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{

    private $currenciesCrypt = [];

    public function addCurrency(Currency $currency): void
    {
        // @todo
        $this->currenciesCrypt[] = $currency;
    }

    public function maxPrice(): float
    {
        // @todo
        $maxPrice = 0;

        foreach ($this->currenciesCrypt as $itemCrypt){
            if($itemCrypt->getDailyPrice() > $maxPrice){
                $maxPrice = $itemCrypt->getDailyPrice();
            }//if
        }//foreach

        return $maxPrice;
    }

    public function getCurrencies(): array
    {
        // @todo
        return $this->currenciesCrypt;
    }
}