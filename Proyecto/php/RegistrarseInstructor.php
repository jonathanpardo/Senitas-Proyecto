<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Señitas</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            if (isset($_POST["Enviar"]))
            {
                if ($_POST["Contrasena"] == $_POST["Confirmar"])
                {
                    include("Instructor.php");
                    $NuevoUsuario = new Instructor(ucwords($_POST["Nombres"]),ucwords($_POST["Apellidos"]),$_POST["Usuario"],$_POST["Email"],$_POST["Contrasena"],"../../FotosPerfil/user.png");
                    $NuevoUsuario->Registrarse();
                }             
                else
                {
                    echo "<script languaje='javascript'>alert('Las contraseñas no coinciden, por favor intentelo nuevamente');location.href='../registrarse-instructor.php'</script>"; 
                }
            }
        ?>
    </body>
</html>