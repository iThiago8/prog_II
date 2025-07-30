<?php

class Product {
    public $price;
    public $offer;

    public function calculate_final_price(){
        return $this->price - ($this->price * $this->offer);
    }

    public function __construct($price, $offer) {
        $this->price = $price;
        $this->offer = $offer;
    }
}

$product = new Product(100, 0.1); 

echo 'Hello world <br><br>';

$product_final_price = $product->calculate_final_price();

echo $product_final_price;