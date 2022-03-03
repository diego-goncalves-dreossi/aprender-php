<?php
//Aula 43 Contador de acessos


$arquivo = fopen('contador.txt','a+');
$cont = fread($arquivo,21);
$cont++;
$arquivo = fopen("contador.txt","w");
fwrite($arquivo,$cont);

fclose($arquivo);

echo "Quantidade de acessos: $cont<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 43</title>
</head>
<body>
    
</body>
</html>

