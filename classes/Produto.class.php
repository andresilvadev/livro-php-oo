<?php
class Produto
{
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

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