<?php
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';

class ContaPoupancaUniversitaria extends ContaPoupanca
{
    // Sobrescrita de métodos
    public $Aniversario;
    
        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
        {
            //Chamada do método construtor da classe-pai
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
            $this->Aniversario = $Aniversario;
        }
    
        /**
         * Método Retirar (Overwrite)
         * Verifica se há saldo para retirar tal $quantia
         * @param [type] $quantia
         * @return void
         */
        function Retirar($quantia)
        {
            if($this->Saldo >= $quantia)
            {
                // Executa método da classe-pai
                parent::Retirar($quantia);
            }
            else{
                echo "Saldo insuficiente! \n";
                return false;
            }
    
            // retirada permitida
            return true;
        }
}
?>