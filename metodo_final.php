<?php
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';

class ContaCorrenteEspecial extends ContaCorrente
{
    function Depositar($Valor)
    {
        echo "Sobreescrevendo o método Depositar(). <br>\n";
        parent::Depositar($Valor);
    }

    function Transferir($Conta, $Valor)
    {
        echo "Sobreescrevendo o método Transferir(). <br>\n";
        parent::Transferir($Conta, $Valor);
    }
}

?>