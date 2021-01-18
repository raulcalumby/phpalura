<?php

function mensagem($exibirmensagem)
{

    echo $exibirmensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar)
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
        return $conta;
    }else{
        mensagem("algo deu errado");
    }


}