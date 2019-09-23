<?php


//function para el reduce
function rsum($v, $w) {

  $v += $w;
  return $v;
}

function dias_restantes($dia, $mes) {


        //declarar dias del ano como constante	
	define('year', 365);
	//declarar arreglo associative con mes y dias totales
	$meses = ['enero' => 31, 'febrero' => 28,
	       	'marzo' => 31, 'april' => 30, 
		'mayo' => 31, 'june' => 30, 
		'july' => 31, 'agosto' => 31, 
		'septiembre' => 30, 'octubre' => 31, 
		'noviembre' => 30, 'diciembre' => 31 ];
	/*declarar arreglo para guardar numero de dias corridos asta la fecha*/
	$diasActuales = [];
	//suma total de los valores del arreglo $diasActuales
	$suma_dias_actuales = null;
        //iterar $meses 
	foreach($meses as $key => $value) {
	  //si key es igual al mes del input	
	  if($key === $mes) {
	    //push valor a nuestro arreglo $suma_dias_actuales	 
            array_push($diasActuales, $dia);
	    //escapamos la iteration
	    break; 
	  } 
	  array_push($diasActuales, $value);

	}
	//sumamos los valores de $suma_dias_actuales
	$suma_dias_actuales = array_reduce($diasActuales, "rsum");
	/* al final sustraimos $suma_dias_actuales de los dias total al ano*/      
     	print 'falta ' . (year - $suma_dias_actuales) . 'dia para terminar el ano';	
}

dias_restantes( 30, 'diciembre');


?>
