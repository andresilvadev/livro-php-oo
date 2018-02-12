<?php
function Abrir($file = null)
{
    if(!$file)
    {
        throw new Exception('Falta o parametro com o nome do arquivo');
    }
    if(!file_exists($file))
    {
        throw new Exception('Arquivo nao existente');
    }
    if(!$retorno = @file_get_contents($file))
    {
        throw new Exception('Impossivel ler o arquivo');
    }
    return $retorno;
}

# Abrindo um arquivo
try
{
    $arquivo = Abrir('/tmp/arquivo.dat');
    echo $arquivo;
}
# captura o erro
catch(Exception $exception)
{
    echo $exception->getFile() . " : " . $exception->getLine() . " # "  . $exception->getMessage();  
}

#Tratamento de exceções
/**
 * getMessage() — Obtém a mensagem da exceção
 * getPrevious() — Retorna Exception anterior
 * getCode() — Obtém o código da exceção
 * getFile() — Obtém o arquivo no qual a exceção ocorreu
 * getLine() — Obtém a linha na qual a exceção ocorreu
 * getTrace() — Obtém a stack trace
 * getTraceAsString() — Obtém a stack trace como uma string 
 */

