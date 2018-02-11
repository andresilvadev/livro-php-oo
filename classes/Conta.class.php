<?php
abstract class Conta
{
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    /**
     * Método Construtor da Classe Conta
     *
     * @param [type] $Agencia
     * @param [type] $Codigo
     * @param [type] $DataDeCriacao
     * @param [type] $Titular
     * @param [type] $Senha
     * @param [type] $Saldo
     */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        
        // Chamada a outro método da classe
        $this->Depositar($Saldo);
        $this->Cancelada = false;
    }

    /**
     * Método destrutor
     * Finaliza o Objeto
     */
    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada... <br>\n";
    }

    /**
     * Método Retirar
     * Diminui o saldo em $quantia
     * @param [type] $quantia
     * @return void
     */
    function Retirar($quantia)
    {
        if($quantia > 0){
            $this->Saldo -= $quantia;
        }
    }

    /**
     * Método Depositar
     * Aumenta o saldo em $quantia
     * @param [type] $quantia
     * @return void
     */
    function Depositar($quantia)
    {
        if($quantia > 0){
            $this->Saldo += $quantia;
        }
    }

    /**
     * Método ObterSaldo
     * Retorna o Saldo atual da conta
     * @return void
     */
    function ObterSaldo()
    {
        return $this->Saldo;
    }

    
    /**
     * Método Abstrato Transferir()
     * Obrigaa as classes filhas a implementar este método
     *
     * @param [type] $Conta
     * @param [type] $Valor
     * @return void
     */
    abstract function Transferir($Conta, $Valor);
    
}
?>