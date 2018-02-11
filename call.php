<?php
# inclui classe Produto
include_once 'classes/Produto4.class.php';

# criando novo produto com o preço R$ 345.67
$produto = new Produto(1, 'Pendrive 512mb', 1, 345.67);

# executando método Venderm, passando 10 unidades
echo $produto->Vender(10);

?>