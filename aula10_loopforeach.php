<?php
//Aula 10 Loop ForEach

$linguagens = ['PHP','Python','VBA','JavaScript','HTML/CSS','Dart','SQL','Java','C/C++/C#','R','Ruby','Excel'];

foreach ($linguagens as $ling){
    if ($ling =="Excel"){
        break;
    }
    echo "$ling tem " .strlen($ling)." letras <br>";
    if ($ling == "PHP" || $ling == "Python" || $ling == "HTML/CSS") {
        echo "Estudando atualmente <br>";
    }
    echo "<hr><br>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 10</title>
</head>
<body>
    
</body>
</html>