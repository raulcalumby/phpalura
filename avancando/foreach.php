<?php

$contaCorrente = [
   12231231212312 => [

       'titular' => 'Raul',
       'saldo' => 90
   ],
   12312312312312 => [

    'titular' => 'Rodrigo',
    'saldo' => 10000
],

];
foreach ($contaCorrente as $cpf => $conta){
    echo $cpf. PHP_EOL;
}

