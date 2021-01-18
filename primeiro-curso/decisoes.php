<?php


$idade = 16;
$numeroDePessoas= 1;
$mensagem = $idade <18 ? 'você é menor de idade não pode entrar': 'você é maior de idade';
echo " Bem vindo a Balada ! você só pode entrar se for maior de idade" . PHP_EOL;
echo " Caso tiver 16 anos,  para cima você pode entrar acompanhado " . PHP_EOL . PHP_EOL;



if($idade >= 18 || $idade >= 16 && $numeroDePessoas >= 2 ){
    echo " Você está dentro das regras da empresa, pode entrar ";

}else{

    echo $mensagem;

}
echo PHP_EOL;
echo "adeus";