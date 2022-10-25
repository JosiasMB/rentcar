<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>RentCar</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>


<body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html"> Inicio </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Acerca</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contactenos</a>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="login.html">Iniciar Seccion</a></div>
                           <div class="sign_btn"><a href="registrarse.php">Registrarse</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h1>Encuentre el Mejor Suto Aquí Para Alquilar</h1>
                     <strong>Los Mejores Carros </strong>
                     <span>Al Mejor Precio del Mercado!!!!</span>
                     <p>
                     ¿Piensas en el alquiler de carros para tu próximo viaje? En Despegar contamos con muy buenas ofertas de alquiler de autos para tu destino favorito. Puedes seleccionar el carro que más se ajuste a tus necesidades dentro de toda nuestra categoría de vehículos. Además puedes elegir donde retirar y devolver el auto, ya sea en la ciudad o en el aeropuerto de ese destino. Si ya tienes definido el lugar para pasar tus vacaciones y recorrer los principales puntos turísticos, no dudes en consultar nuestro alquiler de carros económico para nuestra amplia variedad de compañías. Alquila tu auto ahora y comienza a disfrutar de tus vacaciones con Despegar!
                        <head></head>
                     </p>
                     <a href="#">Leer Mas.</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Variedad de Carros </h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img1.png" alt="#"/></figure>
                     <h3>Hundai</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img2.png" alt="#"/></figure>
                     <h3>Audi</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img3.png" alt="#"/></figure>
                     <h3>Bmw x5</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end car -->
      <!-- bestCar -->
      <div id="contact" class="bestCar">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                        <form class="main_form">
                           <div class="titlepage">
                              <h2>Encuentra El Mejor Carro Para Rentar</h2>
                           </div>
                           <div class="row">
                              <div class="col-md-12 ">
                                 <select>
                                    <option value="0">Elija La Marca</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                 <select>
                                    <option value="0">Elija El Tipo de Carro </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Search" type="Search" name="Search">                          
                              </div>
                              <div class="col-md-12">
                                 <select>
                                    <option value="0">Precio de Carros</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <button class="find_btn">Encontrar ahora</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Porque Nosotros?</h2>
                     <span>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando<br> mirando su diseño. El punto de usar </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->
      <!-- cutomer -->
      <div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Que dicen nuestros clientes</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="images/cross_img.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Due markes</h4>
                                       <span>RentCar</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="images/cross_img.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Due markes</h4>
                                       <span>Rental</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="images/cross_img.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Due markes</h4>
                                       <span>Rental</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cutomer -->
<br>
<br>
      <h2 class="titlepage" ><a href=" /ayuda" rel="nofollow"> <span>Alquila un auto y recorre mucho más en tu viaje </span></a></h2>

<h3 class="eva-3-h4 home-ui-seo-card-title"><a href=" /ayuda" rel="nofollow">Beneficios de alquilar un auto</a></h3>
<p class="home-ui-seo-card-text"><a href=" /ayuda" rel="nofollow">Siente la libertad que te da conocer una ciudad al estar detrás del volante. Con tu rent a car puedes tomar las riendas de tu tiempo y armar tu propio itinerario para recorrer y conocer todo lo que quieras. Puedes elegir alquiler de autos pequeños, para pocas personas, o grandes, si vas con amigos o con tu familia. ¡Disfruta tu destino a tu ritmo y aprovecha para conocer mucho más en tu viaje! No te arrepentirás de alquilar un auto.</a></p>

<h3 class="eva-3-h4 home-ui-seo-card-title"><a href=" /ayuda" rel="nofollow">¿Qué tener en cuenta para alquilar un auto?</a></h3>
<p class="home-ui-seo-card-text"><a href=" /ayuda" rel="nofollow">Antes de alquilar un auto, ten en cuenta el número de pasajeros que serán en el viaje. Esto te ayudará a decidir el tamaño del auto. Además, presta atención a los seguros que están incluidos en el contrato de alquiler, así como los beneficios de kilometraje ilimitado, tipo de caja y modalidad de entrega del vehículo. También te servirá mirar la puntuación de la compañía de rent a car.</a></p>

<h3 class="eva-3-h4 home-ui-seo-card-title"><a href=" /ayuda" rel="nofollow">¿Qué necesitas para retirar tu auto?</a></h3>
<p class="home-ui-seo-card-text"><a href=" /ayuda" rel="nofollow">Para retirar tu auto necesitarás contar con una licencia de conducir en buen estado y vigente, y presentar tu documento/pasaporte. Ten en cuenta que el nombre de la persona debe ser el mismo tanto en la licencia de conducir como en el documento/pasaporte. Además, necesitarás tener una tarjeta de crédito a nombre del conductor principal o adicional con saldo suficiente para el bloqueo de seguridad que realiza la agencia de alquiler de autos.</a></p>


<h3 class="eva-3-h4 home-ui-seo-card-title"><a href=" /ayuda" rel="nofollow">¿Cuáles son las formas de entrega del auto?</a></h3>
<p class="home-ui-seo-card-text"><a href=" /ayuda" rel="nofollow">Hay 4 modalidades para la entrega de tu auto: 1) la compañía de alquiler de autos hace la entrega del vehículo en el aeropuerto; 2) meet &amp; greet: personal de la agencia de rent a car te espera en el aeropuerto para entregarte el auto; 3) servicio de shuttle: la empresa te ofrece un traslado hasta el local para retirar el vehículo; y 4) confirmación telefónica: al llegar al aeropuerto tienes que comunicarte por teléfono con la agencia para coordinar la entrega del auto.</a></p>





      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang"> LLamenos</strong><br>
                           (+1) 8095554444
                        </h3>
                     </div>
                     <div class="cont">
                        <h3> <strong class="multi"> UASD COMPANY </strong> 
                           En El Mercado Desde 2022
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- end footer -->













      <div id="icon_wrapper"><a target="_blank" class="fuse_social_icons_links" data-nonce="a247661377" data-title="facebook" href="https://www.facebook.com/MESCYT/">	<i class="fa fa-facebook facebook-awesome-social awesome-social"></i></a>
      <a target="_blank" class="fuse_social_icons_links" data-nonce="a247661377" data-title="twitter" href="https://twitter.com/MESCYTRD">	<i class="fa fa-twitter twitter-awesome-social awesome-social"></i></a><a target="_blank" class="fuse_social_icons_links" data-nonce="a247661377" data-title="instagram" href="https://www.instagram.com/mescytrd/?hl=es-la">	<i class="fa fa-instagram instagram-awesome-social awesome-social"></i></a>	


<!-- Dynamic page generated in 3.853 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-10-21 14:40:36 -->

<!-- Compression = gzip --></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
    

</html>