<?php

function SequenciaCrescente($array)
{
    $numerosForaDeOrdem = 0; //quantidade de números fora de ordem
    $numerosIguais = 0; //quantidade de números iguais
    $numerosIguaisEmSequencia = 0; //quantidade de números iguais em sequência

    for ($i = 1; $i < sizeof($array); $i++) {


        if ($array[$i - 1] > $array[$i]) {
            $numerosForaDeOrdem = $numerosForaDeOrdem + 1;
        }


        if ($array[$i - 1] == $array[$i]) {
            $numerosIguaisEmSequencia = $numerosIguaisEmSequencia + 1;
        }
    }

    $arr = array_count_values($array);

    foreach ($arr as $key => $valor) {
        if ($valor > 1) {
            $numerosIguais = $numerosIguais + 1;
        }
    }

    if ($numerosForaDeOrdem > 1 or $numerosIguais > 1 or $numerosIguaisEmSequencia > 1) {
        return false;
    } else {
        return true;
    }
}
