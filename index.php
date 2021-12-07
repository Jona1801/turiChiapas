<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <title>turiChiapas</title>
    <link rel="icon" type="image/png"  href="img/logos/icono.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
      
  </head>     
  <body style=" overflow-x: hidden; text-align: center;">
        <!--BARRA DE NAVEGACIÒN-->
        <?php
           include("./inc/header.php");
        ?> 
      
     
        <!-- Carrusel de Imagenes -->

        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel" style="margin-top: 64px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"  aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"  aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active " data-interval= "6000">
                <img src="img/home/aguaAzul.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-done d-md-block animate__animated animate__bounce" >
                    <h5 style=" font-size: 45px; font-weight: bold;  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                              background-image: url('img/home/letraA.jpg'); background-attachment: fixed; display: inline-block;  ">
                      Cascadas de Agua Azul
                    </h5>
                    <p style="margin-left: 20px; font-weight:bold; color:#ddcb2c;">El lugar de tu vida</p>
                    
                    <p><a  href="https://visitachiapas.com/cascadas-de-agua-azul/">Mas info</a></p>
                </div>
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="img/home/palenque-1.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-done d-md-block animate__animated animate__wobble">
                    <h5 style=" font-size: 47px; font-weight: bold;  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                    background-image: url('img/home/letrapal.jpg'); background-attachment: fixed; display: inline-block;  "> Palenque    Chiapas
                    </h5>
                    <p style="font-weight: bold; font-size: 22px;  color: #3bdb26;"> Ruinas </p>
                    <p><a href="https://www.chiapas.gob.mx/pueblos-magicos/palenque/">Mas info</a></p>
                </div>
              </div>
              <div class="carousel-item" data-interval="1500">
                <img src="img/home/nubes.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-done d-md-block animate__animated animate__swing">
                    <h5 style=" font-size: 48px; font-weight: bold;  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                    background-image: url('img/home/letraNube.jpg'); background-attachment: fixed; display: inline-block;  " >"Las   Nubes"</h5>
                    <p style="font-weight: bold; font-size: 22px;"> Lugar para soñar</p>
                    
                    <p><a href="https://www.sinpostal.com/lasnubes/">Mas info</a></p>
                </div>
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="img/home/corzo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-done d-md-block animate__animated animate__rubberBand" >
                    <h5 style=" font-size: 46px; font-weight: bold;  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                    background-image: url('img/home/letraCorzo.jpg'); background-attachment: fixed; display: inline-block;  ">Chiapas  de  Corzo</h5>
                    <p style="font-size: 20px; font-weight: bold; color: #fff;" >Los mejores Pueblos Magicos</p>
                    <p><a href="https://www.turimexico.com/pueblos-magicos/pueblo-magico-chiapa-de-corzo-chiapas/">Mas info</a></p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- Menu de botones -->
          
          <div class="container">
            <h2 class="text-center animate__animated animate__zoomIn " style="margin-top:70px;">
              VIVE LA MEJOR EXPERIENCIA TURISTICA EN CHIAPAS
            </h2>
          </div>

          <section class="botones" >
            <div>
              <a class=" btn btn-outline-success text-dark" href="pages/lugares.html" style="border-radius: 15px; font-family:fantasy; padding: 18px 30px;">
                <span class="icon icon-home2" style="font-size: 25px; margin-right: 13px;"></span>lugares
              </a>
              <a class=" btn btn-outline-success text-dark" href="pages/tours.html"  style="border-radius: 15px; font-family:fantasy; padding: 18px 30px;">
                <span class="icon icon-truck" style="font-size: 25px; margin-right: 13px;"></span>Viajes o Turs
              </a>
              <a class=" btn btn-outline-success text-dark" href="pages/hoteles.html" style="border-radius: 15px; font-family:fantasy; padding: 18px 30px;">
                <span class="icon icon-office" style="font-size: 25px; margin-right: 13px;"></span>Hoteles
              </a>
              
              <a class=" btn btn-outline-success text-dark" href="pages/restaurantes.html"  style="border-radius: 15px; font-family:fantasy; padding: 18px 35px;">
                <span class="icon icon-mug" style="font-size: 25px; margin-right: 13px;"></span>Restaurantes
              </a>
            </div>
          </section>

          <!--Video -->
        
          <div class="contenedor-video">
            <iframe  src="https://www.youtube.com/embed/R05qbD_iNE0?autoplay=1&muted=1"
              title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
              scrolling="yes" >

            </iframe>
          </div>


         <!--Ofertas Turisticas --> 

          <section class="extends_part section_padding">
            <div class="container-fluid">
                <div class="row letra">
                    <div class="col-lg-6">
                        <div>
                            <img src="img/home/montebello.jpg" style="margin-top:30px; width:100%; max-width:750px; border-radius:12px;">
                        </div>
                    </div>
                    <div class="col-lg-6 " >
                        <div class="extends_member_text">
                            <h4 style="font-size:40px;" >Conoce las extensas ofertas turísticas que tenemos para tí:</h4>
                            <hr>
                            <p style="margin-left: 10px;">- Zonas Arqueológicas.</p>
                            <p style="margin-left: 10px;">- Pueblos Mágicos.</p>
                            <p style="margin-left: 10px;">- Cascadas.</p>
                            <p style="margin-left: 10px;">- Lagos.</p>
                            <p style="margin-left: 10px;">- Las mejores Playas.</p>
                            <p style="margin-left: 10px;">- Ríos.</p>
                            <p style="margin-left: 10px;">- Turs a lugares exoticos, con diversidad de flora y fauna.</p>
                            <p style="margin-left: 10px;">- Comidas Tradicionales, Hoteles y mucho mas....</p>
                        </div>
                          <div style="align-items: center; justify-content: center; display: flex; margin-top:20px;">
                              <div >
                                <a class="turs" href="pages/tours.html">Buscar Turs</a>
                                <a class="hotel" href="pages/hoteles.html">Buscar Hoteles</a>
                                <a class="comida" href="pages/restaurantes.html">Buscar Restaurantes</a>
                              </div>
                            </div>
                    </div>
                    
                </div>
            </div>
         </section>
        
      
          <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-md-6 col-xl-8">
                      <div class="section_tittle">
                          <h4 style="font-size:40px; margin-top:25px;">Ven y conoce los mejores hoteles, restaurantes y playas. </h4>
                          <span>Disfruta al maximo  en familia....No te arrepentiras!!!</span>
                      </div>
                  </div>
              </div>
          </div>
          
         <!--Inicio de los Cards-->
         <section class="hover-tc">
            <div class="wrapper">
              <div class="card-tc">
                <img src="img/card/palenque.jpg" alt="">
                <div class="info">
                  <h1>Ruinas Prehistoricas</h1>
                  <p>Xhembobel-Moyos, nombre de un pueblo inmediato, fue en una época también usado para designar las ruinas de Palenque.</p>
                    <a href="./pages/lugares.html" class="btn-tc">Ir</a>
                </div>
              </div>

              <div class="card-tc">
                <img src="img/card/hotel3.jpg" alt="">
                <div class="info">
                  <h1> Hoteles</h1>
                  <p> Boutique Quinta Chanabnal. Vivirás la sensación de encontrarte en un Templo Ceremonial Maya, rodeado de vegetación tropical
                     con albercas de agua tan cristalina que creerás estar nadando en un cenote. </p>
                    <a href="./pages/hoteles.html" class="btn-tc">Ir</a>
                </div>
              </div>

              <div class="card-tc">
                <img src="img/card/restaurante2.jpg" alt="">
                <div class="info">
                  <h1>Restaurantes</h1>
                  <p>El PUMPU, Tuxtla Gutierrez. Con shows de bailes típicos del Estado de Chiapas. Y tambien sirven un trago típico llamado
                     "Pumpo" a base de jugo de piña y vodka servido en tecomate (calabaza).</p>
                    <a href="./pages/restaurantes.html" class="btn-tc">Ir</a>
                </div>
              </div>

              <div class="card-tc">
                <img src="img/card/playa2.jpg" alt="">
                <div class="info">
                  <h1>Playas</h1>
                  <p>PUERTO ARISTA. Tiene una impresionante vista al Océano Pacífico. Si tu pasión es practicar surf, las olas son perfectas. 
                    Ubicado cerca del estado de Oaxaca.</p>
                    <a href="./pages/formulario.php" class="btn-tc">Ir</a>
                </div>
              </div>
            </div>
      </section>
        <!--*_*_*_*_*_*_*_*_*_*_*Fin del Card*_*_*_*_*_*_*_*_*_*_*_*_*-->


        <!-- FOOTER-->
        <?php
           include("./inc/footer.php");
        ?> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>