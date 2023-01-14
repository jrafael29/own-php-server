<?php

class Produto 
{

    function __construct(
        private $name,
        private $description,
        private $price
    ){}

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

}