<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . "\\configdb.php");
$produtos = new ProdutoDatabase($pdo);

?>

<div>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach ($produtos->getAll() as $produto) : ?>
                <tr>
                    <td> <?= $produto->getId() ?> </td>
                    <td> <?= $produto->getName() ?> </td>
                    <td> <?= $produto->getDescription() ?> </td>
                    <td> <?= $produto->getPrice() ?> </td>
                    <td>
                        <form action="/deletar-produto" method="post">
                            <input type="hidden" name="id" value="<?= $produto->getId() ?>">
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Deseja mesmo excluir o produto?')" >X</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>