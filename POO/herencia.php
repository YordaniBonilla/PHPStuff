<?php 

class Persona {
	//declare the varibales to be used
	public $nombre;
	public $edad;
	public $pais;
   public $text = 'hello moto';
    public function __construct($nombre, $edad, $pais) {
 	  //now we are able to use these variable declared with public
 	  $this -> nombre = $nombre;
 	  $this -> edad = $edad;
 	  $this -> pais = $pais; 
    }
	public function mostrarInfo() {
		return $this -> nombre . ' tiene '. $this -> edad . ' anos y es de ' . $this -> pais;
	}
}

#Inheritance in PHP
class Estudiante extends Persona {
	// public $text = 'hello hello';
	//how to only delegate certain properties when inhereting from parent #important!
	function __construct($nombre, $edad, $pais, $carrera) {
      #Quiero qu me traigas el metodo constructor padre
		//can replace this with the parents declared this variables
		parent::__construct($nombre, $edad, $pais);
		$this -> carrera = $carrera;
	}	
}

$sara = new Estudiante('Sarahi','23','Mexico','Philosophie');
echo $sara -> text;
//need to test the texts and see if we delcared them correctly
//public 
//private 
//
?>