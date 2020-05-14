<?php
      include('Conexion.php');

      class ValidarUsuario
      {
          public function ValidarBruker($User, $Pass)
          {
                $Us = new Conexion();
                $querey ="SELECT * FROM `usuarios` WHERE `Usuario Correspondiente`='$User' AND `Password`= '$Pass';";
                $Bruker=$Us->query($querey);
                $Us->close();
                return $Bruker;
          }

      }
?>