<?php

$routes = [
    [
        'path' => '/',
        'method' => 'GET',
        'action' => 'sem',
        'view' => 'home.html'
    ],
    [
        'path' => '/listar',
        'method' => 'GET',
        'action' => 'sem',
        'view' => 'listar-produto.php'
    ],
    [
        'path' => '/cadastrar',
        'method' => 'GET',
        'action' => 'sem',
        'view' => 'cadastrar-produto.php'
    ],
    [
        'path' => '/salvar-produto',
        'method' => 'POST',
        'action' => 'CadastroAction.php',
        'view' => ''
    ],
    [
        'path' => '/deletar-produto',
        'method' => 'POST',
        'action' => 'DeletarAction.php',
        'view' => ''
    ]
];
