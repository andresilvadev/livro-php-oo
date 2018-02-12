<?php
try
{
    # Instancia objeto PDO, conectando no postgresql
    $conn = new PDO('pgsql:dbname=livrophp;user=postgres;password=admin;host=localhost');

    # Executa uma serie de instrucoes SQL
    # Insere vários registros
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (1, 'Joohn Lennon')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (2, 'Elvis Presley')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (3, 'Michael Jakson')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (4, 'Bono Vox')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (5, 'Ray Charles')");

    # Fecha conexão
    $conn = null;
}
catch(PDOException $exception)
{
    # caso ocorra uma excecao, exite na tela
    print "Erro!: " . $exception->getMessage() ; "\n";
    die();
}





