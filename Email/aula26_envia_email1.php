<?php
//Aula 26 Enviar E-MAIL
// aula26_envia.php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 26</title>
</head>
<body>
    <form name="email" method="post" action="aula26_envia.php">

        <label>E-mail</label><br>
        <input type="text" name="email_txt"><br>
        <label>Assunto</label><br>
        <input type="text" name="assunto_txt"><br>
        <label>Mensagem</label><br>
        <textarea name="msg_txt"  cols="50" rows="5"></textarea><br><br>
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>