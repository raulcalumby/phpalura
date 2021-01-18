<?php

require 'funcoes.php';

$contaCorrente = [
    '234-213-0-09' => [
       'titular' => 'Raul',
       'saldo' => 232312



    ],
    '564-113-0-09' => [
        'titular' => 'Rodrigo',
        'saldo' => 31231213
    ]

];

$contaCorrente['234-213-0-09']= depositar($contaCorrente['234-213-0-09'], 1000);
foreach ($contaCorrente as $cpf => $conta) {

    echo "$cpf $titular $conta";
}