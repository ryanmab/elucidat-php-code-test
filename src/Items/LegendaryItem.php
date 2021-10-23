<?php

namespace App\Items;

class LegendaryItem extends DegradableItem
{
    public function __construct($name, $quality, $sellIn) {
        $this->maxQuality = 80;
        $this->qualityChange = 0;
        $this->sellInChange = 0;
        parent::__construct($name, $quality, $sellIn);
    }
}
