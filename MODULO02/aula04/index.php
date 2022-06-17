<?php

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@email.com', '123456'); //construtor do Usuario
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$g1 = new Gestor(6000, 'zezim@email.com', '123123',); //Construtor do gestor
$g1->setNome('Zezim');
// $g1->setSalario(6000);

$gg1 = new GestorGeral('maria@email.com', '1q2w3e', 9000);

// $us = new Usuario('hacker@email.com', '111111');

// $clienteVip = new ClienteVip('clientevip@email.com', '123123');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
// var_dump($clienteVip);






