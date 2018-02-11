<?php
# carrega as classes
include 'classes/Funcionario2.class.php';
include 'classes/Estagiario.class.php';

$andre = new Estagiario;
$andre->SetSalario(8300);
echo 'O Salário do André é: R$ ' . $andre->GetSalario() . "\n";

?>