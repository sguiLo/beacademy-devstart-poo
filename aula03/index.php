<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas pra rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');


$p1 = new Produto('Tênis de Corrida', 299, $c3);
$p1->setDescricao('Tênis para corrida profissional');
// $p1->setValor(299);

$p2 = new Produto('Saia Jeans', 100, $c1);
// $p2->setCategoria($c2); nao vai funcionar pq Categoria é apenas para leitura
// $p2->setNome('Saia Jeans');
// $p2->setValor(100);

$p3 = new Produto('Calça Branca', 150, $c3);
// $p3->setNome('Calça Branca');



var_dump($p1);
var_dump($p2);
var_dump($p3);