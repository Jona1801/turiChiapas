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
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="icons.css">
	<link rel="stylesheet" href="style/bootstrap-icons-1.6.1/bootstrap-icons.css">
	<script src="../js/app.js"></script>
	<script src="../js/jquery-1.12.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/popper.min.js"></script>
</head>
<body>
	
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

<div class="fondo" style="background-image: url(../img/banner3.jpg);">
	
	<div>
		<div class="container ">
			<b><h1 class="margen-titulo titulo" >Rutas en Chiapas</h1></b>
		</div>
		<div class="container">
			<form action="../pages/ruta.php" onsubmit="return validar()"  method="POST" id="formulario">
			
				<div class="row" style="margin-top:70px;">
					<div class="col-md-5 ">
						<h3 class="subtitulo separacion4">Origen:</h3>
						<br>
						<h3 class="subtitulo separacion3">Destino:</h3>
						<br>
						<h3 style="margin-left:220px; margin-top:30px;" class="subtitulo separacion1">Forma de viajar:</h3>
					</div>
					<div class="col-md-3">
						<input type="text" name="origen" id="origen" class="form-control" autocomplete="off" style="background: url('../img/origen.jpg') no-repeat right 0.75rem center/25px 25px">
						<div class="separacion1">
							<p class="posicion">Posición Actual</p>
							<input type="checkbox" name="actual" id="actual">
						</div>
						<div class="dropdown separacion2">
							  <button class="custom-select" type="button" id="filtroBoton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
							  	style="text-align: left; ">
								  <span id="selectFiltro">Filtro de busquedas</span>
							 </button>
							  <ul class="dropdown-menu margen-filtro" aria-labelledby="filtroBoton" id="filtro">
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/star.png') no-repeat right 0.75rem center/25px 25px">Más Populares</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/ruina.png') no-repeat right 0.75rem center/25px 25px">Zona Arqueológica</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/lake.png') no-repeat right 0.75rem center/25px 25px">Lagos y Lagunas</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/waterfall.png') no-repeat right 0.75rem center/25px 25px">Cascadas</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/magico.png') no-repeat right 0.75rem center/25px 25px">Pueblos Mágicos</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/river.png') no-repeat right 0.75rem center/25px 25px">Ríos</a>
								  </li>
								  <li>
									  <a href="#" class="dropdown-item" style="background: url('../img/filtro/beach.png') no-repeat right 0.75rem center/25px 25px">Playas</a>
								  </li>
							  </ul>
						  </div>
						<div class="dropdown separacion1" id="dropdownDestino">
							<button class='custom-select' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='visibility: hidden;'></button>
						</div>
						<div class="separacion1">
							<select type="text" class="custom-select" name="viajar" id="viajar" required style="background: url('../img/cocheIcono.jpg') no-repeat right 0.75rem center/25px 25px">
								<option value="driving">Vehículo</option>
								<option value="walking">Caminando</option>
								<option value="bicycling">Bicicleta</option>
							</select>
						</div>
					</div>
				</div>
				<center>
					<input type="submit" name="enviar" class="btn-ruta btn-lg" value="Trazar" title="Trazar">
				</center>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    function validar() {
      if($('#selectFiltro').text() != "Filtro de busquedas"){
        if($('#selected').text()=="Seleccione un destino"){
          alert('No ha seleccionado un destino');
          return false;
        }else if($('#origen').val()=="" && $('#actual').prop('checked')==false ){
          alert('No ha escrito un origen o ha seleccionado la opcion ubicación actual');
          return false;
        }else{
          return true;
        }
      }else{
        alert('No ha seleccionado un filtro de busqueda');
        return false;
      }
    }
  </script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#filtro li a").click(function(){
			$("#selectFiltro").text($(this).text());
			var mostrar=document.getElementById('destino');
			if($(this).text()=="Más Populares"){
				dropdownDestino.innerHTML=
				"<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Seleciona tu destino</span>"+"</button>"+
				"<input type='hidden' name='lat' id='lat' value=''>"+
				"<input type='hidden' name='lon' id='lon' value=''>"+
				"<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+

				"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label>San Cristobal de las Casas</label>"+
							"<p style='display:none'>17.4835828</p>"+
							"<p style='display:none'>-92.0491529</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>San Cristobal de las Casas</h5>"+
									"<img src='../img/populares/sanCris.jpg' width='200'>"+
									"<p>Uno de los mejores pueblos Magicos de Chiapas. Buen clima, buena comida, turs etc.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label>Templo de las Inscripciones</label>"+
							"<p style='display:none'>17.4835828</p>"+
							"<p style='display:none'>-92.0491529</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Templo de las Inscripciones</h5>"+
									"<img src='../img/populares/inscripciones.jpg' width='200'>"+
									"<p>Ocultas en la selva mexicana se encuentran las ruinas de Palenque, la gran ciudad maya.  Conocida por su arquitectura imponente, templos inmensos, arte y tesoros, ha atraído durante siglos a exploradores, saqueadores de tumbas y arqueólogos.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Casca el chiflon</label>"+
							"<p style='display:none'>16.1947272</p>"+
							"<p style='display:none'>-92.2832258</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Cascada el chiflon</h5>"+
									"<img src='../img/populares/chiflon.jpg' width='200'>"+
									"<p>Una de las cascadas más impresionantes de Chiapas por su altura, cuya caída escalonada alcanza alrededor de 120 mts.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Lagunas de Montebello</label>"+
							"<p style='display:none'>16.101634</p>"+
				  			"<p style='display:none'>-91.6770755</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Lagunas de Montebello</h5>"+
									"<img src='../img/populares/montebello.jpg' width='200'>"+
									"<p> Su belleza espectacular se trata, sin duda alguna, de uno de los sitios naturales más hermosos del país, se debe a sus ambientes acuáticos, tanto superficiales como subterráneos, originados por su naturaleza cárstica, enmarcados en tupidos pinares, encinares y bosques mixtos con la llamativa presencia de las bromelias y las orquídeas.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Tonina</label>"+
							"<p style='display:none'>16.900415</p>"+
							"<p style='display:none'>-92.008989</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Tonina</h5>"+
									"<img src='../img/populares/tonina.jpg' width='200'>"+
									"<p>Ciudad prehispánica cuyo significado en tzeltal es “Casa Grande de Piedra”. Es un Espacio sagrado constituido por una montaña artificial de siete plataformas, levantada sobre una colina calcárea que domina un extenso y alargado valle.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Grutas del Mamut</label>"+
							"<p style='display:none'>16.742366</p>"+
							"<p style='display:none'>-92.585753</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Grutas del Mamut</h5>"+
									"<img src='../img/populares/mamut.jpg' width='200'>"+
									"<p>Las impresionantes extensiones de áreas verdes del parque ecoturístico de Grutas del Mamut se prestan para que niños y grandes se diviertan corriendo, descansando o simplemente admirando el increíble paisaje digno de una postal.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Cañon del Sumidero</label>"+
							"<p style='display:none'>16.837026</p>"+
							"<p style='display:none'>-93.076474</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Cañon del Sumidero</h5>"+
									"<img src='../img/populares/sumidero.jpg' width='200'>"+
									"<p>Un estanque formado por la Presa Chicoasén se alimenta del río Grijalva y fluye por el cañón. Los viajes en bote por el cañón parten en la ciudad colonial Chiapa de Corzo.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label style='width: 100%; height: 100%'>Grutas de Rancho Nuevo</label>"+
							"<p style='display:none'>16.670475</p>"+
							"<p style='display:none'>-92.576408</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
									"<h5>Rancho Nuevo</h5>"+
									"<img src='../img/populares/rancho.jpg' width='200'>"+
									"<p>Reserva natural tranquila con bosques, áreas de juego y diversas cuevas con visitas guiadas.</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+

					"<li class='cuadro'>"+
						"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
							"<label>Cascada de Agua Azul</label>"+
							"<p style='display:none'>17.257101</p>"+
							"<p style='display:none'>-92.115224</p>"+
							"<span>"+
								"<div class='cuadro-des' align='center'>"+
								"<h5>Cascada de Agua Azul</h5>"+
								"<img src='../img/cascadas/aguaazul.jpg' width='200'>"+
								"<p>Un grandisoso Rio, formado por albercas naturales color azul añil. Ven y disfruta con tu familia</p>"+
								"</div>"+
							"</span>"+
						"</a>"+
					"</li>"+
				"</ul>";
			}

		  if($(this).text()=="Zona Arqueológica"){
		  dropdownDestino.innerHTML=
		  "<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+
		  "<input type='hidden' name='lat' id='lat' value=''>"+
		  "<input type='hidden' name='lon' id='lon' value=''>"+
			"<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Ruinas de Palenque</label>"+
					"<p style='display:none'>17.4847697</p>"+
					"<p style='display:none'>-92.0458949</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Ruinas de Palenque</h5>"+
							"<img src='../img/ruinas/palenque.jpg' width='200'>"+
								"<p>Ruinas de palenque que se encuentran en palenque chiapas, se caracterizan por sus grandes monumentos..ven y conoce</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
			
				 "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Ruinas de Chincultic</label>"+
					"<p style='display:none'>16.122686</p>"+
					"<p style='display:none'>-91.7823178</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Chincultic</h5>"+
							"<img src='../img/ruinas/chinculti.jpg' width='200'>"+
								"<p>Ubicada cerca de la ciudad de Comitán de Domínguez, Es una zona arqueológica que debes visitar si estás en Chiapas y eres una apasionado de la arqueología.</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
				 "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Ruinas de Tenam-Puente</label>"+
					"<p style='display:none'>16.1412161</p>"+
					"<p style='display:none'>-92.1063307</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Tenam-Puente</h5>"+
							"<img src='../img/ruinas/tenam-puente.jpg' width='200'>"+
								"<p>A un par de minutos de Comitán de Dominguez, Tenam Puente es uno de los sitios ideales escaparte y descubrir un poco más de la historia Chiapas.</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
					  "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Ruinas de izapa</label>"+
					"<p style='display:none'>14.923259</p>"+
					"<p style='display:none'>-92.179989</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Izapa</h5>"+
							"<img src='../img/ruinas/izapa.jpg' width='200'>"+
								"<p>A tan solo 10 kilómetros de la ciudad de Tapachula de Cordova. En este lugar podrás encontrar basamientos de pirámides, algunas esculturas y varios restos en proceso de restauración.</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
				 "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Ruinas de Bonampak</label>"+
					"<p style='display:none'>16.704340</p>"+
					"<p style='display:none'>-91.064726</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Ruinas de Bonampak</h5>"+
							"<img src='../img/ruinas/bonampack.png' width='200'>"+
								"<p>Una de las zonas arqueológicas de Chiapas más populares entre los turistas es Bonampak ¡y no es para menos! este increíble lugar tiene restos de otros tiempos y un par de sorpresas que debes conocer.</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
			  "</ul>";
			}
			if($(this).text()=="Playas"){
			  dropdownDestino.innerHTML=
			  "<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+
			  "<input type='hidden' name='lat' id='lat' value=''>"+
			  "<input type='hidden' name='lon' id='lon' value=''>"+
			  "<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Puerto Arista</label>"+
					  "<p style='display:none'>15.9324479</p>"+
					  "<p style='display:none'>-93.8101661</p>"+
					  "<span>"+
						  "<div class='cuadro-des' align='center'>"+
							  "<h5>Puerto Arista</h5>"+
							  "<img src='../img/playas/arista.jpg' width='200'>"+
							  "<p>Puerto arista chiapas una de la mejores playas de chiapas ven y disfruta en familia</p>"+
						  "</div>"+
						"</span>"+
					  "</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					  "<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Boca del cielo</label>"+
					  "<p style='display:none'>15.8505368</p>"+
					  "<p style='display:none'>-93.6708077</p>"+
					  "<span>"+
						  "<div class='cuadro-des' align='center'>"+
							  "<h5>Boca del cielo</h5>"+
							  "<img src='../img/playas/cielo.jpg' width='200'>"+
							  "<p>Boca del cielo ubicado en Tonalá chiapas, sin duda alguna una playa excelente para los turistas, vive nuevas experiencias al lado del los dos mares... </p>"+
						  "</div>"+
						"</span>"+
					  "</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					  "<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Madre sal</label>"+
					  "<p style='display:none'>15.7991356</p>"+
					  "<p style='display:none'>-93.6017273</p>"+
					  "<span>"+
						  "<div class='cuadro-des' align='center'>"+
							  "<h5>Madre sal</h5>"+
							  "<img src='../img/playas/madresal.jpg' width='200'>"+
							  "<p>Madre sal un lugar para experimentar cosas nuevas..conoce esta hermosa playa ubicada en Tonalá chiapas</p>"+
						  "</div>"+
						"</span>"+
					  "</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Playa Palmarsito</label>"+
					  "<p style='display:none'>15.491571</p>"+
					  "<p style='display:none'>-93.214038</p>"+
					  "<span>"+
						"<div class='cuadro-des' align='center'>"+
						   "<h5>Palmarsito</h5>"+
							"<img src='../img/playas/palmarsito.jpg' width='200'>"+
							"<p>Palmarsito es una playa ubica en Pijijiapan chiapas.. una de las mejores playas para disfrutar en familia</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Playa del Sol</label>"+
					  "<p style='display:none'>15.9179347</p>"+
					  "<p style='display:none'>-93.7849889</p>"+
					  "<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Playa del Sol</h5>"+
							"<img src='../img/playas/sol.jpg' width='200'>"+
							"<p>Playa del sol ubica den Tonala chiapas... si buscas pasar un día relajado, acostado en una hamaca y con una vista espectacular del mar, entonces este es el lugar indicado. </p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Puerto Madero</label>"+
					  "<p style='display:none'>14.7178674</p>"+
					  "<p style='display:none'>-92.424714</p>"+
					  "<span>"+
						"<div class='cuadro-des' align='center'>"+
						  "<h5>Puerto Madero</h5>"+
						  "<img src='../img/playas/madero.jpg' width='200'>"+
						  "<p>Puerto Madero es una de las playas mexicanas donde convergen lo místico, lo exótico y lo natural. Ubicada a 40 minutos de Tapachula Chiapas </p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				  "</li>"+
				  "<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					  "<label>Bahía Santa Brígida</label>"+
					  "<p style='display:none'>16.1440292</p>"+
					  "<p style='display:none'>-94.1026804</p>"+
					  "<span>"+
						"<div class='cuadro-des' align='center'>"+
						  "<h5>Santa Brígida</h5>"+
						  "<img src='../img/playas/brigida.jpg' width='200'>"+
						  "<p>Perfecto para el esquí acuático, los paseos en lancha, el velerismo y la pesca deportiva. Si te animas a visitar la Bahía, podrás encontrar varios hoteles y restaurantes. Ubicada en Arriaga Chiapas</p>"+
						  "</div>"+
						"</span>"+
					  "</a>"+
				  "</li>"+
			  "</ul>";
			}
			if($(this).text()=="Pueblos Mágicos"){
			  dropdownDestino.innerHTML=
			  "<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+
			  "<input type='hidden' name='lat' id='lat' value=''>"+
			  "<input type='hidden' name='lon' id='lon' value=''>"+
			  "<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
				"<li class='cuadro'>"+
				  "<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>San Cristobal de las Casas</label>"+
				  "<p style='display:none'>16.7313638</p>"+
				  "<p style='display:none'>-92.6774193</p>"+
				  "<span>"+
					  "<div class='cuadro-des' align='center'>"+
						  	"<h5>San Cristobal de las Casas</h5>"+
						  	"<img src='../img/pueblos/sancris.jpg' width='200'>"+
							"<p>San Cristobal un pueblo magico que esconde grandes cosas..ven y descubre sancris..descubre Chiapas</p>"+
					  "</div>"+
					"</span>"+
				  "</a>"+
				"</li>"+
				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Comitán de Domínguez</label>"+
					"<p style='display:none'>16.2327166</p>"+
					"<p style='display:none'>-92.1653784</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Comitán de Domínguez</h5>"+
							"<img src='../img/pueblos/comitan.jpg' width='200'>"+
								"<p>Comitan un pueblo magico que sin duda alguna es una de las mejores ciudades para visitar en chiapas</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label>Chiapas de Corzo</label>"+
					"<p style='display:none'>16.7258086</p>"+
					"<p style='display:none'>-93.0529714</p>"+
					"<span>"+
						"<div class='cuadro-des' align='center'>"+
							"<h5>Chiapas de Corzo</h5>"+
							"<img src='../img/pueblos/corzo.jpg' width='200'>"+
								"<p>Ven y disfruta de Chiapa de Corzo... pueblo magico con grandes experiencias que te esperan.</p>"+
						"</div>"+
					  "</span>"+
					"</a>"+
				"</li>"+
			  "</ul>";
			}
			if($(this).text()=="Lagos y Lagunas"){
			dropdownDestino.innerHTML=
			"<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+   
			"<input type='hidden' name='lat' id='lat' value=''>"+
			"<input type='hidden' name='lon' id='lon' value=''>"+
			"<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Laguna de Pojoj</label>"+
				  "<p style='display:none'>16.1056331</p>"+
					"<p style='display:none'>-91.6688061</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Laguna de Pojoj</h5>"+
					  "<img src='../img/lagos/pojoj.jpg' width='200'>"+
					  "<p>Un grandisoso lago para poder disfrutar</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Lagos de Colon</label>"+
				  "<p style='display:none'>15.826700</p>"+
				  "<p style='display:none'>-91.896177</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Lagos de Colon</h5>"+
					  "<img src='../img/lagos/colon.jpg' width='200'>"+
					  "<p>Maravilloso lago para poder disfrutar con la familia</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Lagunas de Montebello</label>"+
				  "<p style='display:none'>16.101634</p>"+
				  "<p style='display:none'>-91.6770755</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Lagunas de Montebello</h5>"+
					  "<img src='../img/lagos/montebello.jpg' width='200'>"+
					  "<p>Disfruta de las majestuosas aguas de la selva</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Laguna Miramar</label>"+
				  "<p style='display:none'>16.4032997</p>"+
				  "<p style='display:none'>-91.3023846</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Laguna Miramar</h5>"+
					  "<img src='../img/lagos/miramar.jpg' width='200'>"+
					  "<p>Viajar, adonde lagunas de Miramar es una opcion</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Lago de Pozuelos</label>"+
				  "<p style='display:none'>16.108336</p>"+
				  "<p style='display:none'>-91.697521</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Lago de Pozuelos</h5>"+
					  "<img src='../img/lagos/pozuelos.jpg' width='200'>"+
					  "<p>Visitanos </p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Laguna de Metzabok</label>"+
				  "<p style='display:none'>17.1136817</p>"+
				  "<p style='display:none'>-91.6266039</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Laguna de Metzabok</h5>"+
					  "<img src='../img/lagos/metzabok.jpg' width='200'>"+
					  "<p>Disfruta, adonde lagunas de metzabok es una opcion</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Lago de Guinea</label>"+
				  "<p style='display:none'>17.0325387</p>"+
				  "<p style='display:none'>-91.5177322</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Lago de Guinea</h5>"+
					  "<img src='../img/lagos/guinea.jpg' width='200'>"+
					  "<p>Un lugar en el cual te enamoraras</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Lago la joya</label>"+
				  "<p style='display:none'>15.9420432</p>"+
				  "<p style='display:none'>-93.73645</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Lago la joya</h5>"+
					  "<img src='../img/lagos/joya.jpg' width='200'>"+
					  "<p>Pasa un el rato en nuestro lago</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			"</ul>";
		  }
		  if($(this).text()=="Cascadas"){
			dropdownDestino.innerHTML=
			"<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+
			"<input type='hidden' name='lat' id='lat' value=''>"+
			"<input type='hidden' name='lon' id='lon' value=''>"+
			"<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Cascada de Agua Azul</label>"+
				  "<p style='display:none'>17.257101</p>"+
				  "<p style='display:none'>-92.115224</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Cascada de Agua Azul</h5>"+
					  "<img src='../img/cascadas/aguaazul.jpg' width='200'>"+
					  "<p>Un grandisoso Rio, formado por albercas naturales color azul añil. Ven y disfruta con tu familia</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Cascada el Corralito</label>"+
				  "<p style='display:none'>16.194727</p>"+
				  "<p style='display:none'>-92.265722</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Cascada el Corralito</h5>"+
					  "<img src='../img/cascadas/corralito.jpg' width='200'>"+
					  "<p>Clima semitemplado, consistente en un conjunto de pequeñas albercas naturales bajo la sombra de abundantes arboles.Aprovecha al maximo este lugar con tu pareja</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			  "</li>"+
				"</li>"+
			  "<li class='cuadro'>"+
				"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
				  "<label>Cascada el Chiflon</label>"+
				  "<p style='display:none'>16.194728</p>"+
				  "<p style='display:none'>-92.265722</p>"+
				  "<span>"+
					"<div class='cuadro-des' align='center'>"+
					  "<h5>Cascada el Chiflon</h5>"+
					  "<img src='../img/cascadas/chiflon.jpg' width='200'>"+
					  "<p>Centro ecosturistico con albercas naturales de intenso color azul, donde se originan otras cascadas: El suspiro, Velo de Novia, Velo de Angel etc. No te quedes sin conocerlas!!!</p>"+
					"</div>"+
				  "</span>"+
				"</a>"+
			"</ul>";
		  }

		  if($(this).text()=="Ríos"){
			dropdownDestino.innerHTML=
			"<button class='custom-select sombrear' type='button' id='MenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='text-align: left; background: url(../img/destination.png) no-repeat right 0.75rem center/25px 25px'>"+"<span id='selected'>Selecione un destino</span>"+"</button>"+
			"<input type='hidden' name='lat' id='lat' value=''>"+
			"<input type='hidden' name='lon' id='lon' value=''>"+
			"<ul class='dropdown-menu' aria-labelledby='MenuButton' id='destino'>"+
				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
						"<label style='width: 100%; height: 100%'>Rio Grijalva</label>"+
						"<p style='display:none'>16.5528536</p>"+
				  		"<p style='display:none'>-92.8192946</p>"+
						"<span>"+
							"<div class='cuadro-des' align='center'>"+
								"<h5>Rio Grijalva</h5>"+
								"<img src='../img/rios/grijalva.jpg' width='200'>"+
								"<p>El río Grijalva es una corriente fluvial que nace en las montañas de los Cuchumatames en Guatemala y desemboca en el Golfo de México.Corre por el sudeste de México y está considerado el segundo de mayor caudal y el mayor productor de energía eléctrica.</p>"+
							"</div>"+
						"</span>"+
					"</a>"+
				"</li>"+

				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
						"<label style='width: 100%; height: 100%'>Rio Usumacinta</label>"+
						"<p style='display:none'>17.5686916</p>"+
				  		"<p style='display:none'>-91.5130753</p>"+
						"<span>"+
							"<div class='cuadro-des' align='center'>"+
								"<h5>Rio Usumacinta</h5>"+
								"<img src='../img/rios/usu.jpg' width='200'>"+
								"<p>El río Usumacinta cuyo nombre se traduce como \"lugar de monitos\", es un río que se forma en las partes altas de la Sierra Madre, específicamente en el Departamento de Totonicapán, en Guatemala, y desemboca en el golfo de México. Su longitud es de 1123 km y es el río más caudaloso de México y Centroamérica, también es el río más largo de Centroamérica,1? con una descarga de aproximadamente 5250 m³/seg.</p>"+
							"</div>"+
						"</span>"+
					"</a>"+
				"</li>"+

				"<li class='cuadro'>"+
					"<a class='dropdown-item dis' href='#' onclick='mostrar(this)'>"+
					"<label style='width: 100%; height: 100%'>Rio Jatate</label>"+
					"<p style='display:none'>16.871814</p>"+
				  	"<p style='display:none'>-92.038412</p>"+
						"<span>"+
							"<div class='cuadro-des' align='center'>"+
								"<h5>Rio Jatate</h5>"+
								"<img src='../img/rios/jatate.jpg' width='200'>"+
								"<p>Río Jataté se localiza en el Municipio Ocosingo del Estado de Chiapas México Localizado en una altura de 333 metros, RÍO JATATÉ brinda hogar para 56 habitantes de cuales 27 son hombres o niños y 29 mujeres o niñas.</p>"+
							"</div>"+
						"</span>"+
					"</a>"+
				"</li>"+
			"</ul>"
		  }
		});
	});
	</script>
	<script type="text/javascript">
	function mostrar(id){
		var texto=id.getElementsByTagName("label");
		var lati=id.getElementsByTagName("p")[0];
		var long=id.getElementsByTagName("p")[1];
		$("#selected").text($(texto).text());
		$("#lat").val($(lati).text());
		$("#lon").val($(long).text());
	}
		
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	
</body>
</html>