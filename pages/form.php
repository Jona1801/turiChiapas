<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Arvo&family=Candal&family=Roboto+Mono:wght@300&family=Suez+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png"  href="../img/logos/icono.png">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="icons.css">
	<link rel="stylesheet" href="../style/bootstrap-icons-1.6.1/bootstrap-icons.css">
	<script src="js/app.js"></script>
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
<?php 
include("../conexion.php");

session_start();

if (@$_SESSION['validada'] == "SI") {
    if(isset($_POST['registrar'])){
        $nombre=$_POST['nom'];
        $telefono=$_POST['tel'];
        $paquete=$_POST['paq'];
        $direccion=$_POST['dir'];
        $sqlgrabar= "INSERT INTO datos(nombre,telefono,paquete,direccion) values ('$nombre','$telefono','$paquete','$direccion');";
        if(mysqli_query($conn,$sqlgrabar)){
            echo "<script> alert('Tu paquete fue reservado'); window.location='/proyectoweb/pages/tours.html'</script>";
        }else{
            echo "<script> alert('Lo sentimos ocurrio un error');</script>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/proyectoweb/css/styles.css">
        <title>Reservación para el Tour</title>
    </head>

    <body  style="background-color: rgb(187, 247, 187);">
      <!--Header-->
      <nav class="navbar navbar-expand-md fixed-top navbar-light border-bottom border-1" style="background-color: white;">
            <div class="container-fluid ">
                <img src="../img/logos/logo-turi.png" width="50" height="40" role="img">
                    <h1 class="" style="cursor:default; color: black; font-size: 22px; margin-top: 5px; font-family: 'Suez One', serif;">turiChiapas</h1>
                </img>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="menuNavegacion" class="collapse navbar-collapse" style="margin-left: 60%;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                            <a class="nav-link text-dark" href="../index.php" style="cursor: pointer; font-size: 15px; font-family: 'Anton', sans-serif; ">Inicio</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark" style=" font-size: 15px;  font-family: 'Anton', sans-serif; " href="../pages/formulario.php">Rutas</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark" style="font-size: 15px;   font-family: 'Anton', sans-serif; " href="../pages/acerca.html">Acerca de</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-3">
                        <li class="nav-item mr-3">
                            <a class="nav-link btn btn-outline-success  text-dark" style=" border-radius: 20px; padding: 9px 16px; font-size: 15px; font-family:'Anton', sans-serif;" href="">
                                Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    <section style="margin-top: 64px; color: #115d22;" >
     <h1 align="center"  >Reservar Tours.</h1>
    </section>
        <form class="row" method="POST" action="">
            <div style="margin-top:40px; margin-left:10px;" class="form-group col-7">
            

                <p style="font-size: 20px; font-weight: 400;"> Nombre:
                    <input style="margin-left:10px; border-radius: 10px; border:double rgb(95, 196, 95); font-size: 18px;" type="text" class=" " name="nom" id="nombre" pattern="[a-z, A-Z]{4,50}" placeholder="Ingresa Nom. Completo "required autocomplete="off">
                </p>
                <p style="font-size: 20px; font-weight: 400;"> Telefono:
                    <input style="margin-left:10px; border-radius: 10px; border:double rgb(95, 196, 95); font-size: 18px;" type="text" name="tel" placeholder="Ingresa tu num. Telefono" pattern="[0-9]{10}" required autocomplete="off">
                </p>
                <p style="font-size: 20px; font-weight: 400;"> Paquete:
                    <input style="margin-left:10px; border-radius: 10px; border:double rgb(95, 196, 95); font-size: 18px;" type="text" name="paq" placeholder="Escribe tu paquete" required autocomplete="off">
                </p>
                <p style="font-size: 20px; font-weight: 400;"> Dirección:
                    <input style="margin-left:5px; border-radius: 10px; border:double rgb(95, 196, 95); font-size: 18px;" type="text" name="dir" placeholder="Escribe tu dirección" required autocomplete="off">
                </p>
                
                <input style=" margin-left: 100px; text-decoration: none; border-radius: 10px; border:double rgb(95, 196, 95); " type="submit" name="registrar">
        </form>
            
        </div>
    </body>
    </html>
    
    <?php
    }else{
        echo "<script>
            alert('Por favor inicia sesión');
            window.location = '../login.html'
        </script>";
    }
    
    ?>