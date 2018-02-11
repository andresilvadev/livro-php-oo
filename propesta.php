<?php
class Aplicacao
{
    static $Quantidade;

    /**
     * Método Construtor
     * incrementa a $Quantidade de Aplicacoes
     */

     public function __construct($Nome)
     {
         // incrementa propriedade estática
         self::$Quantidade ++;
         $i = self::$Quantidade;
         echo "Nova Aplicação nr. $i: $Nome<br>\n";
     }
}

# Cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo '<br>';
echo 'Quantidade de Aplicações = ' . Aplicacao::$Quantidade . "<br>\n";