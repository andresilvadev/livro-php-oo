<?php
try
{
    # Instancia objeto PDO, conectando no postgresql
    $conn = new PDO('pgsql:dbname=livrophp;user=postgres;password=admin;host=localhost');

    # Executa uma instrucao SQL de consulta
    $result = $conn->query("SELECT codigo, nome FROM famosos");

    if($result)
    {
      # percorre os resultados via iteracao
      foreach($result as $row)   
      {
          # exibe os resultados
          echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
      }
    }
    
    # Fecha conexão
    $conn = null;
}
catch(PDOException $exception)
{
    # caso ocorra uma excecao, exite na tela
    print "Erro!: " . $exception->getMessage() ; "\n";
    die();
}

/**
 * Podemos usar
 * PDO::FETCH_ASSOC
 * PDO::FETCH_NUM
 * PDO::BOTH
 * PDO::OBJ
 */