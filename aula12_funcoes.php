<?php
// Aula 11 foi break, não fiz arquivo pra ela
//Aula 12 Funções

function aula(){
    echo "<h1 style='background-color: green'>";
    echo "<hr>Aula sobre funções <br>";
    echo "Professor Bruno do CFBCursos <hr>";
    echo "</h1>";
}

function somar($n1,$n2){

    echo "<h1><mark>";
    echo "O resultado da soma é ".$n1 + $n2;
    echo "</mark></h1>";
}

aula();
aula();
somar(321,110);

function multiplicar($n1,$n2){
    return $n1 * $n2;
}

function msg(){
    return "Olá mundo PHP!"; 
}

echo msg()."<br>";
echo multiplicar(24,0.33)."<br>";

$vals = [8,19,24,52,10,27,15,1,5,6,43,61,21];
function media($valores){
    $tam = count($valores);
    $s = 0;
    
    for($c = 0; $c < $tam; $c++){
        $s += $valores[$c]; 
    }

    return round($s/$tam);
}
$med = media($vals);

echo $med;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 12</title>
</head>
<body>
    
</body>
</html>