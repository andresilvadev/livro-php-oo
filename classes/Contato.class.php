<?php
class Contato
{
    # grava informações de contato
    public function SetContato($Nome, $Telefone, $Email)
    {
        $this->Nome = $Nome;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
    }

    # obtém informações de contato
    public function GetContato()
    {
        return "Nome: {$this->Nome}, Telefone: {$this->Telefone}, E-mail: {$this->Email}";
    }
}

?>