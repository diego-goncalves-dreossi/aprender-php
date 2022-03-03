<?php
//Aula 23 Classes parte 4 - Interface

interface Veiculo{
    // Em interfaces é proíbido propriedades
    //Apenas os cabeçalhos de métodos são permitidos
    function ligar();
    function desligar();
    function ficha();
    function acelerar();
    function frear();
}

interface VeiculoGuerra{
    function atirarCanhao();
    function atirarMetralhadora();
}

abstract class VeiculoBase implements Veiculo,VeiculoGuerra {
    public $potencia;
    public $velMax;
    private $ligado = false;

    //Esses métodos são obrigatórios serem declarados pois foram declarados na interface
    function ligar(){
        $this->ligado = true;
    }
    function desligar(){
        $this->ligado = false;
    }
    function ficha(){
        echo "<hr>";
        echo "Potência: ".$this->potencia." cavalos<br>";
        echo "Velocidade Máxima: ".$this->velMax." km/h<br>";
        if($this->ligado){
            echo "Carro está ligado"."<br>";
        }else{
            echo "Carro está desligado"."<br>";
        }
        echo "<hr>";
    }
    function acelerar(){}
    function frear(){}
    function atirarCanhao(){}
    function atirarMetralhadora(){}
}

class Carro extends VeiculoBase{
    function __construct($p,$vm){
        $this->potencia = $p;
        $this->velMax = $vm;
    }
}

$car = new Carro(100,220);
$car->desligar();
$car->ficha();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 23</title>
</head>
<body>
  
    
</body>
</html>