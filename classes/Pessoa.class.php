<?php
class Pessoa
{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    /**
     * Método Construtor da Classe Pessoa
     * Inicializa as propriedades
     *
     * @param [type] $Codigo
     * @param [type] $Nome
     * @param [type] $Altura
     * @param [type] $Idade
     * @param [type] $Nascimento
     * @param [type] $Escolaridade
     * @param [type] $Salario
     */
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    /**
     * Método destrutor
     * Finaliza o objeto
     * @return void
     */
    function __desctruct()
    {
        echo "Objeto {$this->Nome} finalizando... <br>\n";
    }

     /**
      * Método Crescer
      * Aumenta a altura em $centimetros
      * @param [type] $centimetros
      * @return void
      */
     function Crescer($centimetros)
     {
         if($centimetros > 0){
             $this->Altura += $centimetros;
         }
     }

     /**
      * Método Formar
      * Altera a Escolaridade para $titulacao
      * @param [type] $titulacao
      * @return void
      */
     function Formar($titulacao)
     {
         $this->Escolaridade = $titulacao;
     }

     /**
      * Método Envelhecer
      * Altera a Idade em $anos
      * @param [type] $anos
      * @return void
      */
     function Envelhecer($anos)
     {
        if($anos > 0){
            $this->Idade += $anos;
        }
     }
}
?>