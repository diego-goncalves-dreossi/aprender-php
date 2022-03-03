<?php
//Aula 35 Comando DELETE

include('conectabd.php');

if(isset($_POST['consultar'])){
   
}

$sql = "DELETE FROM tb_usuarios WHERE ";
$res = mysqli_query($con,$sql);
$lin = mysqli_affected_rows($con);

if($lin > 0){
    echo "Registro deletado<br>";
}else{
    echo "Registro não deletado<br>";
}


mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 35</title>
</head>
<body>

<h1>Comando DELETE</h1>
    
    
</body>
</html>