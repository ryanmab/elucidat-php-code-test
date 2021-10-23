<?php

namespace App\Items;

class DegradableItem extends Item
{
    protected $minQuality = 0;
    protected $maxQuality = 50;
    protected $qualityChange = -1;
    protected $sellInChange = -1;

    public function __construct($name, $quality, $sellIn) {
        parent::__construct($name, max($this->minQuality, min($this->maxQuality, $quality)), $sellIn);
    }

    /**
     * Degrade item based on parameters
     */
    public function degrade() {
        $this->sellIn = $this->sellIn + $this->sellInChange;

        if ($this->sellIn < 0) {
            $this->qualityChange *= 2;
        }

        $this->quality = $this->quality + $this->qualityChange;
        $this->quality = max($this->minQuality, min($this->maxQuality, $this->quality));
    }
}
