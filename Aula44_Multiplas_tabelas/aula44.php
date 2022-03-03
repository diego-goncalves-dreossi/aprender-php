<?php
//Aula 43 Formulários com múltiplas tabelas

include('../conectabd.php');

if(isset($_POST['gravar'])){}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>PHP Aulas 44</title>
</head>
<body>

<h1>Pesquisa</h1>

<form action="pesquisa.php" name="fcad" method="GET">
    <label>Nome: </label><br>
    <input type="text" name="nome"><br><br>

    <label>Selecione seu estado:</label><br>
    <select name="fuf">
        <?php
            $sql = "SELECT * FROM tb_uf ORDER BY uf";
            $res = mysqli_query($con,$sql);
            $estados = mysqli_fetch_all($res, MYSQLI_ASSOC);
            echo $estados;
            foreach($estados as $es){
                $uf = $es['uf'];
                $sigla = $es['sigla'];
                echo "<option value=$sigla>$uf</option>";
            }
        ?>

    </select>
    <br><br>

    <label>Selecione seus meios de transporte favoritos:</label><br>
    <?php
            $sql = "SELECT * FROM tb_transporte";
            $res = mysqli_query($con,$sql);
            $trans = mysqli_fetch_all($res, MYSQLI_ASSOC);
            
            foreach($trans as $tr){
                $c = $tr['cod'];
                $t = $tr['transporte'];
                echo "<input type='checkbox' name=ftransp[] value=$c>$t<br>";
            }
        ?>
    <br>

    <input type="submit" value="Gravar Pesquisa" name="gravar">

</form>

</body>
</html>

<?php
mysqli_close($con);
?>
