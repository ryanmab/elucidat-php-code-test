<?php

namespace App\Items;

class AgedBrie extends DegradableItem
{
    public function __construct($name, $quality, $sellIn) {
        $this->qualityChange = 1;

        parent::__construct($name, $quality, $sellIn);
    }
}
