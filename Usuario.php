<?php
$User= array("cole", "Camryn", "Nathan", "Aegan", "Tessa");
$Password = array(123,456,789,1011,1213);

$Estado = false;

$Nombre =$_POST['Nombre'];
$Password =$_POST['Password'];

$key = count($User);

for($x=0; $x<$key; $x++)
{
  if($User[$x] == $Nombre && $Password[$x]== $Password)
  {
   $Estado = true;
  }
}
 if($Estado)
  {
   echo "User successfully enabled";
  }
  else 
  {
    echo "User not enabled, please try again later ";
  }
?>