<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1->nome = 'Gustavo';
$p1->cpf = '13194990667';
$p1->salario = 1000;

echo var_dump($p1);