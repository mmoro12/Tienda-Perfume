<?php
	
	ModificarProducto($_POST['nombres'], $_POST['apellidos'], $_POST['dni'], $_POST['fecha'], $_POST['provincia'], $_POST['cp'], $_POST['localidad'], $_POST['numero']);
	function ModificarProducto($nom, $ape, $dni, $fecha, $provincia, $cp, $localidad, $numero) 
	{
		include 'conexion.php';
		$sentencia="UPDATE usuario SET nombres='".$nom."', '".$ape."', '".$dni."', '".$fecha."', '".$provincia."', '".$cp."', '".$localidad."', '".$numero."' WHERE nombres='".$nom."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>