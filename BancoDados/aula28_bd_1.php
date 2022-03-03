<?php
//Aula 27 Criando banco de dados não precisou de arquivo
//Aula 28 Conectando ao banco de dados

//Conectar ao banco de dados
// No mysqli_connect os parametros são: Maquina a se conectar, usuario, senha, banco de dados
$con = mysqli_connect("localhost","root","","ler");
//mysqli_select_db($con,"tb_usuarios");
if(!$con){
    echo 'Erro na conexão: '.mysqli_connect_error();
    //Função que informa qual o erro que houve
}

//Fecha a conexão com o bd
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 28</title>
</head>
<body>
    
    
</body>
</html>