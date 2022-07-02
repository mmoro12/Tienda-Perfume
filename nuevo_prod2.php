<?php

	
	NuevoProducto($_POST['nombres'], $_POST['apellidos'], $_POST['dni'], $_POST['fecha'], $_POST['provincia'], $_POST['cp'], $_POST['localidad'], $_POST['numero']);
	
	function NuevoProducto($nombres, $apellidos, $dni, $fecha, $provincia, $cp, $localidad, $numero) 
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO usuario (nombres, apellidos, dni, fecha, provincia, cp, localidad, numero) VALUES ('".$nombres."', '".$apellidos."', '".$dni."', '".$fecha."', '".$provincia."', '".$cp."', '".$localidad."', '".$numero."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Se cargo correctamente los datos de tu perfil");
	window.location.href='index.php';
</script>