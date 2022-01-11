<?php

function SeculoAno($ano) {
    $seculo = intdiv($ano, 100);

    if (($ano % 100) > 0) {
        return $seculo + 1;
    }

    return $seculo;
}
