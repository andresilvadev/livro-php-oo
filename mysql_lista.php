<?php
# Abre conexao com MySQL
$conn = mysqli_connect('localhost','root','root');

# Seleciona o banco de dados ativo
mysqli_select_db($conn, 'livrophp');

# Define consulta que sera realizada
$query = 'SELECT codigo, nome FROM famosos';

# Envia consulta ao banco de dados
$result = mysqli_query($conn, $query);

if ($result)
{
    # Percorre resultados da pesquisa
    while ($row = mysqli_fetch_assoc($result))
    {
        echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
    }
}

# Fecha a conexao
mysqli_close($conn);