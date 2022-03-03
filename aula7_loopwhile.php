<?php
//Aula 7 Loop While
$c = 0;
$tam = 10;
$vetor = array(8,52,1,24,85,10,15,100,19,21);

while($tam > $c){
    echo "$tam"."<br>";
    $tam--;
}

echo "<hr/>";

while($c < 10){
    echo "$vetor[$c]"."<br>";
    $c++;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 7</title>
</head>
<body>
    
</body>
</html>