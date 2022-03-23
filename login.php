<!DOCTYPE html>
<html lang="en">
<?php
//Codigo para cerrar sesion y cuando la gente presione el login la sesion se borre de alguna manera
session_start();
session_destroy();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<!--Con el action mandamos a llamar a un archivo que se encarge de procesar los datos y con el metodo le indicamos cual usaremos -->

<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Login Form -->
    <form action="procesar.php" method="POST">
        <div class="mb-3">  
        <h2>INICIAR SESIÓN</h2>
            <!--El name sera el que tendra la variable super global dependiendo el metodo POST o GET -->
            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">

            <!--<input type="text" name="usuario" id="" class="form-control" placeholder="" aria-describedby="helpId"> -->
        </div>
        
        <div class="mb-3">  
            <input type="text" id="password" class="fadeIn third" name="contrasena" placeholder="Contraseña">
            
            <!--<input type="password" name="contrasena" id="" class="form-control" placeholder="" aria-describedby="helpId"> -->
        </div>
    <!--Cuando se presione el boton se mandaran los datos que inrgesaron en el formulario -->
        <input type="submit" class="fadeIn fourth" value="Acceder" id="registrarNuevo">

        <!--<button class="btn btn-primary">Ingresa</button> -->
        <p id="feedback"></p>
      </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="registroUsuario.php">Crea Una Cuenta</a>
      <br>
      <br>
      <a class="underlineHover" href="inicio.php"><i class="far fa-arrow-alt-circle-left"></i></a>
    </div>
  </div>
</div>

<script>
        $("#registrarNuevo").on("click", function(evento){
            evento.preventDefault();
            var vUsuario = $("#login").val();
            var vContrasena = $("#password").val();
          
            $.ajax({
                url:"procesar.php",
                method:"POST",
                dataType:"json",
                data: {
                    usuario: vUsuario,
                    contrasena: vContrasena
                }
            }).done(function(datos){
                var json = JSON.parse(datos);
                if(json.clave == 0){
                    $("#feedback").text(json.texto);
                }
                else if(json.clave == 1){
                    document.location.href = "vip.php"
                }
            });
        });
    </script>
</body>
</html>

