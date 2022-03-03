<?php

# Comando IF ELSE

$saldo = 5000;
$contaluz = 2000;
$res = $res2 = "";

if($saldo - $contaluz > 0){
    $res = "Saldo suficiente para pagar a conta!";
} else{
    $res = "Saldo insuficiente para pagar a conta!";
}

if ($saldo <= 100){
    $res2 = "Conta barata";
} if ($saldo > 100 && $saldo <=300){
    $res2 = "Conta na faixa de preço normal";
} else {
    $res2 = "Conta cara";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 5</title>
</head>
<body>
    <p><?php echo $res;?></p>
    <p><?php echo $res2;?></p>
    
</body>
</html>