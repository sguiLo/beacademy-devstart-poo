<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno(); //Objeto Aluno
$a1->nome = 'Gustavo';
$a1->cpf = '123.123.123-12';

$a1->nome .= ' Oliveira';


$cursoPHP = new Curso(); //Objeto Curso
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o basico e intermediario do PHP';

echo var_dump($a1);
