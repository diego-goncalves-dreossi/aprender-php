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


?>