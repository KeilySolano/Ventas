<?php
$User= array("Cole", "Camryn", "Nathan", "Aegan", "Tessa");
$Password = array(123,456,789,1011,1213);

$Estado = false;

$Nombre = $_POST["Nombre"];
$Password = $_POST["Pass"];

$Key = count($User);
for($x=0; $x<Key; $x++)
{
  if($User[$x] == $Nombre && $Pass[$x]== $Password)
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