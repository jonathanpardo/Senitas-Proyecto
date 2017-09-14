<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro instructor</title>
    <link rel="stylesheet" href="Estilos-registrarse-Instructor.css">
</head>
<body>

<form action="php/RegistrarseInstructor.php" class="formulario" method="POST">
  
    <h1 class="formulario__titulo">Registrar Instructor</h1>
   
    <input type="text" class="formulario__input" name="Nombres" placeholder="Nombres">
    
    <input type="text" class="formulario__input" name="Apellidos" placeholder="Apellidos">
       
    <input type="text" class="formulario__input" name="Usuario" placeholder="Usuario">
    
    <input type="Email" class="formulario__input" name="Email" placeholder="Email">
    
    <input type="password" class="formulario__input" name="Contrasena" placeholder="Contrasena">
       
    <input type="password" class="formulario__input" name="Confirmar" placeholder="Confirmar contraseña">
    
   
    <input type="text" class="formulario__input" placeholder="Codigo instructor">
    
    <a type="submit" class="formulario__submit"  href="login-Instructor.html">Salir</a>
    
   <input type="submit" class="formulario__submit" value="Registrarse" name="Enviar">
    
    
</form>

</body>
</html>
