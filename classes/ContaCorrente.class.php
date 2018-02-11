<?php
class ContaCorrente extends Conta
{
    public $Limite;
    public $TaxaTransferencia = 2.5;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        //Chamada do método construtor da classe-pai
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }

    /**
     * Método Retirar (Overwrite)
     * Verifica se a $quantia para retirar esta dentro do limite
     *
     * @param [type] $quantia
     * @return void
     */
    function Retirar($quantia)
    {

        //Imposto sobre movimentacao financeira
        $cpmf = 0.05;

        if(($this->Saldo + $this->Limite) >= $quantia)
        {
            // Executa método da classe-pai
            parent::Retirar($quantia);

            // Debita o Imposto
            parent::Retirar($quantia * $cpmf);
        }
        else{
            echo "Saldo insuficiente! \n";
            return false;
        }

        // retirada permitida
        return true;
    }


    /**
     * Método Abstrato Transferir() Herdado da Classe-Pai
     *
     * @param [type] $Conta
     * @param [type] $Valor
     * @return void
     */
    final function Transferir($Conta, $Valor)
    {
        if($this->Retirar($Valor))
        {
            $Conta->Depositar($Valor);
        }

        if($this->Titular != $Conta->Titular)
        {
            $this->Retirar($this->TaxaTransferencia);
        }
    }
}

?>