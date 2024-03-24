<?php


function multiplicador($numeroInicial){
    // Devolvemos la funcion anonima que multipla cualquier numero dado por numeroInicial
    return function($numero) use ($numeroInicial){
      return $numero * $numeroInicial;
    };
}

// Utilizamos la funcion multiplicador para crear una funcion anonima que multiplica por 10

$multiplicaPor10 = multiplicador(10);


// Utilizamos la funcion anonima para realizar las diferentes multiplicaciones
echo $multiplicaPor10(2) . "\n";
echo $multiplicaPor10(40). "\n";
echo $multiplicaPor10(80). "\n";

