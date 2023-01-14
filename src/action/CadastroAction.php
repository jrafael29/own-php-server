<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/configdb.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "\\src\\database\\ProdutoDatabase.php" );

if($_SERVER['REQUEST_METHOD'] !== 'POST') return throw new Exception("Metodo não permitido", 405);

$db = new ProdutoDatabase($pdo);
try{
    $params = $_REQUEST;
    if($params['name'] != '' && $params['description'] != '' && $params['price'] != ''){
        $d = $db->insertNew($params);
        $_SESSION['info'] = "Produto adicionado com sucesso";
        header("Location: /cadastrar");
    }else{
        header("Location: /cadastrar");
    }
}
catch(Exception $exception){
    throw new Exception("Erro ao inserir produto: $exception", 500);
    $_SESSION['info'] = "Erro ao inserir o produto";
    header("Location: /cadastrar");

}