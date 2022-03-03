<?php
//Aula 29 Executando comando insert

include('conectabd.php');

//Usuario
$nome = 'Marcelo Loto';
$usuario = 'Loto';
$senha = 'lkohee';
$email = 'mar_loto@gmail.com';
$tel = '16 991103457';
$status = 0;
$obs = 'ml';

$sql = "INSERT INTO tb_usuarios (nome,usuario,senha,email,telefone,status,obs) VALUES('$nome','$usuario','$senha','$email','$tel',$status,'$obs')";
//Se quisermos adicionar uma tupla com apenas parte das informações é preciso colocar um () com as colunas que queremos depois do nome da tabela

$inserir = mysqli_query($con,$sql);
$linhas = mysqli_affected_rows($con);
echo $linhas;



mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 30</title>
</head>
<body>
    
    
</body>
</html>