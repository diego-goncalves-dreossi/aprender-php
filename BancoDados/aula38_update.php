<?php
//Aula 38 Comando UPDATE

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 36</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<h1>UPDATE</h1>

<form name="excluir" method="POST" action="aula38.php">
   <table>
        <tr>
            <td>Código</td><td>Nome</td><td>Usuaário</td><td>E-Mail</td><td>Telefone</td><td>Senha</td>
        </tr>

        <?php
        include('conectabd.php');

        if(isset($_POST['mudar'])){
            $sen = $_POST['ns'];
            $n = $_POST['f_nome'];
            $sql = "UPDATE tb_usuarios SET senha = '$sen' WHERE nome = '$n'";

            if(!mysqli_query($con,$sql)){
                echo "Erro: ".mysqli_connect_error();
            }
            
        }else{
            echo "Formulário não submetido<br>";
        }
        
        $sql = "SELECT * FROM tb_usuarios ORDER BY  id";
        $res = mysqli_query($con,$sql);
        $reg = mysqli_fetch_all($res, MYSQLI_ASSOC);

        foreach($reg as $r){
            $id = $r['id'];
            $nm = $r['nome'];
            $us = $r['usuario'];
            $em = $r['email'];
            $tl = $r['telefone'];
            $sn = $r['senha'];
         
        ?>

        <tr>
            <td><?php echo htmlspecialchars($id)?></td>
            <td><?php echo htmlspecialchars($nm) ?></td>
            <td><?php echo htmlspecialchars($us)?></td>
            <td><?php echo htmlspecialchars($em)?></td>
            <td><?php echo htmlspecialchars($tl)?></td>
            <td><?php echo htmlspecialchars($sn)?></td>
            
        </tr>


        <?php } //Fechamento do foreach
        mysqli_close($con);
        ?>

        

   </table>
   <br>

    <label>Nova Senha: </label><br>
    <input type="text" name="ns" size="20" maxlength="15"><br>
    <label>Para: </label><br>
    <input type="text" name="f_nome" size="20" maxlength="15"><br><br>
    <input type="submit" name="mudar" value="Mudar">
 
   

</form>
    
    


</body>
</html>