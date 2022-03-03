<?php
//Aula 19 Sessões
session_start();
//Inicia sessão
echo "Segunda página<br>";
//Define uma variável na sessão
echo $_SESSION['nome']."<br>";
echo $_SESSION['dispositivo']."<br>";
echo $_SESSION['so']."<br>";



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 19 pagina 2</title>
</head>
<body>
    
    
</body>
</html>