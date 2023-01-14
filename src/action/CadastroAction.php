<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . "\\configdb.php");


if($_SERVER['REQUEST_METHOD'] !== 'POST') return throw new Exception("Metodo não permitido", 405);

$produto = new ProdutoDatabase($pdo);

try{
    $params = $_REQUEST;
    if($params['name'] != '' && $params['description'] != '' && $params['price'] != ''){
        $produto->insertNew($params);
        $_SESSION['info'] = "Produto adicionado com sucesso";
        header("Location: /cadastrar");
        exit();
    }else{
        header("Location: /cadastrar");
        exit();

    }
}
catch(Exception $exception){
    throw new Exception("Erro ao inserir produto: $exception", 500);
    $_SESSION['info'] = "Erro ao inserir o produto";
    header("Location: /cadastrar");
    exit();

}