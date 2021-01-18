<?php

$peso = 100;
$altura = 1.70;
$resultadoIMC= $peso / $altura ** 2  ;

if($resultadoIMC <= 18.49) {
    echo " Abaixo";

}elseif($resultadoIMC < 25){
    echo "Parabens, você está Dentro";

}else{
    echo "Infelizmente o seu peso está Acima";
}
echo " do recomendado";