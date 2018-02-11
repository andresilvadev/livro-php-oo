<?php
# Criando Objetos Dinâmicos
# Objetos pertencentes a classe stdClass (Standard Class)

# Criando o Objeto Wiliam
$william = new StdClass;
$william->nome = 'William Scatola';
$william->idade = 22;
$william->profissao = ' Controle de Estoque';

# Criando o Objeto Daline
$daline = new StdClass;
$daline->nome = 'Daline DallOglio';
$daline->idade = 21;
$daline->profissao = 'Almoxarifado';

print_r('<pre>');
print_r($william);
print_r('</pre>');
print_r('<pre>');
print_r($daline);
print_r('</pre>');