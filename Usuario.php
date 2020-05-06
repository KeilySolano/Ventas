<?php
$User= array("cole", "Camryn", "Nathan", "Aegan", "Tessa");
$Pass = array(123,456,789,1011,1213);

$Estado = false;

$Nombre =$_POST['Nombre'];
$Password =$_POST['Password'];

$key = count($User);

for($x=0; $x<$key; $x++)
{
  if($User[$x] == $Nombre && $Pass[$x]== $Password)
  {
   $Estado = true;
  }
}
 if($Estado)
  {
   header("location:Ventas.html");
  }
  else 
  {
    header("location:Index.html");
  }
?>