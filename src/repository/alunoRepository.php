<?php

declare(strict_types=1);

function buscarAlunos(): iterable
{
    $sql = 'SELECT * FROM tb_alunos';

    $alunos = abrirConexao() -> query($sql);

    return $alunos;
}

function buscarUmAluno($id): iterable
{
    $sql = "SELECT * FROM tb_alunos WHERE id ='{$id}'";

    $alunos = abrirConexao() -> query($sql);

    return $alunos -> fetch(PDO::FETCH_ASSOC);
}

function novoAluno (): void 
{
    //INSERT INTO
    if(false === empty($_POST)){
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $cidade = $_POST['cidade'];

        $sql = "INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?, ?,?)";
        $query = abrirConexao()->prepare($sql);
        $query->execute([$nome, $matricula, $cidade]);

        header ('location: /listar');


    }
}

function atualizarAluno (): void 
{
    //INSERT INTO
    if(false === empty($_POST)){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $cidade = $_POST['cidade'];

        $sql = "UPDATE tb_alunos SET nome =?, matricula=?, cidade=? WHERE id=?";
        $query = abrirConexao()->prepare($sql);
        $query->execute([$nome, $matricula, $cidade, $id]);

        header ('location: /listar');


    }
}

function excluirAluno(string $id): void
{
    $sql = "DELETE FROM tb_alunos WHERE id={$id}";

    abrirConexao() -> query($sql);
}