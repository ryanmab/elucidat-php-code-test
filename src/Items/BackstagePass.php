<?php

namespace App\Items;

class BackstagePass extends DegradableItem
{
    public function __construct($name, $quality, $sellIn) {
        $this->qualityChange = 1;

        parent::__construct($name, $quality, $sellIn);
    }

    /**
     * Degrade backstage passes
     */
    public function degrade() {
        if ($this->sellIn <= 0) {
            // item passed sell by
            $this->quality = 0;
            $this->qualityChange = 0;
        }
        else if ($this->sellIn < 6) {
            // item nearing sell by, increase quality degradation rate
            $this->qualityChange = 3;
        }
        else if ($this->sellIn < 11) {
            // item beginning to near sell by, increase quality degradation rate
            $this->qualityChange = 2;
        }

        parent::degrade();
    }
}
