<?php

# Operadores
$num1 = 10;
$num2 = 5;

//Aritméticos
$soma = $num1 + $num2;
$diferenca = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;
$modulo = $num1 % $num2;
//mod retorna o resto da divisão
/*
  $num1 == $num2;
  $num1 != $num2;
  $num1 > $num2;
  $num1 < $num2; 
  $num1 >= $num2;
  $num1 <= $num2;  
 */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 3</title>
</head>
<body>
<p>Numeros: <?php echo $num1;?> e <?php echo $num2; ?></p>
<p>Soma: <?php echo $soma; ?></p>
<p>Subtração: <?php echo $diferenca; ?></p>
<p>Multiplicação<?php echo $multiplicacao; ?></p>
<p>Divisão: <?php echo $divisao; ?></p>
<p>Modulo: <?php echo $modulo; ?></p>
    
</body>
</html>