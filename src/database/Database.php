<?php 

class Database 
{
    protected $pdo;

    function __construct($engine){
        if($engine instanceof PDO){
            $this->pdo = $engine;
            return;
        }
        throw new Exception("A engine precisa ser PDO!");
    }
}