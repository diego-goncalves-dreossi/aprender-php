<?php
//Aula 13 Receber dados do formulário

//Cria-se variaveis para cada dado a receber do form
$nome = $_GET["f_nome"];
$senha = $_GET["f_senha"];
echo "Nome: ".$nome."<br>Senha: ".$senha."<br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 13</title>
</head>
<body>
    <h1>Formulário</h1>

    <form name="f_cad" method="get" action="aula13.php">
    <label>Nome:</label><br>
    <input type="text" name="f_nome" size="40" maxlength="30"/><br><br>
    <label>Senha: </label><br>
    <input type="password" name="f_senha" size="40" maxlength="20"><br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">


    </form>
     
    
</body>
</html>