﻿<!doctype html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="Estilos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Ventas</title>
    </head>

     <form action="eliminar.php">
            <input type="submit" value="Salir" name="Elimanr">
     </form>

    <body style="background: #pink">
       
       

        <?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";                
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" border=1>
                    <tr>
                        <td>
                            <p>Precio</p>
                        </td>
                        <td>
                            <p>Producto</p>
                        </td>
                    </tr>
                    <?php
                         
                         $con = new Conexion();
                        $query="SELECT * FROM `carrito` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                        
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['precio']."</p>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </table>             
            <?php                   
            }
        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agregar Carrito</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>
                                    <img src="imagenes/artic.jpg" />
                                </td>
                                <td>
                                    <p>
                                        AM
                                        Arctic Monkeys  

                                    </p>
                                </td>
                                <td>
                                    <p>$ 9.99 </p>
                                </td>
                                <td>
                                    <a href="?precio=Artic Monkey&producto=9.99">Comprar</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="imagenes/CALM.jpg" />
                                </td>
                                <td>
                                    <p>
                                          CALM
                                          5 Seconds Of Summer
                                    </p>
                                </td>
                                <td>
                                    <p>$ 12 </p>
                                </td>
                                <td>
                                    <a href="?precio=calm 5secon&producto=12">Comprar</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="imagenes/CAMILA.jpg" />
                                </td>
                                <td>
                                    <p>
                                          Romance [Explicit] 
                                          Camila Cabello

                                    </p>
                                </td>
                                <td>
                                    <p>$ 11.22 </p>
                                </td>
                                <td>
                                    <a href="?precio=camila 5secon&producto=11.22">Comprar</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="imagenes/GREEN DAY.jpg" />
                                </td>
                                <td>
                                    <p>
                                          Father of All... [Explicit]  
                                          Green Day 
                                    </p>
                                </td>
                                <td>
                                    <p>$ 11.22 </p>
                                </td>
                                <td>
                                    <a href="?precio=camila 5secon&producto=11.22">Comprar</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="imagenes/PinkFloyd.jpg" />
                                </td>
                                <td>
                                    <p>
                                          Father of All... [Explicit]  
                                          Green Day 
                                    </p>
                                </td>
                                <td>
                                    <p>$ 11.22 </p>
                                </td>
                                <td>
                                    <a href="?precio=camila 5secon&producto=11.22">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>