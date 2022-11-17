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

function excluir()
{
    $id = $_GET['id'];

    excluirAluno($id);

    header('location:/listar');
}

function listar (): void 
{
    //SELECT TODOS
    $alunos = buscarAlunos();
    include '../src/views/listar.phtml';
}

function novo (): void 
{
    //INSERT INTO
    include '../src/views/novo.phtml';
    novoAluno();
}

function editar (): void
{
    $id = $_GET["id"];
    $aluno = buscarUmAluno($id);
    atualizarAluno();
    include '../src/views/editar.phtml';

}
