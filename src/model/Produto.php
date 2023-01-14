<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');

class Produto extends ProdutoDatabase
{

    function __construct(
        private $id,
        private $name,
        private $description,
        private $price
    ){}

    function getId(){
        return $this->id;
    }
    
    function getName(){
        return $this->name;
    }

    function getDescription(){
        return $this->description;
    }

    function getPrice(){
        return $this->price;
    }

}