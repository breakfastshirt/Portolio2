<?php

class Entity
{
    public $id;
    public $name;
    public $type;
    public $price;
    public $origin;
    public $image;
    public $review;
    
    function __construct($id, $name, $type, $price, $roast, $origin, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->origin = $origin;
        $this->image = $image;
        $this->review = $review;
    }

}

?>
