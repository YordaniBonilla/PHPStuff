<?php
//Es una tarea que se olvido manda es de validar el email y quitar html tags del nombre
if(isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
    if(filter_var($nombre, FILTER_SANITIZE_STRING)) {
    	// $nombre = trim($nombre);
    	// $nombre = htmlspecialchars($nombre);
    	// $nombre = stripslashes($nombre);
    	echo "Tu nombre es: $nombre <br />";
    } else {
        $errores .= 'Por favor agrega un nombre <br />';
    }
    
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    	echo "Tu correo es: $correo <br />";
    } else {
    	$errores .= 'Por favor agrega un correo <br />';
    }
    
    
    }
	// echo "Tu nombre es: $nombre <br/>";
	// echo "Tu correo es: $correo <br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Validating</title>
</head>
<body>
  <!-- <form action = "valida_envio.php" method="POST"> -->
  	<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type="text" name="nombre">
    <input type="text" name="correo">
    <?php if(!empty($errores)): ?>
    	<div class="error"><?php echo $errores ?></div> 
    <?php endif; ?>
    <?php if(!empty($errores)): ?>
    	<div class="error"><?php echo $errores ?></div> 
    <?php endif; ?>	
    <input type="submit" name="submit">

  </form>	
</body>
</html>

