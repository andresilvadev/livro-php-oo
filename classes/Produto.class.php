<?php
class Produto
{
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

     # Método construtor de um Produto
     public function __construct($Codigo, $Descricao, $Quantidade, $Preco)
     {
         $this->Codigo = $Codigo;
         $this->Descricao = $Descricao;
         $this->Quantidade = $Quantidade;
         $this->Preco = $Preco;
     }
 

    /**
     * Método ImprimeEtiqueta
     * Imprime os dados do Produto
     * @return void
     */
    public function ImprimeEtiqueta()
    {
        print 'Código: ' . $this->Codigo . "<br\n";
        print 'Descrição: ' . $this->Descricao . "<br\n";
    }
}
?>