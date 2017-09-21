<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
   <?php
			
      include("php/DatosCursos.php");
      
      
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Señitas</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Señitas</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="index.html" data-toggle="dropdown">Inicio</a>
                <ul class="dropdown-menu">
                  
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="Quienes%20Somos.html" data-toggle="dropdown">¿Quiénes somos?</a>
                <ul class="dropdown-menu">
                  
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="Cursos.php" data-toggle="dropdown">Cursos</a>
                <ul class="dropdown-menu">
                  
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="asociados.html" data-toggle="dropdown">Asociados</a>
                <ul class="dropdown-menu" role="menu">
                  
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="blog.html" data-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu" role="menu">
                  
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="Noticias.html" data-toggle="dropdown">Noticias</a>
                <ul class="dropdown-menu" role="menu">
                  
                </ul>
              </li>
              
              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
              <li class="dropdown"><a class="dropdown-toggle" href="login-Aprendiz.php" data-toggle="dropdown">Ingresar</a>
                <ul class="dropdown-menu">
                  
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-60 blog-page-header" data-background="assets/images/fondo-Cursos.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Cursos</h2>
                <div class="module-subtitle font-serif">Aquí podrá ver nuestros cursos, su duración y la puntuación de los ususarios.</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-3 sidebar">
               
                
                <div class="widget">
                  <h5 class="widget-title font-alt">Noticias Populares</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia1.jpg"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">PERSONAS SORDAS EN LA CONSTRUCCIÓN DE LA PAZ</a></div>
                        <div class="widget-posts-meta">26 de julio</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/post-4.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">MÁS DE 100 ENTIDADES PÚBLICAS COMPROMETIDAS CON LA ATENCIÓN A LA POBLACIÓN SORDA</a></div>
                        <div class="widget-posts-meta">26 de julio</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia3.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">EL INSOR CELEBRÓ LA INCLUSIÓN DE LA LENGUA DE SEÑAS COLOMBIANA COMO LENGUA NATIVA</a></div>
                        <div class="widget-posts-meta">26 de julio</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia4.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">UNIVERSIDAD SERGIO ARBOLEDA OFRECE PRIMEROS POSGRADOS PARA SORDOS</a></div>
                        <div class="widget-posts-meta">26 de julio</div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <div class="widget">
                  <h5 class="widget-title font-alt">fRASE DEL dIA</h5>“El silencio es el ruido más fuerte, quizá el más fuerte de todos los ruidos.”  (Miles D. Davis)
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">uLTIMOS cOMENTARIOS</h5>
                  <ul class="icon-list">
                    <li>Maria <a href="#">Es una buena plataforma en la que puedo interactuar con mis estudiantes</a></li>
                    <li>John on <a href="#">Me encanta el diseño de la pagina ademas es muy completa; Increible!!</a></li>
                    <li>Andy on <a href="#">Me encanta el diseño de la pagina ademas es muy completa; Increible!!</a></li>
                    </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-1">
                
                
                <?php 
                $Cursos = obtenerCursos();
                if (count($Cursos) == 0) {
                  echo "No hay cursos disponibles.";
                }
                foreach ($Cursos as $registro) {
                  echo "<li><a href='nivel1.php?id=" . $registro["idCursos"] . "'>" . $registro['Nombre'] . "</a></li>";
                }
                ?>
                
                
               
               
                
                
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Señitas</h5>
                  <p>"Me gusta la manifestación artística de las personas sordas, podemos ver diferentes ideas, maneras de expresarse. En la lengua de signos, también existe la poesía y sin dudas es una forma de difundir nuestra cultura para que las personas oyentes también puedan comprender los sentimientos de las personas sordas"   -Miguel Ángel Sampedro</p>
                  <p>Telefono: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">Señitas@gmail.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Comentarios Recientes</h5>
                  <ul class="icon-list">
                    <li>Maria  <a href="#">Es una buena plataforma en la que puedo interactuar con mis estudiantes</a></li>
                    <li>John  <a href="#">Me encanta el diseño de la pagina ademas es muy completa; Increible!!</a></li>
                    <li>Andy <a href="#">Excelente aplicacion ademas de el servicio de sus funcionarios; muy respetuosos y rapidos a la hora de contestar.</a></li>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Categorias del Blog</h5>
                  <ul class="icon-list">
                    <li><a href="#">GALERIA - 7</a></li>
                    <li><a href="#">Diseño WEB - 3</a></li>
                    <li><a href="#">Ilustraciones - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Proyectos - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Noticias populares</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia1.jpg" alt="Blog-post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">Aunque en los últimos años la población sorda ha logrado importantes avances en temas de inclusión, la deuda histórica que el Estado y la sociedad en su conjunto tienen con esta comunidad sigue siendo grande. Gran parte de la población sorda se siente al margen de los procesos políticos y de los debates que se llevan a cabo en la esfera pública, y de los que, como ciudadanos, deberían participar.</a></div>
                        <div class="widget-posts-meta">26 de mayo de 2017</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia4.jpg" alt="Blog-post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">La Universidad Sergio Arboleda de Bogotá ofrecerá los primeros posgrados en Colombia dirigidos para personas con discapacidad auditiva, según informó la institución educativa. Los tres primeros posgrados han sido desarrollados en colaboración con el Instituto Nacional para Sordos (Insor) y todos ellos podrán estudiarse en la Escuela de Educación.. .</a></div>
                        <div class="widget-posts-meta">26 de mayo de 2017.

</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">Señitas</a>, Todos los Derechos Reservados</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>