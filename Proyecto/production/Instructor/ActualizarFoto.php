<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
      include('../../php/Sesion.php');
      include("../../php/DatosUsuario.php");
      include("../../php/bandejaEntrada.php");
      include("../../php/verificarTipoUsuario.php");
      if(!isset($_SESSION['Usuario'])){
        header("location:../../login-Instructor.html");
      }
      if(numeroUsuarios("Instructor") == 0) {
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
              <a href="Instructor.php" class="site_title"><i class="fa fa-hand-o-down"></i> <span>Señitas!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo ObtenerDatos($_SESSION['Usuario'],"Foto"); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo ObtenerDatos($_SESSION['Usuario'],"Nombres","Apellidos"); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="Instructor.php"><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Ejecucucion de la formacion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Consultar-rutaAprendiz.php">Consultar ruta del Aprendiz</a></li>
                      <li><a href="Generar-constancia-aprendiz.php">Generar constancia de aprendiz</a></li>
                      <li><a href="gestionar-ruta-de-aprendizaje.php">Gestion ruta de aprendizaje</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Gestion de Ambientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Consultar-Listado-de-aprendices.php">Consultar listado de Aprendices</a></li>
                      
                      <li><a href="Descargar-Listado-de-Notas.php">descargar Listado de Notas</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Generar-Reporte-Error.php">Generar reportes  de Error</a></li>
                      
                    </ul>
                  </li>
                  
                  
                </ul>
              </div>
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="Bandeja-de-Entrada.php"><i class="fa fa-bug"></i> Bandeja de Entrada
                  <?php
                  if(mensajessinleer()==1)
                  {
                    ?>
                    <span class="label label-danger pull-right"><?php echo "tienes $tot mensaje nuevo";?></span>
                    <?php
                  }
                  else if(mensajessinleer()>1)
                  {
                    ?>
                    <span class="label label-danger pull-right"><?php echo mensajessinleer() . " mensajes nuevos";?></span>
                    <?php
                  }
                  ?>
                  </a>
                    <ul class="nav child_menu">
                    </ul>
                  </li>
                  
                  <li><a href="Subir-Actividades.php"><i class="fa fa-sitemap"></i> Subir Actividades <span class="fa fa-chevron-down"></span></a>
                   
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Actualizar Foto" href="ActualizarFoto.php">
                <span class="fa fa-child" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Actualizar Datos" href="actualizar_datos.php">
                <span class="fa fa-users" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Borrar Cuenta" href="BorrarCuenta.php">
                <span class="fa fa-trash"  aria-hidden="true"></span>
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
                    <img src="<?php echo ObtenerDatos($_SESSION['Usuario'],"Foto"); ?>" alt=""><?php echo ObtenerDatos($_SESSION['Usuario'],"Nombres","Apellidos"); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
										<li>
										<li><a href="ActualizarFoto.php">Actualizar Foto</a></li>
											<li><a href="Actualizar_datos.php">Actualizar Datos</a></li>
											<li><a href="BorrarCuenta.php">Borrar Cuenta</a></li>
										</li>


										<li><a href="../../php/CerrarSesion.php"><i class="fa fa-sign-out pull-right"></i> Salir </a></li>
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
            <div class="right_col" role="main">	
					<form action="../../php/ActualizarFoto.php" method="post" enctype="multipart/form-data">
						Selecciona una foto..<input type="File" name="Archivo" id="upload">
						<img id="image" width="400" height="400">
						<input type="Submit" name="Enviar">
					</form>				
					<script type="text/javascript"> 
						document.getElementById("upload").onchange = function() {
				  		var reader = new FileReader(); //instanciamos el objeto de la api FileReader

				  		reader.onload = function(e) {
				   		 //

				   		 document.getElementById("image").src = e.target.result;
				 		 };

				  		// read the image file as a data URL.
				  		reader.readAsDataURL(this.files[0]);
						};
					</script>
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