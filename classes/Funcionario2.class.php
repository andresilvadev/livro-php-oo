<?php 
class Funcionario
{
    private $Codigo;
    public $nome;
    private $Nascimento;
    protected $Salario;

    /**
     * Método SetSalario
     * atribui o parametro $Salario à propriedade $Salario
     */
    public function SetSalario($Salario)
    {
        # verifica se é numerico e positivo
        if(is_numeric($Salario) and ($Salario > 0))
        {
            $this->Salario = $Salario;
        }
    }     

    /**
     * Método GetSalario
     * retornar o valor da propriedade $Salario
     */
    public function GetSalario()
    {
        return $this->Salario;
    }
}
?>