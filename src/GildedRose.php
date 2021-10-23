<?php

namespace App;

use App\Factories\ItemFactory;

class GildedRose
{
    private $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    /**
     * Get item by index from inventory
     *
     * @param $which
     * @return false|mixed
     */
    public function getItem($which) {
        if (!is_int($which) || !isset($this->items[$which])) {
            return false;
        }

        return $this->items[$which];
    }

    /**
     * Get all items from inventory
     *
     * @return array
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Handle the next day for the whole inventory
     */
    public function nextDay() {
        foreach ($this->items as $i => $item) {
            ($this->items[$i] = ItemFactory::getInstance($item))->degrade();
        }
    }
}
