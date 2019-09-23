<?php 

class Persona {
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInfo() {
		echo $nombre;
		echo $this -> nombre . ' tiene '. $this -> edad . ' anos y es de ' . $this -> pais;
	}
}

$sara = new Persona;
$sara -> nombre = 'Sarahi';
$sara -> edad = 23;
$sara -> pais = 'Mexico';
$sara -> mostrarInfo();

?>