<?php

function duplicarNumerosPares($numeros){
    $numerosPares = array_filter($numeros, function ($numero){
       return $numero % 2 == 0; // Retornara true si el numero es par
    });

    $numerosDuplicados = array_map(function($numero) {
        return $numero * 2; // Duplica el numero
    }, $numerosPares);

    return $numerosDuplicados;
}

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = duplicarNumerosPares($nums);

// Mostramos el resultado en un nuevo array
print_r($resultado);
