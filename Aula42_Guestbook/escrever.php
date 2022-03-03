<?php

if(isset($_POST['enviar'])){
    $nm = $_POST['f_nome'];
    $msg = $_POST['f_msg'];
    $conteudo = $nm.":\r\n".$msg."\r\n";

    $arq =  fopen("visitas.txt","a");
    fwrite($arq,$conteudo);

    echo "Mensagem gravada: $conteudo<br>";
    fclose($arq);

}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aula 42 Escrever</title>
</head>
<body>
    <form name="guestbook" action="" method="post">
        <label>Nome: </label><br>
        <input type="text" name="f_nome"><br><br>

        <label>Mensagem: </label><br>
        <input type="text" name="f_msg"><br><br>

        <input type="submit" value="Enviar" name="enviar">

    </form>
    
    <a href="index.html" target="_self">Voltar</a>
</body>
</html>