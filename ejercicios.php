<?php 
include 'toyproblem.php';
$name = $_POST["nombre"];
$dia
$mes	
echo 'tu nombre es ' . $nam:e;
echo '</br>';
/*Exercisio 1*/
//ingresar 4 numeros y determinar cuantos se repiten 
//Primero declaramos los valores de los inputs
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$number3 = $_POST["number3"];
$number4 = $_POST["number4"];
//Segundo declaramos un arreglo con los 4 valores
$numbers = [$number1, $number2, $number3, $number4];
echo'</br>';
print_r(array_count_values($numbers));
echo '</br>';
//declaramos un arreglo para los numeros repitidos
$repeats = [];
//iteramos el arreglo que regresa array_count_values

foreach(array_count_values($numbers) as  $value) {
  /* populamos nuestro repeats array con valores que
     tienen aparencia de 2*/
  if($value == 2) {
    array_push($repeats,$value);
  }

}

echo '</br>';
echo "se repiten " . count($repeats) . " numeros en los inputs";
/*Exercise 2*/
//investigar include y require
//Definicion: include y require son identicos excepto cuando succede un error, require detiene el script al igual de dar error
//Los do son usados para hacer disponibles el texto/codigo/markup de un archivo al archivo que utiliza include/require.
echo '</br>';

//include o require es lo mismo
include 'includeEx.php';
/*En el archivo includeEx.php declare una funcion :
--->	function Cake() {
		echo 'ejemplo de usar include para importar una funcion de                 otro archivo';

	} <----
 */
//invoka la funcion 
echo Cake();
echo '</br>';
//function die()
if ($number1 == -1) {
  return 'wohoo';
} else {
  die('not -1 goodbye');
}

dias_restantes($dia, $mes);
?>


