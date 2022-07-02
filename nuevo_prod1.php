<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catamarca Perfumes</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="./css1/css1.css" rel="stylesheet">
  </head>
<body>
<div class="todo">

<nav class="navbar navbar-expand-lg color-principal  ">
      <div class="container">
        <a class="navbar-brand px-4" href="#"><img src="images/logos/logo2.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link color-principal px-4" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-principal px-4" href="#">¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle color-principal px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfumes Extractos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Masculinos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Femeninos</a>
              </div>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="index.php">mi Perfil</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <div class="container">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
	  	<span><h2><strong> Ingresa tus Datos </strong></h2></span>
  		<br>
	  <form class="form-horizontal container form-flu " action="nuevo_prod2.php" method="POST" >
  		<label>Nombres </label>
  		<input type="text" id="nombres" name="nombres"><br>
  		
  		<label>Apellidos: </label>
  		<input class="" type="text" id="apelldios" name="apellidos" ><br>

		<label>D.N.I: </label>
  		<input type="number" id="dni" name="dni" ><br>

		<label>Fecha de Nacimiento: </label>
  		<input type="date" id="fecha" name="fecha" ><br>

		<label>Provincia: </label>
  		<input type="text" id="provincia" name="provincia" ><br>

		<label>Codigo Postal: </label>
  		<input type="number" id="cp" name="cp" ><br>
  		
		<label>Localidad: </label>
  		<input type="text" id="localidad" name="localidad" ><br>

		<label>Numero de Telefono: </label>
  		<input type="number" id="numero" name="numero" ><br>

  		
  		<br>
  		<button type="submit" class="btn text-white color-fondo px-4" href=>Guardar</button>
     </form>
  	</div>
  	
  </div>
  


</body>
</html>