<?php
$method = $_SERVER['REQUEST_METHOD'];
$path = explode('?', $_SERVER['REQUEST_URI'])[0];
require_once('./rotas.php');
$pathsAllowed = function () use ($routes) {
    $arr = [];
    foreach ($routes as $route) {
        $arr[$route['path']] = $route['method'];
    }
    return $arr;
};
if (!array_key_exists($path, $pathsAllowed())) return throw new Exception('Rota não definida', 404);
if ($pathsAllowed()[$path] != $method) return throw new Exception('Método não permitido', 405);

$infoAboutRouteAccessed = function () use ($routes, $path) {
    $arr = [];
    foreach ($routes as $route) {
        if ($route['path'] == $path) $arr = $route;
    }
    return $arr;
};
$info = $infoAboutRouteAccessed();

if($info['method'] == "GET"){
    require_once('./src/view/layout/base.php');
    return $renderView($info['view']);
}

require_once('./src/action/ActionBase.php');
$loadAction($info['action']);

