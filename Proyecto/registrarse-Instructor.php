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
   
    <input type="text" class="formulario__input" name="Nombres">
    <label for="" class="formulario__label">Nombre</label>
    
    <input type="text" class="formulario__input" name="Apellidos">
      <label for="" class="formulario__label">Apellido</label>
       
    <input type="text" class="formulario__input" name="Usuario">
    <label for="" class="formulario__label">Usuario</label>
    
    <input type="Email" class="formulario__input" name="Email">
    <label for="" class="formulario__label">Email</label>
    
    <input type="password" class="formulario__input" name="Contrasena">
      <label for="" class="formulario__label">Contraseña</label>
       
    <input type="password" class="formulario__input" name="Confirmar">
    <label for="" class="formulario__label">Confirmar contraseña</label>
    
   
    <input type="text" class="formulario__input">
    <label for="" class="formulario__label">Codigo Instructor</label>
    
    <a type="submit" class="formulario__submit"  href="login-Instructor.html">Salir</a>
    
   <input type="submit" class="formulario__submit" value="Registrarse" name="Enviar">
    
    
</form>

</body>
</html>
