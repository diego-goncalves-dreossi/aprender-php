<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aula 42 Ler</title>
</head>
<body>
    <?php
    //Abrir arquivo pra leitura e definir ponteiro no final
    $arq = fopen("./visitas.txt","r");

    //Ler arquivo linha por linha
    //feof($arq) function end of file: retorna se o arquivo está no final
    //fgets(arquivo,bit a ver) Le as linhas de um arquivo
    while(!feof($arq)){
        echo fgets($arq,100);//Linha do nome
        echo "<br>".fgets($arq,4096);//Linha da mensagem
        echo "<br><br>";
    }

    fclose($arq);

    ?>
    
    <hr>
    <a href="index.html" target="_self">Voltar</a>
</body>
</html>