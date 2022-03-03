<?php
//Aula 20 Classes pt 1

class Livro{
    // Propriedades
    var $id;
    var $nome;
    var $editora;
    var $autor;
    var $genero;
    var $idioma;
    var $preco;
    var $ano;
    var $quantidade;
    var $em_estoque;

    //Construtor
    function __construct($id,$no,$ed,$au,$ge,$idi,$pr,$an,$qu){
        // this-> faz com que as propriedades da classe que sejam trabalhadas no escopo certo, caso não esteja presente o código entende que são variaveis da função.
        $this->em_estoque = true;
        $this->id = $id;
        $this->nome = $no;
        $this->editora = $ed;
        $this->autor = $au;
        $this->genero = $ge;
        $this->idioma = $idi;
        $this->preco = $pr;
        $this->ano = $an;
        $this->quantidade = $qu;

    }

    //Métodos

    function mostrarProps(){
        echo "<hr>";
        echo "Livro:".$this->id."<br>";
        echo "Nome: ".$this->nome."<br>";
        echo "Autor: ".$this->autor."<br>";
        echo "Editora: ".$this->editora."<br>";
        echo "Gênero: ".$this->genero."<br>";
        echo "Idioma: ".$this->idioma."<br>";
        echo "Preço: ".$this->preco."<br>";
        echo "Ano de publicação: ".$this->ano."<br>";
        if($this->em_estoque){
            echo "Em estoque"."<br>";
            echo "Quantidade disponivel: ".$this->quantidade;

        }else{
            echo "Fora de estoque<br>";
        }
        echo "<hr>";
    }

    function sitEstoque($sitEst){
        $this->em_estoque = $sitEst;
    }

    function alterarQuantidade($qt,$op){
        if($op == '+'){
            $this->quantidade += $qt; 
        } else if($op == '-'){
            $this->quantidade -= $qt;
        } else{
            $this->quantidade = $qt;
        }

    }

    function alterarPreco($qt,$op){
        if($op == '+'){
            $this->preco += $qt; 
        } else if($op == '-'){
            $this->preco -= $qt;
        } else{
            $this->preco = $qt;
        }

    }

}
//Livro($id,$no,$ed,$au,$ge,$idi,$pr,$an,$qu)
$lv = new Livro(1,'O fim da eternidade','Aleph','Isaac Asimov','Ficção Científica','Português',40.00,2019,30);
$lv2 = new Livro(2,'Harry Potter e a pedra filosofal','Rocco','JK Rowling','Fantasia','Português',39.99,1997,50);
$lv3 = new Livro(3,'Jogos Vorazes','Rocco','Suzanne Collins','Aventura','Português',38.99,2008,40);

//$lv->mostrarProps();
//$lv2->mostrarProps();
$lv3->mostrarProps();

//$lv2->sitEstoque(false);
//$lv2->mostrarProps();
$lv3->alterarQuantidade(10,'+');
$lv3->mostrarProps();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 20</title>
</head>
<body>
    
</body>
</html>