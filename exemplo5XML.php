<?php
# Interpreta o documento XML
$xml = simplexml_load_file('paises2.xml');

# Alteração de Propriedades
$xml->populacao = '220 milhoes';
$xml->religiao = 'cristianismo';
$xml->geografica = 'temperado';

# Adiciona novo nodo
$xml->addChild('presidente','Chapolin Colorado');

# Exibindo o novo XML
echo $xml->asXML();

# Grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());