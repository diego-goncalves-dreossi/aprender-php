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

//Esse código precisa ser feito em todas as páginas do site
//Mais fácil colocar em arquivo separado e incluir nas páginas
if(isset($_COOKIE['numLogin'])){
    //Verifica se o cookie numLogin existe
    if(isset($_GET['num1'])){
        $n1 = $_GET['num1'];//num1 está sendo passado pela url, então get
    }else{
        $n1 = 0;
    }
    $n2 = $_COOKIE['numLogin'];//Valor armazenado do coockie

    if($n1 != $n2 || $n1 == NULL){
        //Se verdadeiro quer dizer que o login não foi realizado
        echo "Login não feito<br>";
        exit;
    }
}else{
    //Se o cookie não existir quer dizer que o login tambem não foi feito
    echo "Login não feito<br>";
    exit;
}
//---------------------------------------------------------

echo "<h1>Página Inicial!<h1>";
mysqli_close($con);

?>
    
</body>
</html>