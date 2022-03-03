<?php
//Aula 29 Executando comando insert com formulário html

include('conectabd.php');

//id,codinome,nome,aparicao1,ano_criacao,editora,criador
$erros = array('codinome'=>'','nome'=>'','aparicao1'=>'','ano_criacao'=>'','editora'=>'','criador'=>'');
$codinome = $nome=$aparicao1=$ano_criacao = $editora = $criador = '';

if(isset($_POST['enviar'])){

    if(isset($_POST['codinome'])){
        //Verificar se codinome está vazio
        if(empty($_POST['codinome'])){
        
        $erros['codinome'] = 'Codinome obrigatório';
        }else{
        $codinome = $_POST['codinome'];
        }
    }

    if(empty($_POST['nome'])){
            
        $erros['nome'] = 'Nome obrigatório';
    }else{
        $nome = $_POST['nome'];
        
    }

    if(empty($_POST['aparicao1'])){
		
        $erros['aparicao1'] = '1º Aparição obrigatória';
    }else{
        $aparicao1 = $_POST['aparicao1'];
        
    }

    if(empty($_POST['ano_criacao'])){
		
        $erros['ano_criacao'] = 'Ano de criacao obrigatório';
    }else{
        if(!is_numeric($_POST['ano_criacao'])){
            $erros['ano_criacao'] = 'Ano de criacao errado';
        }else{
            $ano_criacao = $_POST['ano_criacao'];
        }
    }

    if(empty($_POST['editora'])){
		
        $erros['editora'] = 'Editora obrigatório';
    }else{
        $editora = $_POST['editora'];
        
    }

    if(empty($_POST['criador'])){
		
        $erros['criador'] = 'Criador obrigatório';
    }else{
        $criador = $_POST['criador'];
        
    }

    if (array_filter($erros)){
        //echo 'Erro no formulário <br/>';
    } else{
        //Array $erros esta todo vazio, ou seja, tudo certo com formulário
    

    
        $codinome = mysqli_real_escape_string($con,$_POST['codinome']);
        $nome= mysqli_real_escape_string($con,$_POST['nome']);
        $aparicao1=mysqli_real_escape_string($con,$_POST['aparicao1']);
        $ano_criacao = mysqli_real_escape_string($con,$_POST['ano_criacao']);
        $editora = mysqli_real_escape_string($con,$_POST['editora']);
        $criador = mysqli_real_escape_string($con,$_POST['criador']);

        
        $sql = "INSERT INTO tb_personagem_hq (codinome,nome,aparicao1,ano_criacao,editora,criador) VALUES('$codinome','$nome','$aparicao1',$ano_criacao,'$editora','$criador')";
        if(mysqli_query($con,$sql)){
            $linhas = mysqli_affected_rows($con);
            echo $linhas."linhas afetadas<br>";
        }else{
            echo "Erro na gravação do banco de dados: ".mysqli_connect_error();
        }
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
    <form name="personagens" method="post" action="aula31.php">

        <label>Codinome</label><br>
        <input type="text" name="codinome" size="40" maxlength="40"><br>
        <div class="red-text"><?php echo $erros['codinome'].'<br/>'?> </div>
        <label>Nome</label><br>
        <input type="text" name="nome" size="40" maxlength="40"><br>
        <div class="red-text"><?php echo $erros['nome'].'<br/>'?> </div>
        <label>1º Aparição</label><br>
        <input type="text" name="aparicao1" size="40" maxlength="40"><br>
        <div class="red-text"><?php echo $erros['aparicao1'].'<br/>'?> </div>
        <label>Ano de criação</label><br>
        <input type="text" name="ano_criacao" size="10"><br>
        <div class="red-text"><?php echo $erros['ano_criacao'].'<br/>'?> </div>
        <label>Editora</label><br>
        <input type="text" name="editora" size="40" maxlength="40"><br>
        <div class="red-text"><?php echo $erros['editora'].'<br/>'?> </div>
        <label>Criador</label><br>
        <input type="text" name="criador" size="40" maxlength="40"><br>
        <div class="red-text"><?php echo $erros['criador'].'<br/>'?> </div>
        <br>
        <input type="submit" name="enviar" value="Enviar">

    </form>
    
</body>
</html>