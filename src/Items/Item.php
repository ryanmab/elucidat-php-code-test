<?php

namespace App\Items;

class Item
{
    public $name;
    public $sellIn;
    public $quality;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }
}
