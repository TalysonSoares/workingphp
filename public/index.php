<?php

$rota = $_SERVER['REQUEST_URI'];

function inicio () 
{
    include '../src/views/inicio.phtml';
}

function listar () 
{
    include '../src/views/listar.phtml';
}
function novo () 
{
    include '../src/views/novo.phtml';
}

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