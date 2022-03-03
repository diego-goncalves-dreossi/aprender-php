<?php
//Aula 14 Função recursiva

function subs($num){
    if($num != 0){
        echo "Função aula com valor $num <br>";
        subs($num-1);
    }
}

subs(24);

function fatorial($num){
    if($num < 0){
        return -1;
    } if($num <= 1){
        return 1;
    }
    return $num * fatorial($num-1);
}

echo "Fatorial ".fatorial(8);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 14</title>
</head>
<body>
    
     
    
</body>
</html>