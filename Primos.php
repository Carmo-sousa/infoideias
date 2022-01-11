<?php

function Primos($inicial, $final) {
    $primos = [];

    for ($i = $inicial; $i <= $final - 1; $i++) {
        if (Primo($i)) {
            $primos[] = $i;
        }
    }

    return $primos;
}

function Primo($numero) {
    if ($numero < 2) {
        return false;
    }

    if ($numero == 2) {
        return true;
    }

    if ($numero % 2 == 0) {
        return false;
    }

    for ($i = 3; $i <= sqrt($numero); $i += 2) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

