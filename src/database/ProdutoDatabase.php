<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');


class ProdutoDatabase extends Database {

    function getAll()
    {
        $sql = $this->pdo->query("SELECT * FROM produtos");
        $produtos = [];
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();
            foreach($data as $item){
                $produto = new Produto($item['id'], $item['name'], $item['description'], $item['price']);
                $produtos[] = $produto;
            }
        }
        return $produtos;
    }

    function insertNew(array $data)
    {
        $sql = $this->pdo->prepare("INSERT INTO produtos (name, description, price) VALUES (:name, :description, :price)");
        $sql->bindValue(':name', $data['name']);
        $sql->bindValue(':description', $data['description']);
        $sql->bindValue(':price', $data['price']);
        $sql->execute();
        return true;
    }

    function deleteFromId($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM produtos WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return true;
    }
}