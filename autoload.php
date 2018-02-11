<?php
# função de carga automática
# Aviso: a funcao __autoload está depreciada no php 7.2
# Agora se usa o spl_autoload_register()
/*
function __autoload($classe)
{
    # busca classo no diretório de classes...
    include_once "classes/{$classe}.class.php";
}
*/

spl_autoload_register(function($classe) {
    include "classes/{$classe}.class.php";
});



# instanciando novo Produto
$bolo = new Produto(500, 'Bolo de Fubá', 4, 4.12);
echo 'Código: ' . $bolo->Codigo . "<br>\n";
echo 'Nome: ' . $bolo->Descricao . "<br>\n";