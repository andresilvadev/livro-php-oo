<?php
# Abre conexao com Postgres
$conn = pg_connect("host=localhost port=5432 dbname=livrophp user=postgres password=root");

# Define consulta que sera realizada
$query = 'SELECT codigo, nome FROM famosos';

# Envia consulta ao banco de dados
$result = pg_query($conn, $query);

if ($result)
{
    # Percorre resultados da pesquisa
    while ($row = pg_fetch_assoc($result))
    {
        echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
    }
}

# Fecha a conexao
pg_close($conn);