<?php
include('../conectabd.php');
$nome = $_GET['nome'];
$est = $_GET['fuf'];
$vt_tmp = Array(0,0,0,0);

echo "Nome: $nome - Estado: $est<br>";
echo "Transportes selecionados:<br>";

foreach($_GET['ftransp'] as $tra){
    //Vetor na posição do valor do veiculo menos 1
    $vt_tmp[$tra-1] = 1;
    echo "$tra<br>";
}
echo "<hr>";

$sql = "INSERT INTO tb_pesquisa VALUES(NULL,'$nome','$est','$vt_tmp[0]','$vt_tmp[1]','$vt_tmp[2]','$vt_tmp[3]')";
$res = mysqli_query($con,$sql);

echo "Pesquisa gravada!";
echo "<a href=aula44.php>Voltar!</a>";

mysqli_close($con);

?>