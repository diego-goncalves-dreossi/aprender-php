<?php
//Aula 29 Executando comando insert com formulário html

include('conectabd.php');

if(isset($_POST['consultar'])){
    if(isset($_POST['codinome'])){
        $cn = $_POST['codinome'];

        $sql = "SELECT * FROM tb_personagem_hq WHERE codinome = '$cn'";

        //resultado como um conjunto de linhas
        $result = mysqli_query($con,$sql);
        // busca a query
        //$prs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //mysqli_fetch_all retorna um conjunto de linhas 
        //limpa a memoria de result
        //mysqli_free_result($result);

        $lin = mysqli_num_rows($result);

        echo $lin." achadas<br>";

    }
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
    <title>PHP Aulas 31</title>
</head>
<body>

<form name="personagens" method="post" action="aula32.php">
        <label>Codinome</label><br>
        <input type="text" name="codinome" size="40" maxlength="40"><br><br>
        <input type="submit" name="consultar" value="Consultar">
</form>
    
    
</body>
</html>