﻿﻿<!doctype html>
<html lang="en">
    <head>
           <link rel="stylesheet" type="text/css" href="Estilos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Ventas</title>
    </head>
    <body style="background: #pink">
        <br />
        <div align="center">
            <h1>VENTAS</h1>
        </div>

        <div align="right">
            <a href="index.html">Salir</a>
            
        </div>
        <hr />
        <br />

        <?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                //echo " datos de producto ".$_GET['producto']."--- Precio ".$_GET['precio'];
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" border=1>
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Precio</p>
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
                                        El Galaxy A50 es pura estética de primera calidad. Ya sea en sus colores modernos blanco o negro o en los colores brillantes coral o azul, su cuerpo delgado cabe cómodamente en la mano. Además, con la cubierta de plástico vidriado 3D y el escáner de huellas dactilares en la pantalla, sentirás curvas suaves y perfectas en los bordes.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=A50&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="imagenes/CALM.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Hemos diseñado Galaxy S7 y S7 edge dando rienda suelta a nuestra imaginación. El resultado es una usabilidad incomparable, repleta de funciones avanzadas con un aspecto descaradamente moderno. Unos smartphones con un aspecto realmente atractivo y muy fáciles de usar.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=S7&precio=250">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="imagenes/CAMILA.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Galaxy A50 es pura estética de primera calidad. Ya sea en sus colores modernos blanco o negro o en los colores brillantes coral o azul, su cuerpo delgado cabe cómodamente en la mano. Además, con la cubierta de plástico vidriado 3D y el escáner de huellas dactilares en la pantalla, sentirás curvas suaves y perfectas en los bordes.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=A50&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="imagenes/GREEN DAY.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Galaxy A50 es pura estética de primera calidad. Ya sea en sus colores modernos blanco o negro o en los colores brillantes coral o azul, su cuerpo delgado cabe cómodamente en la mano. Además, con la cubierta de plástico vidriado 3D y el escáner de huellas dactilares en la pantalla, sentirás curvas suaves y perfectas en los bordes.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=A50&precio=150">Comprar</a>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <div class="col mb-4">
                                    <div class="card">

                                    <img src="imagenes/PinkFloyd.jpg" class="card-img-top" alt="..."/>
                                </td>
                                <td>
                                    <p>
                                        The Dark Side of the Moon 
                                        Pink Floyd                                          
                                    </p>
                                </td>
                                <td>
                                    <p>$ 29.37 </p>
                                </td>
                                <td>
                                    <a href="?producto=A50&precio=150">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Salir2</a></td>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>