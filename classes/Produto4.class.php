<?php
class Produto
{
    public $Codigo;
    public $Descricao;
    public $Quantidade;
    private $Preco;
    const MARGEM = 10;

    # Método construtor de um Produto
    public function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }

    # intercepta a chamada à métodos
    public function __call($metodo, $parametros)
    {
        echo "Você executou o método: {$metodo}<br>\n";
        foreach($parametros as $key => $parametro)
        {
            echo "\tParametro $key: $parametro<br>\n";
        }
    }

}
?>