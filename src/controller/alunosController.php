<?php

//definido que nesse arquivo será trabalhado so tipos de dados
declare(strict_types=1);

function inicio (): void //estamos declarando que essa função "não tem retorno"
{
    include '../src/views/inicio.phtml';
}

function listar (): void
{
    include '../src/views/listar.phtml';
}
function novo (): void 
{
    include '../src/views/novo.phtml';
}
