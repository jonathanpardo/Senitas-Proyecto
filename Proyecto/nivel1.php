<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
   <?php
			
      include("php/DatosCursos.php");
      
      
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Señitas |</title>
    
    
    <!-- Jquery del Leer mas y estilo  -->
    
    <script src="js-leer-mas/jquery-1.9.1.js"></script>
    <script src="js-leer-mas/leer-mas.js"></script>
    <link rel="stylesheet" href="css-Leer-mas/estilos-Leer-mas.css">
    
    <!--- -->    
    <!--  
    Favicons
    =============================================
    -->
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
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
              <li class="dropdown"><a class="dropdown-toggle" href="Cursos.html" data-toggle="dropdown">Cursos</a>
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
        <section class="module-small">
          <div class="container">
           
           

            <div class="row">
              <div class="col-sm-8">
                <div class="post">
                  
                  <div class="row">
             
             <h1>Curso:</h1>
            <div class="col-sm-8 col-sm-offset-1">
                <div class="post">
                  <div class="post-thumbnail"><a href="#"><img src="ImagenesCursos/<?php echo obtenerDatosCursos($_GET['id'],'Nombre') ?>.jpg" alt="Imagen del curso"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#"><?php echo ucfirst(obtenerDatosCursos($_GET["id"],"Nombre")); ?></a></h2>
                    
                

                    </div>
                    <div class="post-entry">
                   
                   <article id="contenido">
			<p>
				<?php
          $Descripcion = obtenerDatosCursos($_GET["id"],"Descripcion");
          $texto = explode(".", $Descripcion);
          echo $texto[0] . "...";

        ?>
			</p>
			<p id="oculto">
          <?php
          for ($i=1; $i<count($texto); $i++) { 
            echo $texto[$i] . "<br>";            
          }
          ?>
        <a class="btn btn-danger btn-circle" href="login-Aprendiz.php">Registrarse</a>

				<br><br>
				<br>
				<a href="#" id="ocultar">Regresar</a>
			</p>

			<a href="#" id="mostrar">Leer Más...</a><br>
		     </article>
             </div>
             </div>
              
            </div>
          </div>
                  
                  
                  
                  
                  
                  
                  
            </div>
                <div class="comments">
                  <h4 class="comment-title font-alt">Hay 3 comentarios
</h4>
                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanbattles/128.jpg" alt="avatar"/></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">John </a></div>
                      <div class="comment-body">
                        <p>Es fabulosos que esta página exista y supe que también la manejan para niños porque mi hermana se la presentaron en un curso. Ya empecé el curso para aprender y practicar después con mis compañeros de la universidad; siempre he querido aprender pero nunca me llamo la atención hacerlo por mis propios medios, me parece aburrido y no se consigue mucha información en la web. </p>
                      </div>
                      <div class="comment-meta font-alt">hoy, 14:55 - <a href="#">Responder</a>
                      </div>
                    </div>
                    <div class="comment clearfix">
                      <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/draganbabic/128.jpg" alt="avatar"/></div>
                      <div class="comment-content clearfix">
                        <div class="comment-author font-alt"><a href="#">Ivan Andres</a></div>
                        <div class="comment-body">
                          <p>Mil gracias por compartirnos tu experiencia. Nos motiva a seguir mejorando.</p>
                        </div>
                        <div class="comment-meta font-alt">hoy, 15:34 - <a href="#">Responder</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/pixeliris/128.jpg" alt="avatar"/></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">Anguie Rodriguez</a></div>
                      <div class="comment-body">
                        <p>Lo maximo! <p>Actualmente estudio lenguaje de señas, pero requiere de mucha práctica y a veces es difícil contar con el tiempo suficiente para hacerlo.Estos cursos me ayudan a practicar aun cuando no estoy en casa!:) gracias por tan buena herramienta!</p></p>
                      </div>
                      <div class="comment-meta font-alt">hoy, 14:59 - <a href="#">Responder</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <h4 class="comment-form-title font-alt">Añada un comentario</h4>
                  <form method="post">
                    <div class="form-group">
                      <label class="sr-only" for="name">Nombre</label>
                      <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"/>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">E-Mail</label>
                      <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comentario"></textarea>
                    </div>
                    <button class="btn btn-round btn-d" type="submit">Enviar Comentario</button>
                  </form>
                </div>
              </div>
              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                
                <div class="widget">
                  <h5 class="widget-title font-alt">Categorias Blog </h5>
                  <ul class="icon-list">
                    <li><a href="#">Fotografia - 7</a></li>
                    <li><a href="#">Diseño web- 3</a></li>
                    <li><a href="#">Ilustraciones - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Proyectos - 16</a></li>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Noticias Populares</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="Noticias.html"><img src="assets/images/Noticia1.jpg"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="Noticias.html">PERSONAS SORDAS EN LA CONSTRUCCIÓN DE PAZ</a></div>
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
                  <h5 class="widget-title font-alt">Etiquetas</h5>
                  <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Foto</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Imagen</a><a href="#" rel="tag">Noticia</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Tema</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Documentacion</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">Portafolio</a>
                  </div>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Frace del Dia</h5>“El silencio es el ruido más fuerte, quizá el más fuerte de todos los ruidos.” (Miles D. Davis)</div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Comentarios Recientes</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Es una buena plataforma en la que puedo interactuar con mis estudiantes.</a></li>
                    <li>John on <a href="#">Es fabulosos que esta página exista y supe que también la manejan para niños porque mi hermana se la presentaron en un curso. Ya empecé el curso para aprender y practicar después con mis compañeros de la universidad; siempre he querido aprender pero nunca me llamo la atención hacerlo por mis propios medios, me parece aburrido y no se consigue mucha información en la web.</a></li>
                    <li>Anguie on <a href="#">Lo maximo!

Actualmente estudio lenguaje de señas, pero requiere de mucha práctica y a veces es difícil contar con el tiempo suficiente para hacerlo.Estos cursos me ayudan a practicar aun cuando no estoy en casa!:) gracias por tan buena herramienta!</a></li>
                    </li>
                  </ul>
                </div>
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