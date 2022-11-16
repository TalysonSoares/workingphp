<?php

$rota = $_SERVER['REQUEST_URI'];

//usando require_once pq esse arquivo é importante e não pode jamais ser duplicado.
require_once '../src/controller/alunosController.php';

$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
];

include '../src/views/menu.phtml';

if (false === isset($paginas[$rota])) {
    echo "Erro 404";
    exit;
};

echo $paginas[$rota]();