<?php
	EliminarProducto($_GET['nombres']);

	function EliminarProducto($nombres)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM usuario WHERE nombres='".$nombres."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Perfil Eliminado");
	window.location.href='index.php';
</script>