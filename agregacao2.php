<?php
include_once 'classes/Cesta.class.php';
include_once 'classes/Fornecedor1.class.php';
include_once 'classes/Produto.class.php';

$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A. ';

$cesta = new Cesta;
$cesta->AdicionaItem($fornecedor);

$cesta->CalculaTotal();
?>