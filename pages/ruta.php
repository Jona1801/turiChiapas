<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>turiChiapas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Candal&family=Roboto+Mono:wght@300&family=Suez+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Arvo&family=Candal&family=Roboto+Mono:wght@300&family=Suez+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png"  href="../img/logos/icono.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="icons.css">
	<link rel="stylesheet" href="style/bootstrap-icons-1.6.1/bootstrap-icons.css">
	<script src="../js/app.js"></script>
	<script src="../js/jquery-1.12.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/popper.min.js"></script>
</head>
<body style=" overflow-x: hidden; height:100%;">

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
                            <a class="nav-link btn btn-outline-success  text-dark" style=" border-radius: 20px; padding: 9px 16px; font-size: 15px; font-family:'Anton', sans-serif;"  href="../login.html">
                                Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<?php 
	if(isset($_POST['enviar'])){
		$resp=file_get_contents('https://api.openweathermap.org/data/2.5/weather?APPID=f8eb4211089bc6b869f0d6cd0e720d11&lang=es&lat='.$_POST['lat'].'&lon='.$_POST['lon']);
		$json = json_decode($resp);
		$main=$json->{"main"};
		$tem=$main->{"temp"};
		$tem_min=$main->{"temp_min"};
		$tem_max=$main->{"temp_max"};
		$hum=$main->{"humidity"};
		$pre=$main->{"pressure"};

		$wea=$json->{"weather"};
		$wea0=$wea[0];
		$estado=$wea0->{"main"};
		$des=$wea0->{"description"};
		$icon=$wea0->{"icon"};

		$win=$json->{"wind"};
		$speed=$win->{"speed"};

		$grados=$tem-273.15;
		$grados_min=$tem_min-273.15;
		$grados_max=$tem_max-273.15;
?>

		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
			<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script>
			function localize() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(mapa,error);
				} else {
					alert('Tu navegador no soporta geolocalizacion.');
				}
			}

			function mapa(pos) {
				var latitud = pos.coords.latitude;
				var longitud = pos.coords.longitude;
				var destino ='<?php echo ($_POST["lat"].",".$_POST["lon"]);?>';
				var viajar= '<?php echo $_POST["viajar"];?>';
				var origen = latitud+","+longitud;
				var iframe=document.getElementById('iframe');
				iframe.innerHTML="<iframe height='480' width='800' src='https://www.google.com/maps/embed/v1/directions?key=AIzaSyDllmBKl5g-T7qMSOYqe3_tzNCYOYWndHI&origin="+origen+"&destination="+destino+"&mode="+viajar+"' frameborder='0' style='border:0'  allowfullscreen></iframe>";
			}

			function error(errorCode) {
				if(errorCode.code == 1)
				alert("No has permitido buscar tu localizacion")
				else if (errorCode.code==2)
				alert("Posicion no disponible")
				else
				alert("Ha ocurrido un error")
			}
			</script>
        </head>
        <?php if(isset($_POST['actual'])){
			?>
			<body onload="localize()">
            <?php
        }else{ ?>
            <body>
            <?php
        }
        ?>
			<?php
			if($estado=="Thunderstorm"){
				?>
				<div style="background-color: rgb(187, 247, 187); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Drizzle"){
				?>
				<div style="background-color: rgb(187, 247, 187);); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Snow"){
				?>
				<div style="background-image: url(img/clima/nieve.gif); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Rain"){
				?>
				<div style="background-color: rgb(187, 247, 187);); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Tornado"){
				?>
				<div style="background-color: rgb(187, 247, 187);); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Clear"){
				?>
				<div style="background-color: rgb(187, 247, 187);); background-position: center;" class="fondo-clima">
				<?php
			}else if($estado=="Clouds"){
				?>
				<div style="background-color: rgb(187, 247, 187););" class="fondo-clima">
				<?php
			}else{
				?>
				<div style="background-color: rgb(187, 247, 187);" class="fondo-clima">
				<?php
			} ?>
				<div class="row margen-titulo">
					<div class="col-md-8"  >
					<h1 class="container  text-center" style="margin-top:95px;">Ruta Trazada</h1>
						<h4 class="container" style="font-size:13px; margin-top:40px;" >Google Maps</h4>
							<?php
							if(isset($_POST['actual'])){
							?>
								<div style="margin-left: 25px; margin-top:10px; " id="iframe">
								</div>
							<?php	
							}else{
							?>
							<iframe height="500" width="850" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDllmBKl5g-T7qMSOYqe3_tzNCYOYWndHI&origin=<?php echo $_POST['origen'] ?>&destination=<?php echo ($_POST['lat'].",".$_POST['lon']) ?>&mode=<?php echo $_POST['viajar'] ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
							<?php
							}
							?>
					</div>
					<div class="col-md-4">
						<center>
							<div class="cuadro-clima" style="margin-top:170px;">
								<div class="head-cuadro row">
									<div class="col-md-7">
										<h2>Datos Meteorológicos</h2>
									</div>
									<div class="col-md-4">
										<img src="http://openweathermap.org/img/wn/<?php echo $icon; ?>@2x.png">
									</div>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-7 centro">
											<h2><?php echo $grados;?> °C</h2>
											<table width="90%" class="table table-bordered" style="text-align: center; width: 130px;">
												<thead class="thead-ver" style="font-size: 20px;">
													<tr>
														<th>Temp. Min.</th>
														<th>Temp. Max.</th>
													</tr>
												</thead>										
												<tbody style="font-size: 20px; font-family: fantasy;">
													<tr>
														<td><?php echo $grados_min; ?>°C</td>
														<td><?php echo $grados_max; ?>°C</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-md-4 texto" align="left">
											<h4>Detalles</h4>
											<hr>
											<div>
												<p><b>Humedad: </b><?php echo $hum; ?>%</p>
												<p><b>Presión: </b><?php echo $pre; ?>(hPa)</p>
												<p><b>Descripción: </b><?php echo $des; ?></p>
												<p><b>Nubes: </b><?php echo $speed; ?> km/h</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>	
		</body style="margin-bottom=20px;">
		<?php
	}
?>
</body>
</html>