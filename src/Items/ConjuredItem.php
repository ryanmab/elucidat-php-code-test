<?php

namespace App\Items;

class ConjuredItem extends DegradableItem
{
    public function __construct($name, $quality, $sellIn) {
        $this->qualityChange *= 2;

        parent::__construct($name, $quality, $sellIn);
    }
}
