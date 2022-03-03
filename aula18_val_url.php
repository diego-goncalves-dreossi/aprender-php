<?php
//Aula 18 Passagem de valores pela url
$palavra = "Familia e amigos";
$emp = "Pepsi";

echo "<a href=pag1.php?palavra=".urlencode($palavra)."&emp=".urldecode($emp)." target=_self> Abre página 1</a>";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 18</title>
</head>
<body>
    
    
</body>
</html>