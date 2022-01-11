<?php

function Sorteio() {
    $final = 20;

    $sorteados = [];

    for ($i = 1; $i <= $final; $i++) {
        $sorteados[] = rand(1, 10);
    }
    sort($sorteados);
    return $sorteados;
}

function Repetidos($sorteados) {
    $repetidos = [];

    for ($i = 0; $i < count($sorteados); $i++) {
        $item = array_pop($sorteados);
        if (in_array($item, $sorteados)) {
            $repetidos[] = $item;
        }
    }
    sort($repetidos);
    return $repetidos;
}
