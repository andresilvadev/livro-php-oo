<?php
# Interpreta o documento XML
$xml = simplexml_load_file('paises4.xml');

echo "*** Estados ***<br>\n";

# Percorre a lista de estados
foreach($xml->estados->estado as $estado)
{    
    # Imprime o estado e a capital
    echo str_pad('Estado: ' . $estado['nome'], 30) .
                 'Capital: ' . $estado['capital'] . "<br>\n";
}