<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';

$usuario = new Pessoa(10, "Andre da Silva", 1.74, 25, 72, "Superior Completo", 650.00);
$conta = new ContaPoupanca(6677, "CC.1234.56", "10/07/2002", $usuario, 9876, 500.00, "10/07/2002");

// Obrigado a implementar o Método Abstrato Transferir da Classe-Pai

?>