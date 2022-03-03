<?php
//Aula 26 Enviar E-MAIL

//correto sendmail_path="C:\sendmail\sendmail.exe -t"
//Configurações em https://www.youtube.com/watch?v=ddBaTWH8UvY&list=PLx4x_zx8csUgB4R1dDXke4uKMq-IrSr4B&index=27

$vmail = $_POST['email_txt'];
$vassunto = $_POST['assunto_txt'];
$vmsg = $_POST['msg_txt'];

//mail(email,assunto, mensagem, cabeçalho)
if(mail($vmail,$vassunto,$vmsg,"Cabeçalho")){
    echo "Mensagem enviada com sucesso!";
}else {
    echo "Mensagem não enviada!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Envia</title>
</head>
<body>
   
    
</body>
</html>