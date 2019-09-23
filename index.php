<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formularios</title>
  </head>
  <body>
      <!--1 forma: Enviar datos a la misma pagina ( Variable super global )-->
      <!--
      <form action="<?php echo htmlspecialchars($_SERVER[])?>" method="POST" name="" id="" class="">
       -->

    <form action="metodo_get.php" method="GET" name="" id="" class=""> 
        
      <input type="text" name="nombre" placeholder="Nombre">
      </br>

      <label for="Hombre" >Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="Hombre"> 
       </br>
      <label for="muner"> Mujer </label>
      <input type="radio" value="Mujer" name="sexo" id="mujer">
      <br>
   
      <select name="year">
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      </select>
      <br>

      <label for="terminos"> Aceptar terminos</label>
      <input type="checkbox" name="terminos" id="terminos" value="ok">
      <br>
      <input type="submit" value="Enviar" name="">
    </form>
  </body>

</html>
