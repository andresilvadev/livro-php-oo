<?php
# Carrega as classes
 include_once 'classes/Pessoa.class.php';
 include_once 'classes/Conta.class.php';

# Criacao do Objeto $usuario
$usuario = new Pessoa(0010, "Andre Luiz da Silva", 1.74, 25, "28/07/1984", "Superior Completo", 650.00); 

echo "Manipulando o objeto {$usuario->Nome}: <br>\n";
echo "{$usuario->Nome} tem escolaridade de nível : {$usuario->Escolaridade} <br>\n";

$usuario->Formar('Analista de Sistamas');
echo "{$usuario->Nome} é formado em : {$usuario->Escolaridade} <br>\n";

echo "{$usuario->Nome} possuia {$usuario->Idade} anos <br>\n";

$usuario->Envelhecer(8);
echo "{$usuario->Nome} atualmente possui {$usuario->Idade} anos <br>\n";


# Criadao do objeto $conta_usuario
$conta_usuario = new Conta(6677, "CC.1234.56", "10/07/2002", $usuario, 9876, 567.89);

echo "<br>\n";
echo "Manipulando a conta de: {$conta_usuario->Titular->Nome}: <br>\n";

echo "O saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

$conta_usuario->Depositar(20);
echo "O saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

$conta_usuario->Retirar(10);
echo "O saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

 ?>