<?php
# Carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';
include_once 'classes/ContaPoupanca.class.php';

# Criacao do objeto $usuario
$usuario = new Pessoa(10, "Andre da Silva", 1.74, 25, "28/07/1984", "Superior Completo", 650.00);

echo "Manipulando o objeto {$usuario->Nome}: <br>\n";


# Criacao do objeto $conta_usuario
$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/2002", $usuario, 9876, 500.00, 200,00);
$contas[2] = new ContaPoupanca(6678, "PP.1234.57", "10/07/2002", $usuario, 9876, 500.00, '10/07');


// Percorremos as contas
foreach($contas as $key => $conta)
{
    echo "Manipulando a conta $key de: {$conta->Titular->Nome}: <br><br>\n";
    echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br><br>\n";
    $conta->Depositar(200);

    echo " saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br><br>\n";
    $conta->Retirar(100);

    echo " saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br><br>\n";
}

?>