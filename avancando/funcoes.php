<?php
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("você não pode sacar");
    } else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        return $conta;
    } else {
        exibeMensagem("você não pode depositar um valor negativo");
    }

}

function exibeMensagem($mensagem) {
    echo $mensagem . '<br>';

}

function titularComLetrasMaiusculas( array $conta, )
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo ]=$conta;
  echo  "<li>Titular : $titular Saldo: $saldo</li>";

};