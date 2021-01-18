<?php

require 'funcoes.php';




$contaCorrente = [
    '1223123331212212' => [

        'titular' => 'Raul',
        'saldo' => 90
    ],
    '1234321' => [

        'titular' => 'Rodrigo',
        'saldo' => 100
    ],

];

$contaCorrente['12312312312312'] = sacar($contaCorrente['1223123331212212'], 30);
$contaCorrente['1234321']= depositar($contaCorrente['1234321'], 2322);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta Corrente</title>
</head>
<body>
<h1> Contas Correntes</h1>
    <dl>
        <?php foreach ($contaCorrente as $cpf => $conta) { ?>
        <dt>
            <h3> <?php echo $conta['titular']; ?>  - <?php echo $cpf; ?> </h3>
        </dt>
        <dd>
             Saldo <?php echo $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>


</body>
</html>
