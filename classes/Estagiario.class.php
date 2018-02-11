<?php
class Estagiario extends Funcionario
{
    /**
     * Método GetSalário sobreescrito
     * retorna o $Salario com 12% de bônus
     */
    function GetSalário()
    {
        return $this->Salario * 1.12;
    }

}