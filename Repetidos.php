<?php

function Sorteio() {
    $final = 20;

    $sorteados = [];

    for ($i = 1; $i <= 9; $i++) {
        $numero = rand(1, 10);
        $sorteados[] = $numero;
    }

    return Unique($sorteados);
}

function Unique($sorteados) {
    $unique = array_unique($sorteados);
    $dup = array_diff_key($sorteados, $unique);
    
    foreach ($dup as $key => $value) {
        foreach ($sorteados as $key2 => $value2) {
            if ($value == $value2) {
                unset($sorteados[$key2]);
            }
        }
    }

    return array_values($sorteados);
}
