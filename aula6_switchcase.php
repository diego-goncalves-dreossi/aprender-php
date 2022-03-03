<?php

# Switch case

$opc = 2;

switch($opc){

    case 1:
        echo 'Carro'.'<br>';
        break;

    case 2:
        echo 'Bicicleta'.'<br>'; 
        break;
    case 3:
        echo 'Moto'.'<br>';   
        break;
    case 4:
        echo 'Navio'.'<br>';    
        break;
    case 5:
        echo 'Avião'.'<br>'; 
        break;
    default: 
        echo 'A pé'.'<br>';   
        break;
}

switch($opc){

    case ($opc <= 3 && $opc > 0):
        echo "Transporte terrestre";
        break; 
    case 4:
        echo "Transporte marítimo";
        break;
    case 5: 
        echo "Transporte aéreo";
        break;   
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 6</title>
</head>
<body>
    
</body>
</html>