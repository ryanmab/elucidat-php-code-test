<?php

namespace App\Factories;

use App\Items\AgedBrie;
use App\Items\BackstagePass;
use App\Items\ConjuredItem;
use App\Items\DegradableItem;
use App\Items\LegendaryItem;

class ItemFactory
{
    private static $items = array(
        "aged brie" => AgedBrie::class,
        "backstage passes to a tafkal80etc concert" => BackstagePass::class,
        "conjured mana cake" => ConjuredItem::class,
        "sulfuras, hand of ragnaros" => LegendaryItem::class
    );

    /**
     * Convert generic item into its more specific counterpart
     *
     * @param $item
     * @return DegradableItem|mixed
     */
    public static function getInstance($item) {
        if (is_subclass_of($item, 'DegradableItem')) {
            return $item; // factory has already been used on item
        }

        $name = trim(strtolower($item->name));
        if (!isset(self::$items[$name])) {
            // no factory match, assume normal item
            return new DegradableItem($item->name, $item->quality, $item->sellIn);
        }

        // factory match found
        return new self::$items[$name]($item->name, $item->quality, $item->sellIn);
    }
}
