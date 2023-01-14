<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . "\\configdb.php");
$produto = new ProdutoDatabase($pdo);

$id = $_REQUEST['id'];
try {
    $produto->deleteFromId($id);
    $_SESSION['info'] = "Produto deletado com sucesso";
    header("Location: /listar");
    exit();
} catch (\Throwable $th) {
    throw new Exception("Erro ao deletrar produto: $exception", 500);
    $_SESSION['info'] = "Erro ao deletrar o produto";
    header("Location: /listar");
    exit();
}
