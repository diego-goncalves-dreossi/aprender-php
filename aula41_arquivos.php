<?php
//Aula 41 Trabalhando com arquivos 1

/* Modos de abertura de arquivos
r = Abre para leitura, ponteiro no inicio
r+ = Abre para leitura e escrita
w = Abre para escrita, ponteiro no início e sera o arquivo, se não existe o cria
w+ = Abre para leitura e escrita
a = Abre para escrita, ponteiro no final, se arquivo não existir o cria
a+ = Abre para leitura e escrita
x = Abre para escrita, ponteiro no início, se arquivo já existe ele gera um erro do tipo E_WARNING
x+ = abre para leitura e escrita

Funçoes:
- Criar ou abrir um arquivo
fopen(nome do arquivo, modo de abertura/criação)
- Fechar arquivo
fclose(variavel onde está ligado o arquivo)
- Ler um arquivo
fread(arquivo, bits lidos);
- Escrever no arquivo. Usamos os modos de abertura para definir onde o ponteiro estará. No começo conteúdo será reescrito.
fwrite(arquivo,conteudo)
fwrite(arquivo, '\r\n')
* \r\n pula a linha no arquivo txt
*/
//$arquivo = fopen('aula.txt','a');
//fwrite($arquivo,".\r\nEncontrado numa playlist no YouTube.");


$arquivo = fopen('aula.txt','r');
$conteudo = fread($arquivo,200);

echo $conteudo;

fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 41</title>
</head>
<body>
    
</body>
</html>

