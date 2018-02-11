<?php
include_once 'classes/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';
//var_dump($produto1);

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Eagles Hotel California';
//var_dump($produto2);

//imprime informações de etiqueta
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();
?>