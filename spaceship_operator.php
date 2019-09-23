<?php
#Regresa 1 si el valor en la izquierda es MAYOR que el de la derecha 
#Regresa 0 si los valores en ambos lados so iguales
#Regresa -1 si el valor de la derecha es MAYOR que el de la izquierda
echo  1 <=> 1 ;

$arreglo = [2,1,5,8,3];

function comparar($a, $b) {
  if($a == $b) {
    return 0;
  } else if ($a > $b) {
	  return 1;
  } else if ($a < $b) {
    return -1;
  }
}


function compara_two($a, $b) {
  return $a <=> $b;
}

#Ordena un array segun sus valores usando una funcion de comparacion definida por el usuario

unsort($arreglo, 'comparar');

echo impole('-', $arreglo);
?>
