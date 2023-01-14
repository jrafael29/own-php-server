<?php

$routes = [
    [
        'path' => '/',
        'method' => 'GET',
        'action' => 'sem',
        'view' => 'home.html'
    ],
    [
        'path' => '/cadastrar',
        'method' => 'GET',
        'action' => 'sem',
        'view' => 'cadastrar.php'
    ],
    [
        'path' => '/salvar-cadastro',
        'method' => 'POST',
        'action' => 'CadastroAction.php',
        'view' => ''
    ]
];
