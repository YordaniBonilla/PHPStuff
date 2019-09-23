<?php

#Proteger propiedades y metodos 
//Public -> podemos acceder directamente a traves del objecto;
//fuera o dentro de nuestra clase llamando una funcion del objecto
//protected -> solo puede ser accedida desde dentro de la clase y de otras classes heredadas a traves de funciones
//private -> solo podemos aceder a ellas desde la clase en la que fueron creadas usando una funcion
class Profesor{
	public $nombre;
	
	public $correo;
    //a private value is only accessible through the main class indirectly through a function
	public $password;

	function __construct($nombre, $correo,$password) {
		$this -> nombre = $nombre;
		$this -> correo = $correo;
		$this -> password = $password;
	}
    //only avaible through a method declared in the main parent class 
    //cannot be accessed indirectly using a subclasses own method
	private function showInfo() {
		echo 'private';
		return ' The email is --->' . $this -> correo . ' and the UserName is ---->' . $this -> nombre . ' her password is ---->' . $this -> password;
	}
    //only available indirectly through another method both a sub or parent class instance
	protected function callShowInfo() {
		$this->showInfo();
		echo 'protected';
	}
    //accessible from sub class and parent class instances
	protected function callProtected() {
		echo ' works';
	}
}
$sara = new Profesor('sarah','b_yordani@yolo.com', 'kitchenKnife');
echo ' This is the Parent Class ' . '</br>';
// echo $sara -> callProtected();


//begin Estudiante
class Estudiante extends Profesor {
	public function showCorreo() {
		return ' The email is --->' . $this -> correo . ' and the UserName is ---->' . $this -> nombre . ' her password is ---->' . $this -> password;
	}

	public function callParentCallProtected() {
		$this -> callProtected();
	}
    
}
echo '</br>';
echo ' This is the subClass' . '</br>';
$jackie = new Estudiante('chan','watermelojuggs@cum.com','murkywaters');
echo '</br>'.  'subclass calling parent private';
echo '</br>';
echo $jackie -> callParentCallProtected();




/*
//public static research

echo Persona::Saludo('Hugo');

#Proteger nuestra clase 
#No podemos acceder a una clase , A MENOS que las heredemos 

abstract class Persona {
	public function saludo() {
		return 'Hola';
	}
}

//abstract
*/
?>


 
