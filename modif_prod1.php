<?php
  
  $consulta=ConsultarProducto($_GET['nombres']);

  function ConsultarProducto( $nombres )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM usuario WHERE nombres='".$nombres."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['nombres'],
    $fila['apellidos'],
    $fila['dni'],
    $fila['fecha'],
    $fila['provincia'],
    $fila['cp'],
    $fila['localidad'],
    $fila['numero']
  ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

    <label>Nombres </label>
  		<input type="text" id="nombres" name="nombres" values="<?php echo $consulta[0]  ?>" ><br>
  		
  		<label>Apellidos: </label>
  		<input type="text" id="apellidos" name="apellidos" values="<?php echo $consulta[1]  ?>" ><br>

		<label>D.N.I: </label>
  		<input type="number" id="dni" name="dni" values="<?php echo $consulta[2]  ?>" ><br>

		<label>Fecha de Nacimiento: </label>
  		<input type="date" id="fecha" name="fecha" values="<?php echo $consulta[3]  ?>" ><br>

		<label>Provincia: </label>
  		<input type="text" id="provincia" name="provincia" values="<?php echo $consulta[4]  ?>" ><br>

		<label>Codigo Postal: </label>
  		<input type="number" id="cp" name="cp" values="<?php echo $consulta[5]  ?>" ><br>
  		
		<label>Localidad: </label>
  		<input type="text" id="localidad" name="localidad" values="<?php echo $consulta[6]  ?>" ><br>

		<label>Numero de Telefono: </label>
  		<input type="number" id="numero" name="numero" values="<?php echo $consulta[7]  ?>" ><br>

  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>