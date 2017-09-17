<!DOCTYPE html>
<html lang="en">
  <head>        
    <?php
      if (isset($_COOKIE['RecordarUsuario']))
      {      
        $Usuario = $_COOKIE['RecordarUsuario'];
      }
      else
      {
        $Usuario = null;
      }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrate</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">    
    <!--Formulario de ingreso____________________________________________________________________________________________________________-->
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="php/LoginAprendiz.php" method="post">
              <h1>Ingresar</h1>
              
              <div class="x_panel">
                  
                  <div class="x_content">
                    

                    <button type="button" class="btn btn-primary" onClick="window.location.href='login-Aprendiz.php'">Aprendiz</button>
                                         
                    <button type="button" class="btn btn-success" onClick="window.location.href='login-Instructor.html'">Instructor</button>
                                                               
                                       
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg"onClick="window.location.href='login-Administrador.html'">Administrador</button>

                  

                    
                  </div>
                </div>
                
              <div>
                <input type="text" name="Usuario" class="form-control" placeholder="Usuario" required="" value= "<?php echo $Usuario ?>" />
              </div>
              <div>
                <input type="password" name="Contrasena" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <input type="checkbox" name="Recordar" checked=""><label> Recordarme</label>
              </div>
              <div>
                <input type="submit" name="Ingresar" class=" btn btn-default submit" value="Ingresar">
                <a class="reset_pass" href="#">Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿Eres nuevo?
                  <a href="#signup" class="to_register"> Crear una cuenta </a>
                  
                </p>
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-hand-o-down"></i>  Señitas!</h1>
                  <p>©2017 Todos los derechos reservados. Señitas! terminos de privacidad y condiciones.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <!--Fin del formulario de ingreso________________________________________________________________________________________________________________-->
        
        
        
        
        

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="php/RegistrarseAprendiz.php" method="post">
              <h1>Crear Cuenta</h1>
                <div>
                <input type="text" class="form-control" placeholder="Nombre" required="on" name="Nombres" />
              </div>
                <div>
                <input type="text" class="form-control" placeholder="Apellidos" required="" name="Apellidos" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="Usuario" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="Email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" name="Contrasena" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="Confirmar" required="">
              </div>
              <div>
                <input type="hidden" name="Pagina" value="../login-Instructor">
              </div>
              <div>
                <input type="submit" value="Enviar" name="Enviar" class="btn btn-default submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿ya esta registrado?
                  <a href="#signin" class="to_register"> Ingresar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-hand-o-down"></i>  Señitas!</h1>
                  <p>©2017 Todos los derechos reservados. Señitas! terminos de privacidad y condiciones.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        
      
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
    </div>
    </div>
  </body>
</html>
