<?php
# carrega a classe
 include_once 'classes/Funcionario2.class.php';

 // instancia novo Funcionario
 $andre = new Funcionario;

 // atribui novo Salário
 $andre->SetSalario(5846);

 // obetem o Salário
 echo 'Salário : R$ ' . $andre->GetSalario();