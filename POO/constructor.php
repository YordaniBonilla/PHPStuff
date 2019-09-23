<?php 

class Persona {
	public $nombre;
	public $edad;
	public $pais;

    public function __construct($nombre, $edad, $pais) {
 	  $this -> nombre = $nombre;
 	  $this -> edad = $edad;
 	  $this -> pais = $pais; 
    }
	public function mostrarInfo() {
		echo $nombre;
		echo $this -> nombre . ' tiene '. $this -> edad . ' anos y es de ' . $this -> pais;
	}
}


$sara = new Persona('Sarahi','23','Mexico');
$sara -> mostrarInfo();
//public 
//private 
//
?>