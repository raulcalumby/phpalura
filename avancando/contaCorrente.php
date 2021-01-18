<?php




$conta1 = [

    'titular' => 'Raul',
    'saldo' => 90
];
$conta2 = [

    'titular' => 'Rodrigo',
    'saldo' => 10000
];
$conta3 = [

    'titular' => 'Rafaela',
    'saldo' => 1312312312
];
$contaCorrente = [ $conta1 , $conta2 , $conta3];


for($i = 0 ; $i < count($contaCorrente); $i++){
    echo $contaCorrente[$i]['titular'] . PHP_EOL;

};