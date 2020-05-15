<?php
	include("Conexion.php");
	$query="DELETE FROM carrito where id='' ";
	$resultado=$Conexion->query($query);
	if($resultado)
	{
		header("Location:Index.html");
	}
?>