<?php

declare(strict_types = 1);

#Declaraciones de tip escalar
function cuadrado(int $numero) {
    return $numero * $numero;



}

$numero = '8';

echo 'El cuadrado del numero ' .$numero . ' es ' .cuadrado($numero);

#Declaraciones de tip de devolucion
//Nos devuelven obligatoriamente un tipo de valor especifico

function getAge() : int {
  $age = ' Hugo tiene 23 anos';
  return $edad;

}


?>
