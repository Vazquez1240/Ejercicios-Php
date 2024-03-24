<?php

function sumarElementos($array){
    return array_reduce($array, function($carry, $item){
        return $carry + $item;
    });
}

$nums1 = [1, 2, 3, 4, 5];

echo "La suma de los elementos es: " . sumarElementos($nums1) . "\n";

$nums2 = [10, 20, 30, 40, 50];

echo "La suma de los elementos es: " . sumarElementos($nums2);