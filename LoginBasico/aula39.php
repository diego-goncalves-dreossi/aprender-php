<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>

<?php 
include('../conectabd.php');

if(isset($_POST['f_logar'])){
    $user = $_POST['f_usuario'];
    $sen = $_POST['f_senha'];

    $sql = "SELECT * FROM tb_usuarios WHERE usuario = '$user' AND senha = '$sen'";

    $res = mysqli_query($con, $sql);
    $linha = mysqli_affected_rows($con);

    if($linha > 0){
        echo "Existe registro<br>";
        $num = rand(1000000,9999999);//Função para gerar numero aleatório, os parâmetros são os limites do intervalo
        setcookie("numLogin",$num);//Cria um cookie
        //setcookie("numLogin"); Se cookie já estiver setado com essa linha é deletado
        header("Location: aula39b.php?num1=$num");//Função que chama nova página
    }else{
        echo "Erro no login<br>";
        echo "<a href='formAula39.php'>Voltar</a>"."<br>";
    }

}

mysqli_close($con);

?>
    
</body>
</html>