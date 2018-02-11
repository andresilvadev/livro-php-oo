<?php
# carrega as classes

include 'classes/Funcionario2.class.php';
include 'classes/Estagiario.class.php';

// cria objeto Funcionario
$andre = new Funcionario;
$andre->Nome = 'Andre Luiz da Silva';

// cria objeto Estagiario
$jessica = new Estagiario;
$jessica->Nome = 'Jessica Camargo';

// imprime pripriedades do Nome
echo $andre->Nome;
echo "<br>\n";
echo $jessica->Nome;
?>