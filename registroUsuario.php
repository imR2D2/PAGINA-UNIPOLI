<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="wrapper fadeInDown">
    <div id="formContent">

    <!-- Login Form -->
    <form action="registrar.php" method= "POST" class="formulario registro">
        <div class="mb-3">  
        <h2>REGISTRARSE</h2>
            <input type="text" placeholder="nombre" name="nombre" id="nombre">
        </div>
        
        <div class="mb-3">  
            <input type="text" placeholder="contrasena" name="contrasena" id="contrasena">
        </div>
        <div class="mb-3">  
            <input type="text" placeholder="edad" name="edad" id="edad" id="edad">
        </div>

        <div class="mb-3">  
            <input type="text" placeholder="email" name="email" id="email">
        </div>

        <input type="submit" class="fadeIn fourth" value="Registrar" id="registrar">
        <p id="feedback"></p>
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="login.php">Ir al Login</a>
    </div>
    </div>
</div>

<script>
        $("#registrar").on("click", function(evento){
            evento.preventDefault();
            var vUsuario = $("#nombre").val();
            var vContrasena = $("#contrasena").val();
            var vEdad = $("#edad").val();
            var vEmail = $("#email").val();
          
            $.ajax({
                url:"registrar.php",
                method:"POST",
                dataType:"json",
                data: {
                    usuario: vUsuario,
                    contrasena: vContrasena,
                    email: vEmail,
                    edad: vEdad
                }
            }).done(function(datos){
                var json = JSON.parse(datos);
                if(json.clave == 0){
                    $("#feedback").text(json.texto);
                }
                else if(json.clave == 1){
                    $("#feedback").text(json.texto);
                }
            });
        });
        //Sirve para hacer la parte de borrar los campos del formulario una vez validados los campos 
        $("#registrar").click(function () {
            $("form").trigger("reset");
        });
    </script>



</body>
</html>