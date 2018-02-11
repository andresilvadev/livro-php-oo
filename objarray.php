<?php
# Cria Array dados_william

$dados_william = array();
$dados_william['nome'] = 'William Scatola';
$dados_william['idade'] = 22;
$dados_william['profissao'] = 'Controle de Estoque';

# Cria Array dados_daline
$dados_daline['nome'] = 'Daline DallOglio';
$dados_daline['idade'] = 21;
$dados_daline['profissao'] = 'Almoxarifado';

# Cria Objeto William
$william = new StdClass;
foreach($dados_william as $chave => $valor)
{
    # Utiliza variáveis variantes;
    $william->$chave = $valor;
}

# Cria Objeto Daline
$daline = new StdClass;
foreach($dados_daline as $chave => $valor)
{
    $daline->$chave = $valor;
}

echo "{$william->nome} é {$william->profissao}<br>\n";
echo "{$daline->nome} é {$daline->profissao}<br>\n";