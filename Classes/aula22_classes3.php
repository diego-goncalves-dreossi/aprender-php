<?php
//Aula 22 Classes parte 3 - Abstract

abstract class Imovel{
    //Classe que apenas serve de base para outras classes herdarem propriedades e métodos
    var $cod;
    var $endereco;
    var $preco;
    var $aluguel;
    var $metros_uteis;
    var $disponivel = true;
    var $operacoes = [];

    function ficha_imovel(){
        echo "<hr>"."<br>";
        echo "Código: ".$this->cod."<br>";
        echo "Endereço: ".$this->endereco."<br>";
        echo "Metros Úteis: ".$this->metros_uteis."<br>";
        if($this->disponivel == true){
            echo "Disponível"."<br>";
        }else{
            echo "Indisponível"."<br>";
        }

        if(!empty($this->operacoes)){
            if(in_array('Venda',$this->operacoes)){
                echo "Preço de venda: ".$this->preco."<br>";
            }

            if(in_array('Aluguel',$this->operacoes)){
                echo "Aluguel: ".$this->aluguel."<br>";
            }
        }else{
            echo "Adicionar operações do imóvel"."<br>";
        }
    }

    function addOperacao($op){
        $ul = count($this->operacoes);
        //Ultimo elemento
        $this->operacoes[$ul] = $op;
    }
    


}

class Casa extends Imovel{
    var $tam_terreno;
    var $quartos;
    var $banheiros;
    var $comodos;

    function __construct($c,$en,$pr,$al,$mu,$d,$ops,$tt,$qt,$bn,$co){
        $this->cod = $c ;
        $this->endereco = $en ;
        $this->preco = $pr ;
        $this->aluguel = $al;
        $this->metros_uteis = $mu;
        $this->disponivel = $d;
        $this->operacoes = $ops ;
        $this->tam_terreno = $tt ;
        $this->quartos = $qt;
        $this->banheiros = $bn ;
        $this->comodos = $co ;
    }

    function ficha_casa(){
        $this->ficha_imovel();
        echo "Terreno: ".$this->tam_terreno."<br>";
        echo "Quartos: ".$this->quartos."<br>";
        echo "Banheiros: ".$this->banheiros."<br>";
        if(!empty($this->comodos)){
            echo "Comodos: ";
            foreach($this->comodos as $com){
                echo $com." | ";
            } 
            echo "<br>";
        }
        echo "<hr>"."<br>";
    }

}



class Apartamento extends Imovel{
    var $condominio;
    var $quartos;
    var $banheiros;
    var $comodos;
    var $andar;
    var $bloco;
    var $ap;
    var $valor_cond;
    var $lazer;

    function __construct($c,$en,$pr,$al,$mu,$d,$ops,$cd,$qt,$bn,$co,$an,$bl,$ap,$vc,$lz){
        $this->cod = $c ;
        $this->endereco = $en ;
        $this->preco = $pr ;
        $this->aluguel = $al;
        $this->metros_uteis = $mu;
        $this->disponivel = $d;
        $this->operacoes = $ops ;
        $this->condominio = $cd ;
        $this->quartos = $qt;
        $this->banheiros =$bn ;
        $this->comodos = $co ;
        $this->andar = $an ;
        $this->bloco =$bl ;
        $this->ap = $ap ;
        $this->valor_cond = $vc ;
        $this->lazer = $lz ;
    }

    function ficha_ap(){
        $this->ficha_imovel();
        echo "Condomínio: ".$this->condominio."<br>";
        echo "Andar: ".$this->andar."<br>";
        echo "Bloco: ".$this->bloco."<br>";
        echo "Ap: ".$this->ap."<br>";
        echo "Valor condomínio: ".$this->valor_cond."<br>";
        echo "Quartos: ".$this->quartos."<br>";
        echo "Banheiros: ".$this->banheiros."<br>";
        if(!empty($this->comodos)){
            echo "Comodos: ";
            foreach($this->comodos as $com){
                echo $com." | ";
            } 
            echo "<br>";
        }
        if(!empty($this->lazer)){
            echo "Lazer do condomínio: ";
            foreach($this->lazer as $l){
                echo $l." | ";
            } 
            echo "<br>";
        }
        echo "<hr>"."<br>";
    }
    
}

$casa = new Casa("C1","Rua Chile 100",300000.00,550.00,238.00,true,["Venda","Aluguel"],350.00,2,2,["Cozinha","Quintal"]);
$apartamento = new Apartamento('AP1','Rua Pará 23',190500,0,59.0,true,["Venda"],'Edifício Ariella',2,1,['Sala','Lavanderia'],3,1,31,50.0,["Nenhum"]);

$casa->ficha_casa();
$apartamento->ficha_ap();





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 22</title>
</head>
<body>
  
    
</body>
</html>