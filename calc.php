<?php
    
    $altura = $_POST["txtAltura"];
    $peso = $_POST["txtPeso"];
    $calculo = $peso/($altura*$altura);
    $resp = "";

    if ($calculo <= 18.5){
        $resp = "Abaixo do Peso";   
    }else if ($calculo > 18.5 && $calculo < 25){
        $resp = "Saudável";
    }else if ($calculo >= 25 && $calculo < 30){
        $resp = "Peso em Excesso";
    }else if ($calculo >= 30 && $calculo < 35){
        $resp = "Obesidade Grau 1";
    }else if ($calculo >= 35 && $calculo < 40){
        $resp = "Obesidade Grau 2";
    }else if ($calculo >= 40){
        $resp = "Obsidade Grau 3";
    }else{
        $resp = "IMC fora do Intervalo!";
    } 

    $calculo = number_format($calculo, 2, '.', ' ' );
    echo ("IMC: ".$calculo);
    echo "<br>";
    echo ("Resultado: $resp");

?>
