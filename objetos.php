<?php
# Carrega as classes
 include_once 'classes/Pessoa.class.php';
 include_once 'classes/Conta.class.php';

 # criação do objeto $usuario
 $usuario = new Pessoa;
 $usuario->Codigo = 10;
 $usuario->Nome = "Andre Luiz da Silva";
 $usuario->Altura = 1.74;
 $usuario->Idade = 25;
 $usuario->Nascimento = "28/07/1984";
 $usuario->Escolaridade = "Superior Completo";

 echo "Manipulando o objeto {$usuario->Nome} : <br>\n";
 echo "<br>\n";

 $usuario->Formar('Analise de Sistemas' . 'Faculdade Unopar');

 echo "{$usuario->Nome} é formado em :{$usuario->Escolaridade} <br>\n";

 echo "{$usuario->Nome} possuia :{$usuario->Idade} anos <br>\n";

 $usuario->Envelhecer(8);

 echo "{$usuario->Nome} e agora possui :{$usuario->Idade} anos <br>\n";


 # criação do objeto $conta_usuario
 $conta_usuario = new Conta;
 $conta_usuario->Agencia = 6677;
 $conta_usuario->Codigo = "CC.1234.56";
 $conta_usuario->DataDeCriacao = "10/07/2002";
 $conta_usuario->Titular = $usuario;
 $conta_usuario->Senha = 9876;
 $conta_usuario->Saldo = 567.89;
 $conta_usuario->Cancelada = false;

 echo "<br>\n";
 echo "Manipulando a conta de: {$conta_usuario->Titular->Nome} <br>\n";
 echo "O saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

 $conta_usuario->Depositar(150);
 echo "o saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

 $conta_usuario->Retirar(10);
 echo "o saldo atual é R\$ {$conta_usuario->ObterSaldo()} <br>\n";

?>