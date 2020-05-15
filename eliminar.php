<!DOCTYPE>
<html>
<body>
	<?php
		 $Server = "localhost";
	     $Datebase = "basededatos";
         $Usuario = "root";
         $Password = "";	
		 $conexion=mysqli_connect($Server,$Usuario,$Password,$Datebase);
		 mysqli_query($conexion,"DELETE from carrito where 1");
		 mysqli_close($conexion);
		 header("location:Index.html");
	?>
</body>
</html>