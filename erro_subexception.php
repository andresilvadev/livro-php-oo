<?php
function Abrir($file = null)
{
    if(!$file)
    {
        throw new ParameterException('Falta o parametro com o nome do arquivo');
    }
    if(!file_exists($file))
    {
        throw new FileNotFoundException('Arquivo nao existente');
    }
    if(!$retorno = @file_get_contents($file))
    {
        throw new FilePermissionException('Impossivel ler o arquivo');
    }
    return $retorno;
}

# Definicao das subclasses de erro
class ParameterException extends Exception{}
class FileNotFoundException extends Exception{}    
class FilePermissionException extends Exception{}    

# Abrindo um arquivo
# Tratamento de excecoes
try
{
    $arquivo = Abrir('/tmp/arquivo.dat');
    echo $arquivo;
}
# captura o erro
catch (ParameterException $exception)
{
    // nao faz nada
}
catch (FileNotFoundException $exception)
{
    echo "<pre>";
    var_dump($exception->getTrace());
    
    echo "Finalizando aplicação...\n";
    echo "</pre>";
    die;
}
catch (FilePermissionException $exception)
{
    echo $exception->getFile() . ' : ' . $exception->getLine() . ' # ' . $exception->getMessage();
}