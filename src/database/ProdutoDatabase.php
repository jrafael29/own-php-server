<?php 

require_once(dirname(__DIR__) . '\\database\\Database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'\\src\\model\\Produto.php');

class ProdutoDatabase extends Database {

    function getAll(){
        $sql = $this->pdo->query("SELECT * FROM produtos");


        $produtos = [];
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $produto = new Produto(
                    $item->name,
                    $item->description,
                    $item->price
                );

                $produtos[] = $produto;
            }
        }
        return $produtos;
    }

    function insertNew(array $data){
        $sql = $this->pdo->prepare("INSERT INTO produtos (name, description, price) VALUES (:name, :description, :price)");
        $sql->bindValue(':name', $data['name']);
        $sql->bindValue(':description', $data['description']);
        $sql->bindValue(':price', $data['price']);
        $sql->execute();
        return true;
    }
}