<?php


#Detras del formulario
#no manda valores por la url
#enviar archivos
#mostrar informacion importante que no queremos que el usuario pueda manipular (contrasenas, bases de datos)

if($_POST) {
 $nombre = $_POST['nombre'];
 $sexo = $_POST['sexo']; 
 $year = $_POST['year'];
 $terminos = $_POST['terminos'];
 
 echo 'HOla ' . $nombre . ' eres ' . $sexo;

} else {

 header('Location: http://100.115.92.197/index.php');
}


