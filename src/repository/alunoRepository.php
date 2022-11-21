<?php

declare(strict_types=1);

function buscarAlunos(): iterable
{
    $sql = 'SELECT * FROM tb_aluno';

    $alunos = abrirConexao()->query($sql);

    return $alunos;
}

function buscarUmAluno($id): iterable
{
    $sql = "SELECT * FROM tb_aluno WHERE id ='{$id}'";

    $aluno = abrirConexao()->query($sql);

    return $aluno->fetch(PDO::FETCH_ASSOC);
}

function novoAluno(string $nome, string $cidade, string $matricula): void
{
    $sql = "INSERT INTO tb_aluno (nome, matricula, cidade) VALUES (?,?,?)";
    $query = abrirConexao()->prepare($sql);
    $query->execute([$nome, $matricula, $cidade]);
}

function atualizarAluno(string $nome, string $cidade, string $matricula, string $id): void
{

    $sql = "UPDATE tb_aluno SET nome=?, matricula=?, cidade=? WHERE id=?";
    $query = abrirConexao()->prepare($sql);
    $query->execute([$nome, $matricula, $cidade,$id]);
}

function excluirAluno(string $id): void
{
    $sql = "DELETE FROM tb_aluno WHERE id={$id}";

    abrirConexao()->query($sql);
}