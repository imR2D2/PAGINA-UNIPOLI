<!--Solo entraran los usuarios que estan registrados-->

<!DOCTYPE html>
<html lang="en">

<?php
//Necesitamos iniciar sesion para que cuando se haga el login nosotros habremos creado una varible de sesion y aqui en VIP.PHP lo que haremos es ver si esa sesion esta establecida, si no esta establecida significa que no han iniciado sesion
    session_start(); 
    //isset determina si una variable esta declarada
    if(!isset($_SESSION["autenticado"])){
        //Mandaremos al usuario a login de nuevo hasta que se autentique
        header('Location:login.php'); 
        exit;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vip</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="css/inicio.css" media="all" >
    <link rel="stylesheet" type="text/css" href="css/inicio1.css" media="all" >

    <style type="text/css">
        img.logos{width: 90px; height: 35px;}
    </style>
</head>
<body>
    <!--Inicio de la cabecera-->
    <header id="header">
        <div id="logotipo">
            <img src="img/logo.png" alt="logo" title="logo">
        </div>
        <h1></h1>
        <h1>
            <a href="">
                Universidad Politecnica de Durango
            </a>
        </h1>
    </header>
    <!--Fin de la cebecera-->

    <!--Menu de navegacion-->
    <nav id="nav">
        <ul>
            <li><a href="vip.php">Inicio</a></li>
            <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal4">Informacion</a></li>
            <li class="usuarioPading"><a data-bs-toggle="modal" data-bs-target="#exampleModal2">Contacto</a></li>
 
            <li>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <?php 
                        require "conexion.php";
                        $id = $_SESSION["autenticado"];
                        $nombre;

                        $stmt = $mysqli->prepare("SELECT nombre FROM usuarios WHERE id = ?");
                        $stmt->bind_param("i", $id);

                        $stmt->execute();
                        $stmt->bind_result($nombre);
                        $stmt->fetch();
                        $_SESSION["id"] = $id;
                        echo "<li>$nombre</li>";         
                    ?>
                </a>
            </li>
        </ul>
    </nav>
    <!--Sistema de paquetes -->
    <div class="membresias">
      <h1>Membresias</h1>
    </div>

    <div class="pricing-table">
		<div class="pricing-card">
        <h3 class="pricing-card-header">........</h3>
				<div class="price"><h3>Comprar Membresias</h3></div>
                <ul>
					<li>Adquiere tus lugares para este gran evento de graduacion.
                        <br><br>¡VAMOS, VEN Y ADQUIERELAS!</li>
				</ul>
                <a href="compras.php" class="order-btn">¡VER!</a>            
	    </div>

		<div class="pricing-card">
        <h3 class="pricing-card-header">........</h3>
				<div class="price"><h3>Mis membresias compradas</h3></div>
                <ul>
					<li>Aqui se encuentran tus membresias compradas.
                        <br><br>¡CHECALAS!</li>
				</ul>
                <a href="comprasActivas.php" class="order-btn">¡VER!</a>            
	    </div>
        
    
        <div class="pricing-card">
				<h3 class="pricing-card-header">........</h3>
				<div class="price"><h3>Usuarios Con Membresias</h3></div>
                <ul>
					<li>Mira en tiempo real todas las membresias que han comprado otros usuarios. 
                        <br><br>¡NO TE QUEDES SIN LA TUYA!</li>
				</ul>
                <a href="usuarios.php" class="order-btn">¡VER!</a>            
	    </div>
    </div>
    <!--Fin del sistema de paquetes -->

    <!-- Inicio de footer-->
    <footer id="footerInicio">
        <p>&copy; Desarrollado por Arturo Hernandez</p>
        <p>Mas contenido y formacion de desarrollo web en <a href="#">link-Arturo-Hernandez</a></p>
    </footer>
    <!-- Fin del footer -->

    <!-- Inicio del modal del usuario que lo madamos a llamar por el id diferente al modal de contacto -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">USUARIO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <i class="fas fa-money-bill-alt"></i>
                <?php
                    require "conexion.php";
                    $id = $_SESSION["autenticado"];
                    $saldo;

                    $stmt = $mysqli->prepare("SELECT saldo FROM usuarios WHERE id = ?");
                    $stmt->bind_param("i", $id);

                    $stmt->execute();
                    $stmt->bind_result($saldo);
                    $stmt->fetch();
                    $id = $_SESSION["autenticado"];

                    echo "<h1>Tienes un saldo de: $saldo</h1>"; 
                ?>
                </i>
                <BR>
                <button class="btn btn-primary"><a href="login.php">Cerrar Sesion</a></button>
                </div>
            </div>
        </div>
    </div>
    <!--Fin del modal de usuario -->

    <!--Inicio de modal de contacto -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CONTACTOS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <i class="fas fa-globe"></i><h1>http://unipolidgo.edu.mx</h1>
            <br>
            <i class="fas fa-phone-alt"></i><h1>45 64260</h1>
            <br>
            <i class="fas fa-envelope"></i><h1>unipoli@unipolidgo.edu.mx</h1>
        <div class="mb-3">    
            
        </div>
        </div>
        </div>
    </div>
    <!-- Fin del modal de contacto-->

    <!--Inicio del modal de informacion -->
<div class="modal fade" id="exampleModal4v" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INFORMACION</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card align-self-center" style="width: 18rem;">
            <ul class="list-group list-group-flush">
            <div class="card-header">
            UBICACION DEL EVENTO: 
            </div>
        <li class="list-group-item">Se llevara acabo en el salon "Las Palmas" en Durango, Dgo.</li>
            <div class="card-header">
            DIA DEL EVENTO: 
            </div>
        <li class="list-group-item">Los esperamos a partir de las 6:00 P.M. </li>
            <div class="card-header">
            MAPA DE LA UBICACION: 
            </div>
        <li class="list-group-item"><a href="https://goo.gl/maps/z4gPV8MLuWJr2yZ48" target="_blank">Link Google Maps</a></li>
            </ul>
        </div>           
        </div>
    </div>
</div>
<!-- Fin del modal de informacion-->
</body>
</html>
