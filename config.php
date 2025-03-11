<?php
/*Primeiro declarar as 4 var*/
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'biblioteca';

// Cria a conexão
$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Verifica a conexão

//if ($conexao->connect_errno) {
//   echo("Conexão falhou: " . $conn->connect_error);
//}
//echo "Conectado com sucesso";
?>



