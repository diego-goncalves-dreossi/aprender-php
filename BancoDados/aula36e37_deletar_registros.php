<?php
//Aula 36 e 37 Deletando registros selecionados - Parte 1 e 2?>

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

<h1>Deletando registros selecionados - Parte 1</h1>

<form name="excluir" method="POST" action="aula36.php">
   <table>
        <tr>
            <td>Código</td><td>Nome</td><td>Selecionar</td>
        </tr>

        <?php
        include('conectabd.php');

        if(isset($_POST['sel'])){
            foreach($_POST['sel'] as $codigo){
                $sql = "DELETE FROM tb_usuarios WHERE id = $codigo ";
                $res = mysqli_query($con,$sql);
            }
        }else{
            echo "Formulário não submetido<br>";
        }
        
        $sql = "SELECT * FROM tb_usuarios ORDER BY  id";
        $res = mysqli_query($con,$sql);
        $reg = mysqli_fetch_all($res, MYSQLI_ASSOC);

        foreach($reg as $r){
            $id = $r['id'];
            $nm = $r['nome']
        ?>

        <tr>
            <td><?php echo htmlspecialchars($id)?></td><td><?php echo htmlspecialchars($nm) ?></td><td style="align:center"><input type="checkbox" value="<?php echo htmlspecialchars($id)?>" name="sel[]"/></td>
        </tr>


        <?php } //Fechamento do foreach
        mysqli_close($con);
        ?>

        

   </table>
   <br>

 
   <input type="submit" value="Excluir" name="excluir">

</form>
    
    
</body>
</html>