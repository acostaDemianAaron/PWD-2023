<?php

class Item
{
    public $title;
    public $quantity;
    public $unit_price;

    public function __construct($title, $quantity, $unit_price)
    {
        $this->title = $title;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
    }
}
