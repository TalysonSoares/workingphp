<?php

$rota = $_SERVER['REQUEST_URI'];

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