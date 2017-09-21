<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('../../php/Sesion.php');
      include("../../php/DatosUsuario.php");
      include("../../php/DatosCursos.php");
      include("../../php/bandejaEntrada.php");
      include("../../php/verificarTipoUsuario.php");
      if(!isset($_SESSION['Usuario'])){
        header("location:../../login-Administrador.html");
      }
      if(numeroUsuarios("Administrador") == 0) {
          redireccionar(verificarUsuario());
      }
      if (!isset($_GET["id"])) {
        $_GET["id"] = 1;
      }
      if (!isset($_GET["Ficha"])) {
        $_GET["Ficha"] = 1;
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
                <img src="<?php echo ObtenerDatos($_SESSION['Usuario'],"Foto"); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido Administrador</span>
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
                  <li><a href="Administrador.php"><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Cursos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Crear-Curso.php">Crear Cursos</a></li>
                      <li><a href="ActualizarCursos.php">Actualizar Cursos</a></li>
                      <li><a href="consultar-aprendices.php">Consultar aprendices por curso</a></li>
                      <li><a href="BorrarCursos.php">Borrar Cursos</a></li>
                      
                      
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
                 
                 
        
                  
                  <li><a href="Ver-Mensajes.php" ><i class="fa fa-wechat"></i> Mensajes
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
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="../../php/CerrarSesion.php">
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
                    <img src="<?php echo obtenerDatos($_SESSION['Usuario'],'Foto'); ?>" alt=""><?php echo obtenerDatos($_SESSION['Usuario'],"NombreUsuario"); ?>
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
            </nav>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           

            
<section class="module">
          
          <div class="x_panel">
                  <div class="x_title">
                    <h2>CONSULTAR APRENDICES POR CURSO <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" action="" method="GET">

                      
                    <h2>FICHAS:
                       <select name="Ficha">
                    

                        <?php 
                          $Cursos = obtenerCursos();
                          foreach ($Cursos as $registros) {
                            echo "<option>" . $registros["idCursos"] . " " . $registros["Nombre"] . "</option>";
                          }
                        ?>

                     </select></h2>
                     
                     
                     
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Ficha </th>
                            <th class="column-title">Nombre </th>
                            <th class="column-title">Apellido </th>
                            <th class="column-title">Nombre usuario</th>
                            <th class="column-title">Email </th>
                            <th class="column-title no-link last"><span class="nobr">Estado de formacion</span></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            $Aprendices = obtenerUsuariosRegistrados($_GET["id"]);
                            foreach ($Aprendices as $registros) {
                              ?>
                                <tr class="even pointer">                            
                                <td class=" "><?php echo $registros["Fk_Cursos"] ?></td>
                                <td class=" "><?php echo $registros["Nombres"] ?></td>
                                <td class=" "><?php echo $registros["Apellidos"] ?></td>
                                <td class=" "><?php echo $registros["NombreUsuario"] ?></td>
                                <td class=" "><?php echo $registros["Email"]; ?></td>
                                <td class=" last">Activo
                            </td>
                          </tr>  
                          <?php
                            }
                          ?>                        
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
                      

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">    
                          <?php 
                            $cadena =explode(" ", $_GET["Ficha"]);
                            $id =  $cadena[0];
                           ?>
                          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                        <input type="submit" name="Buscar" value="Buscar Ficha" class="btn btn-success">   
                        </div>
                      </div>

                    </form>
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