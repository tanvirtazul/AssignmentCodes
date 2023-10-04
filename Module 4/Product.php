<?php

class Product{
    public $id;
    public $name;
    public $price;

    public function __construct(int $id, string $name, float $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice(){
        // return (string)sprintf("$%0.2f", $this->price);
        return strval(sprintf("$%0.2f", $this->price)); //converting float to string
    }

    public function showDetails(){
        
        $text = <<<heredoc
        Product Details:
        - ID: $this->id
        - Name: $this->name
        - Price: 
        heredoc;

        echo "$text".self::getFormattedPrice();
    }
}

$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();
