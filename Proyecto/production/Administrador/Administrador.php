<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('../../php/Sesion.php');
      include("../../php/DatosUsuario.php");
      include("../../php/verificarTipoUsuario.php");
      if(!isset($_SESSION['Usuario'])){
        header("location:../../login-Aprendiz.php");
      }
      if(numeroUsuarios("Administrador") == 0) {
          redireccionar(verificarUsuario());
      }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Señitas | </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    <!--- Estilos Noticias-->
  
    <link href="../../assets/css/Estilo-Noticias.css" rel="stylesheet">
    <link id="color-scheme" href="../../assets/css/colors/default.css" rel="stylesheet">
    
    <!--- -->    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="Administrador.php" class="site_title"><i class="fa fa-hand-o-down"></i> <span>Señitas!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="Administrador.php"><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Cursos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Crear-Curso.php">Crear Cursos</a></li>
                      <li><a href="consultar-aprendices.php">Consultar aprendices por curso</a></li>
                      
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Anuncios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Crear-Anuncios.php">Crear Anuncios</a></li>
                      
                                          
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Crear-Blog.php">Crear Blog</a></li>
                      
                    </ul>
                  </li>
                  
                  
                </ul>
              </div>
              <div class="menu_section">
                
                <ul class="nav side-menu">
                 
                  <li><a><i class="fa fa-bug"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Ver-Reportes.php">Ver Reportes de los Aprendices y Instructores</a></li>
                      
                    </ul>
                  </li>
                 
                 
        
                  
                  <li><a ><i class="fa fa-wechat"></i> Mensajes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="Ver-Mensajes.php">Ver Mensajes de los Aprendices y Instructores</a></li>
                      
                    </ul>
                   
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Perfil">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Pantalla Completa">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Bloquear Vista">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="../../login-Aprendiz.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      
                    </li>
                    
                    <li><a href="../../php/CerrarSesion.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           

            
<section class="module">
          <div class="container">
            <div class="row">
             
             <h1>Anuncios Publicados:</h1>
           
              <div class="col-sm-8 col-sm-offset-1">
                <div class="post">
                  <div class="post-thumbnail"><a href="http://www.insor.gov.co/personas-sordas-en-la-construccion-de-paz/"><img src="../../assets/images/Noticia1.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Personas sordas en la construcción de paz</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">INSOR</a>| 25 de Julio de 2017<a href="#">Fotografia, </a><a href="#">daniel Burgos</a>
                    
                
                

                    </div>
                  </div>
                  
                  <div class="post-entry">
                    <p>

Aunque en los últimos años la población sorda ha logrado importantes avances en temas de inclusión, la deuda histórica que el Estado y la sociedad en su conjunto tienen con esta comunidad sigue siendo grande. Gran parte de la población sorda se siente al margen de los procesos políticos y de los debates que se llevan a cabo en la esfera pública, y de los que, como ciudadanos, deberían participar.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="http://www.insor.gov.co/personas-sordas-en-la-construccion-de-paz/">LEER MÁS</a></div>
                </div>
                
                <div class="post">
                  <div class="post-thumbnail"><a href="http://www.insor.gov.co/mas-de-100-entidades-publicas-comprometidas-con-la-atencion-a-la-poblacion-sorda/"><img src="../../assets/images/post-4.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Más de 100 entidades públicas comprometidas con la atención a la población sorda</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Insor</a>| 23 November | 3 Comments | <a href="#">Fotografia, </a><a href="#">daniel Burgos</a>

                    </div>
                  </div>
                  
                  <div class="post-entry">
                    <p>

A través de la participación de la Subdirección de Promoción y Desarrollo del INSOR en las Ferias Nacionales de Servicio al Ciudadano, hemos facilitado la comunicación y atención de más de 100 entidades públicas a la población sorda, en 24 ciudades y municipios de Colombia, durante los últimos 18 meses.Este importante logro es posible a través de una estrategia en equipo, que involucra a profesionales sordos, oyentes e intérpretes de lengua de señas colombiana, quienes se desplazan a territorio, con varios días de anticipación a la realización de las Ferias Nacionales de Servicio al Ciudadano y se encargan de formar a los funcionarios públicos de las instituciones locales, regionales y nacionales, en el tema “servicio al ciudadano accesible”.br</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="http://www.insor.gov.co/mas-de-100-entidades-publicas-comprometidas-con-la-atencion-a-la-poblacion-sorda/">LEER MÁS</a></div>
                </div>
                
                <div class="post">
                  <div class="post-thumbnail"><a href="http://www.insor.gov.co/el-insor-celebro-la-inclusion-de-la-lengua/"><img src="../../assets/images/Noticia3.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">El INSOR Celebró la Inclusión de la Lengua de Señas Colombiana como Lengua Nativa</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Insor-</a> <a href="#">Fotografia, </a><a href="#">daniel Burgos</a>
                    
                    </div>
                  </div>
                  
                  <div class="post-entry">
                    <p>

El INSOR trabaja por una gestión pública transparente y de calidad en la atención al ciudadano.

Para la transparencia en nuestra gestión, contamos con un Plan Anticorrupción y de Atención al Ciudadano que nos permite asumir acciones preventivas de control a nuestros programas, proyectos y procesos. Con lo que garantizamos un mejor servicio a la población sorda y a la ciudadanía en general...</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="http://www.insor.gov.co/el-insor-celebro-la-inclusion-de-la-lengua/">LEER MÁS</a></div>
                </div>
                
                <div class="post">
                  <div class="post-thumbnail"><a href="http://www.eltiempo.com/vida/educacion/educacion-inclusiva-en-colombia-96076"><img src="../../assets/images/Noticia4.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#"> Universidad Sergio Arboleda ofrece primeros posgrados para sordos</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Jonathan Alexis Pardo</a>| 23 November | 3 Comments | <a href="#">Fotografia, </a><a href="#">daniel Burgos</a>
                    
                    </div>
                  </div>
                  
                  <div class="post-entry">
                    <p>

La Universidad Sergio Arboleda de Bogotá ofrecerá los primeros posgrados en Colombia dirigidos para personas con discapacidad auditiva, según informó la institución educativa. 

Los tres primeros posgrados han sido desarrollados en colaboración con el Instituto Nacional para Sordos (Insor) y todos ellos podrán estudiarse en la Escuela de Educación.. .</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="http://www.eltiempo.com/vida/educacion/educacion-inclusiva-en-colombia-96076">LEER MÁS</a></div>
                </div>
                <div class="post">
                  
                </div>
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </section>

           



           
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Señitas - Tods los derechos recervados <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>