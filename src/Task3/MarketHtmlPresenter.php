<?php declare(strict_types = 1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        // @todo
        $html = '<ul>';

        foreach ($market->getCurrencies() as $market_item) {
            $html .= '<li><img src="' . $market_item->getLogoUrl() . '">' . $market_item->getName() . ': ' . $market_item->getDailyPrice() . '</li>';
        }

        $html .= '</ul>';
        
        return $html;

    }
}
