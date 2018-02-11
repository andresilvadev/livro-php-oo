<?php
class Fornecedor
{
    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;
    public $Contato;
    
    # Método Construtor
    public function __construct()
    {
        // instancia novo Contato
        $this->Contato = new Contato;
    }

    # Grava Contato
    public function SetContato($Nome, $Telefone, $Email)
    {
        // delega chamada de método
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }

    # retorna contato
    public function GetContato()
    {
        // delega chamada de método
        return $this->Contato->GetContato();
    }
}
?>