<?php
# Interpreta o documendo XML em paises.xml
$xml = simplexml_load_file('paises.xml');

# Exibe as informações do objeto criado
print_r('<pre>');
print_r($xml);
print_r('</pre>');

var_dump($xml);