<?php
#Ejemplo de como lo hariamos sin POO

$nombre = 'Sara';
$edad = 23;
$pais = 'Mexico';

#POO
class Persona {
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInfo() {
		echo 'Hola, soy un metrodo <br/>';
	}
}

#Creo un objeto -> propiedades y metodos 

$sara = new Persona;
$sara -> nombre = 'Sarahi';
$sara -> edad = '26';
$sara -> pais = 'Japon';
$sara -> mostrarInfo(); 

#Sarahi tiene 23 anos y vive en Mexico

echo $sara -> nombre . ' tiene' sara -> edad . ' anos y vive en ' . sara -> pais;







?>