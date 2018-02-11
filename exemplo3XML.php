<?php
# Interpreta o documento XML
$xml = simplexml_load_file('paises.xml');

foreach($xml->children() as $elemento => $valor)
{
    # funcao que deixa a primeira letra em caixa alta
    echo ucfirst($elemento). ": " . $valor. "<br>\n";
}