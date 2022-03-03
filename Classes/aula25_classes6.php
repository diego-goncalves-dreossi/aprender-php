<?php
//Aula 24 Classes parte 6 - Modificador Final

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

    final function mudarPreco($np){
        //Método que não pode ser sobrescrito
        $this->preco = $np;
    }
}

class Tablet extends Celular{
    function __construct($n,$s,$e,$p){
        $this->nome = $n;
        $this->so = $s;
        $this->empresa = $e;
        $this->preco = $p;
    }

}

$celular = new Celular('One Vision','Android','Motorola',699.99);
$celular->ficha();
$iphone = new Celular('Iphone 11','IOS','Apple',3899.99);
$iphone->ficha();
$tablet = new Tablet('Ipad','IOS','Apple',1590.99);
//$tablet->mudarPreco(1000.0);
$tablet->ficha();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 25</title>
</head>
<body>
    
</body>
</html>