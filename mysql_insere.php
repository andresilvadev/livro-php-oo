<?php
# Abre conexao com MySQL
$conn = mysqli_connect('localhost','root','root');

# Seleciona o banco de dados ativo
mysqli_select_db($conn, 'livrophp');

# Insere vários registros
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (1, 'Joohn Lennon')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (2, 'Elvis Presley')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (3, 'Michael Jakson')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (4, 'Bono Vox')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (5, 'Ray Charles')");

# Fecha conexão
mysqli_close($conn);
