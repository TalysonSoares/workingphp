<?php 

declare(strict_types=1);

function buscarAlunos(): iterable
{
    $sql = 'SELECT * FROM tb_alunos';

    $alunos = abrirConexao()->query($sql);

    return $alunos;
}

function excluirAluno(string $id): void 
{
    $sql = "DELETE FROM tb_alunos WHERE id={$id}";
    abrirConexao()->query($sql);
}