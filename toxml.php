<?php
class Cachorro
{
    # método cosntrutor
    public function __construct($nome, $idade, $raca)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    # toXml, retorna o objeto no formato XML
    public function toXml()
    {
        return "<?xml version='1.0' encoding='iso-8859-1'?>
        <cachorro>
            <nome> {$this->nome} </nome>
            <idade> {$this->idade} </idade>
            <raca> {$this->raca} </raca>
        </cachorro>";
   
    }   

}

$toto = new Cachorro('Totó',10, 'Fox Terrier');
$vava = new Cachorro('Daba', 8, 'Dálmata');

echo $toto->toXml();
echo "<br>\n";
echo $vava->toXml();

?>