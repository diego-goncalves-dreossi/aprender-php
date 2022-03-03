<?php
//Aula 24 Classes parte 5 - Static

class Celular{
    public $nome;
    public $so;
    public $empresa;
    public $preco;
    public static $status = 'Novo';//Usado, Novo, Semi-novo

    function __construct($n,$s,$e,$p){
        $this->nome = $n;
        $this->so = $s;
        $this->empresa = $e;
        $this->preco = $p;
    }

    function ficha(){
        echo "<hr>";
        echo "Nome: ".$this->nome."<br>";
        echo "Sistema Operacional: ".$this->so."<br>";
        echo "Fabricante: ".$this->empresa."<br>";
        echo "Preço: ".$this->preco."<br>";
        echo "Status: ".self::$status."<br>";
        echo "<hr>";
    }
}

$celular = new Celular('One Vision','Android','Motorola',699.90);
$celular->ficha();
$iphone = new Celular('Iphone 11','IOS','Apple',3899.99);
$iphone->ficha();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 24</title>
</head>
<body>
    
</body>
</html>