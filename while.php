<?php


#Cicle while




$x = 20;

while ($x >= 1) {
  #echo mientras la condicion es cumplida       
  echo $x .'<br />';
  $x--;
};
$i = 1;
echo '</br>';
#execute code as long as condition is true
#first executes code then checks
do {
  #code...
	echo $i . '<br/>';
	$i++;
} while ($i < 10);

$age = 18 ;

$age = (isset($age)) ? 'Su edad es: ' . $edad : 'El usuario no establecio su edad';

#isset -> Devuelve un 1 si es true 

$texto = 'Sara';
$numero = 10;
$numero_dos = '5';
$arreglo = ['hugo', 'Tu Nerd'];
$arreglo_asociativo = ['name' => 'sara', 'age' => '23'];
$booleano = true;

print_r('soy un booleano' . $booleano);




$texto = '< > $ "" ';

echo htmlspecialchars($texto);

$texto = ' <b> Hola <b/>';
echo htmlspecialchars($texto);
echo '&amp and &';



#ejercicio: dada una frase. determinar si es palindromo o no
#ejercicio: dado un rango de numeros, determinar cuantos numeros capicua hay 111, 343 5665, 4567
$rango = ['111','343','5665','4554'];
function capicua($input) {
$contador = 0;
foreach($input as $valor) {
	if($valor === strrev($valor)) {
	$contador++;
	}

}
return $contador;
}


echo $resultado = capicua($rango);

?>
