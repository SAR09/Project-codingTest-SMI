<?php

namespace App\Domain\Entities;


class Product
{
    public $id;
    public $images;
    public $title;
    public $description;
    public $category;
    public $price;
    public $stock;

    public function __construct($id, $images, $title, $description, $category, $price, $stock)
    {
        $this->id = $id;
        $this->images = $images;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
        $this->stock = $stock;
    }

}


?>