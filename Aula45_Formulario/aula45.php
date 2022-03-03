<?php

include('../conectabd.php');

if(isset($_GET['enviar'])){
    $vnome = $_GET['f_nome'];
    $vsenha = $_GET['f_senha'];
    $vsexo = $_GET['f_sexo'];

    //echo $_GET['f_tcarro'];
    //echo $_GET['f_tcarro'];
    $vtcarro = isset($_GET['f_tcarro']) ? $_GET['f_tcarro'] : 0;
    $vtmoto = isset($_GET['f_tmoto']) ? $_GET['f_tmoto'] : 0;
    $vtonibus = isset($_GET['f_tonibus']) ? $_GET['f_tonibus'] : 0;

    $vcoment = $_GET['f_coment'];
    $vesporte = $_GET['f_esporte'];

    $sql = "INSERT INTO tb_revisao VALUES(NULL,'$vnome','$vsenha','$vsexo','$vesporte','$vtcarro','$vtmoto','$vtonibus','$vcoment')";

    mysqli_query($con,$sql);

    echo "Registro gravado!<br>";
    echo "<a href=formAula45.html target=_self>Voltar</a>";



}

mysqli_close($con);
?>