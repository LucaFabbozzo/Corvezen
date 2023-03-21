<?php

class Food extends Product {
  public $weight;
  public $ingredients;

  public function __construct(String $_name, String $_image, Int $_quantity, String $_category, Bool $_is_available, Int $_weight, Array $_ingredients)
  {
    parent::__construct($_name, $_image, $_quantity, $_category, $_is_available);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
  }

}

?>