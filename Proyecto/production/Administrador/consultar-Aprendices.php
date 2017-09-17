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
                    
                    <li><a href="../../login-Aprendiz.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
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
          
          <div class="x_panel">
                  <div class="x_title">
                    <h2>CONSULTAR APRENDICES POR CURSO <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      
                    <h2>FICHAS:
                       <select name="Nombre-Instructor">
                    

                        <option>11123144-G1</option>

                        <option>123123241-G2</option>

                        <option>1231414-G3</option>

                     </select></h2>
                     
                     
                     
                     <div class="x_panel">
                  <div class="x_title">
                    <h2> <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Ficha </th>
                            <th class="column-title">Fecha inicio </th>
                            <th class="column-title">Fecha Final </th>
                            <th class="column-title">Nombre </th>
                            <th class="column-title">Apellido </th>
                            <th class="column-title">cedula </th>
                            <th class="column-title no-link last"><span class="nobr">Estado de formacion</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            
                            <td class=" ">121000040</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">May 23, 2014 11:47:56 PM  <i ></i></td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">121000039</td>
                            <td class=" ">May 23, 2014 11:30:12 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM  <i ></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">121000038</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM  <i ></i>
                            </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">121000037</td>
                            <td class=" ">May 24, 2014 10:52:44 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">121000040</td>
                            <td class=" ">May 24, 2014 11:47:56 PM </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Aplazado</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">121000039</td>
                            <td class=" ">May 26, 2014 11:30:12 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM  <i ></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">cancelado</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">121000038</td>
                            <td class=" ">May 26, 2014 10:55:33 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">121000037</td>
                            <td class=" ">May 26, 2014 10:52:44 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            
                            <td class=" ">121000040</td>
                            <td class=" ">May 27, 2014 11:47:56 PM </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">121000039</td>
                            <td class=" ">May 28, 2014 11:30:12 PM</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">1000513925</td>
                            <td class=" last"><a href="#">Activo</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
                      

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancelar</button>
						   
                          <button type="submit" class="btn btn-success">Consultar</button>
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