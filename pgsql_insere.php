<?php
# Abre conexao com Postgres
$conn = pg_connect("host=localhost port=5432 dbname=livrophp user=postgres password=root");

# Insere vários registros
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (1, 'Joohn Lennon')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (2, 'Elvis Presley')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (3, 'Michael Jakson')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (4, 'Bono Vox')");
pg_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (5, 'Ray Charles')");

# Fecha conexão
pg_close($conn);
