<?php

class Product {
  public $name;
  public $image;
  public $quantity;
  public $category;
  public $is_available;
  
  
    public function __construct(String $_name, String $_image, Int $_quantity, String $_category, Bool $_is_available)
  {
    $this->name = $_name;
    $this->image = $_image;
    $this->quantity = $_quantity;
    $this->category = $_category;
    $this-> is_available = $_is_available;
  }

}


?>