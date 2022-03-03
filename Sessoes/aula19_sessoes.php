<?php
//Aula 19 Sessões
session_start();
//Inicia sessão
$_SESSION['nome'] = "Diego Dreossi";
$_SESSION['dispositivo'] = "Notebook";
//Define uma variável na sessão
echo $_SESSION['nome']."<br>";
echo $_SESSION['dispositivo']."<br>";

if(isset($_SESSION['so'])){
    echo $_SESSION['so']."<br>";
} else{
    echo 'Variavel so não foi definida. <br>';
}

//unset($_SESSION['nome']);
//Retira a definição da variável
//echo $_SESSION['nome']."<br>";
//echo $_SESSION['dispositivo'];

echo "<a href=pag2.php target=_self> Abre página 2</a><br>";


//session_destroy();
//Finaliza sessão
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 19</title>
</head>
<body>
    
    
</body>
</html>