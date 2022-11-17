<?php 

//definindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);

function soma(float $n1, float $n2): float
{
    return $n1 + $n2;
}

function welcome(string $nome): string
{
    return "Bem vinde {$nome}";
}

function concat(int $n1, int $n2): string
{
    return (string) $n1 . (string) $n2;
}

function inicio (): void //estamos declarando que essa funcao "nao tem retorno"
{
    include '../src/views/inicio.phtml';
}

function listar (): void 
{
    //SELECT TODOS
    $select = abrirConexao()->query("SELECT * FROM tb_bebidas");
    include '../src/views/listar.phtml';
}

function novo (): void 
{
    //INSERT INTO
    if(false === empty($_POST)){
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $select = "INSERT INTO tb_bebidas (nome, quantidade) VALUES '{$nome}', '{$quantidade}'";
        $query = abrirConexao()->prepare($select);
        $query->execute();

    }
    include '../src/views/novo.phtml';
}

function editar (): void
{
    include '../src/views/editar.phtml';
}