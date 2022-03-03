<?php
//Aula 17 Função Isset
$aula = '';

/*if(isset($aula)){
    echo 'Função isset verdadeira, variavel aula definida';
} else{
    echo 'Função isset falsa, variavel aula não definida';
}*/

if(isset($_POST["nome"])){
    // && $_POST["nome"] != ""
    $nome = $_POST["nome"];
    echo "Nome: ".$nome."<br>";
}else{
    echo "Isset falso";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aulas 17</title>
</head>
<body>
    <br><br>
    <form name="f_aula" method="POST" action="aula17.php">
        <label>Nome: </label><br>
        <input type="text" name="nome"><br/>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>