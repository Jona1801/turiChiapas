<!-- Bootstrap CSS -->
<?php
  session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Arvo&family=Candal&family=Fjalla+One&family=Kanit&family=Roboto+Mono:wght@300&family=Suez+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Arvo&family=Candal&family=Fjalla+One&family=IBM+Plex+Sans:wght@500&family=Kanit&family=Roboto+Mono:wght@300&family=Suez+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">

    
         <nav class="navbar navbar-expand-md fixed-top navbar-light border-bottom border-1" style="background-color: white;">
            <div class="container-fluid ">
                <img src="img/logos/logo-turi.png" width="50" height="40" role="img">
                    <h1 class="" style="cursor:default; color: black; font-size: 22px; margin-top: 5px; font-family: 'Suez One', serif;">turiChiapas</h1>
                </img>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="menuNavegacion" class="collapse navbar-collapse" style="margin-left: 60%;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                            <a class="nav-link text-dark" href="index.php" style="cursor: pointer; font-size: 15px; font-family: 'Anton', sans-serif; ">Inicio</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark" style=" font-size: 15px;  font-family: 'Anton', sans-serif; " href="./pages/formulario.php">Rutas</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-dark" style="font-size: 15px;   font-family: 'Anton', sans-serif; " href="./pages/acerca.html">Acerca de</a>
                        </li>
                    </ul>
                    <?php 
                    if (@$_SESSION['validada'] == "SI") {  ?>
                         <ul class="navbar-nav ms-3">
                        <li class="nav-item mr-3">
                            <a class="nav-link btn btn-outline-success  text-dark" style=" border-radius: 20px; padding: 9px 16px; font-size: 15px; font-family:'Anton', sans-serif;" href="inc/cerrar.php">
                                Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                    <?php }else{ ?>
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item mr-3">
                            <a class="nav-link btn btn-outline-success  text-dark" style=" border-radius: 20px; padding: 9px 16px; font-size: 15px; font-family:'Anton', sans-serif;" href="/proyectoweb/login.html">
                                Iniciar Sesión
                            </a>
                        </li>
                    </ul>
<?php
}
?>
                </div>
            </div>
        </nav>
    
        
        

    <script>
        window.onload = function(){
            setTimeout(function () {
                document.getElementById('loader').style.cssText = 'opacity: 0; z-index: 1';
            }, 500);
            setTimeout(function () {
                document.getElementById('hero-background').style.width = '100%';
            }, 1000)
            setTimeout(function () {
                document.getElementById('hero-text').style.opacity = '1';
            },1500)
            setTimeout(function () {
                document.getElementById('hero-img').style.opacity = '1';
            },2000)
            
            
        }
    </script>
