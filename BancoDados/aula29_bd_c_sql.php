<?php
//Aula 29 Executando comandos MySQL

include('conectabd.php');

//Comando a se fazer no banco de dados
$sql = "SELECT * FROM tb_usuarios";

//Realização da consulta no bd
$result = mysqli_query($con,$sql);
//Retorna o numero de linhas da consulta
$linhas = mysqli_num_rows($result);

echo "Encontrados $linhas registros na tabelha tb_usuarios";


mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 29</title>
</head>
<body>
    
    
</body>
</html>