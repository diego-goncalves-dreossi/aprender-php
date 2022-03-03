<?php

# Variáveis
$nome = "Diego";
$numero = 8;
$numf = 22.2;
define("constante","Dreossi");


echo "Nome: "."Ademir ".constante."<br>";
echo "Nome do arquivo: ".__FILE__;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 2</title>
</head>
<body>
    <p><?php echo htmlspecialchars($nome)?></p>
    <p><?php echo htmlspecialchars($numero)?></p>
    <p><?php echo htmlspecialchars($numf)?></p>
    <p><?php echo htmlspecialchars(constante)?></p>
   
    
</body>
</html>