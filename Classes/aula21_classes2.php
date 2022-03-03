<?php
//Aula 21 Classes parte 2 - Herança

class Produto{
    private $codigo;
    //Propriedade acessada apenas pela classe
    protected $nome;
    protected $preco;
    protected $loja;
    //Propriedades acessadas apenas pela classe e pelas classes filhas

    function __construct($co,$no,$pr,$lo){
        $this->codigo = $co;
        $this->nome = $no;
        $this->preco = $pr;
        $this->loja = $lo;
    }

    function ficha(){
        echo "<hr>";
        echo "Código: ".$this->codigo."<br>";
        echo "Nome: ".$this->nome."<br>";
        echo "Preço: ".$this->preco."<br>";
        echo "Loja: ".$this->loja."<br>";
        echo "<hr>";
    }
}

class Bebida extends Produto{
    // Herança: Bebida herda de Produto
    protected $litros;

    //Bebida tem as mesmas propriedades de Produto e pode chamar métodod ficha() 

    function __construct($co,$no,$pr,$lo,$li){
        $this->codigo = $co;
        $this->nome = $no;
        $this->preco = $pr;
        $this->loja = $lo;
        $this->litros = $li;
    }
    function ficha_bebida(){
        echo "<hr>";
        echo "Código: ".$this->codigo."<br>";
        echo "Nome: ".$this->nome."<br>";
        echo "Preço: ".$this->preco."<br>";
        echo "Loja: ".$this->loja."<br>";
        echo "Litros: ".$this->litros."<br>";
        echo "<hr>";
    }

}

$p0 = new Produto('00000001','Pepsi',5.45,'Tonelli Cavaleiro Torquato Rizzi');
$p1 = new Bebida('00000002','Monster Energético',6.99,'Tonelli Cavaleiro Torquato Rizzi',0.473);

$p0->ficha();
$p1->ficha_bebida();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 21</title>
</head>
<body>
    
</body>
</html>