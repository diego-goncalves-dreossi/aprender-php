<?php
//Aula 15 Manipulação de data e hora

// Função de data e hora

$dia = date("d"); # Dia numeral
$mes = date("m"); # Mês numeral
$ano = date("y"); # Ano numeral com 2 digitos
$ano2 = date("Y"); # Ano numeral com 4 digitos
$meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
$hora = date("h"); // Formato 12h
$hora2 = date("H"); // Formato 24h
$minuto = date("i"); //Minuto
$segundo = date("s"); //Segundos


function meses($mes,$meses){
    $nm = ''; //Nome do mes
    switch($mes){
        case '01':
            $nm = $meses[0];
            break;

        case '02':
            $nm = $meses[1];
            break;

        case '03':
            $nm = $meses[2];
            break;

        case '04':
            $nm = $meses[3];
            break;

        case '05':
            $nm = $meses[4];
            break;

        case '06':
            $nm = $meses[5];
            break;

        case '07':
            $nm = $meses[6];
            break;

        case '08':
            $nm = $meses[7];
            break;

        case '09':
            $nm = $meses[8];
            break;

        case '10':
            $nm = $meses[9];
            break;

        case '11':
            $nm = $meses[10];
            break;

        case '12':
            $nm = $meses[11];
            break;

        default:
            $nm = "Mês inválido";
            break;
    }
    return $nm;
}

echo "Data<br>";
echo "$dia de $mes de $ano<br>";
echo "$dia de ".meses($mes,$meses)." de $ano2<br><br>";
# -1 porque o mes retorna o mes certo mas no array a contagem começa em zero
echo "Hora<br>";
echo "$hora : $minuto : $segundo <br>";
echo "$hora2 : $minuto : $segundo <br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Aulas 15</title>
</head>
<body>
    
     
    
</body>
</html>