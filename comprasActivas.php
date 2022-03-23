<?php
require "conexion.php";
session_start();
$id =$_SESSION["id"];
$oro;
$plata;
$bronce;

$stmt = $mysqli->prepare("SELECT oro, plata, bronce  FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);

$stmt->execute();
$stmt->bind_result($oro, $plata, $bronce);
$stmt->fetch();
$_SESSION["id"] = $id;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Compras</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="css/comprasActivas.css" media="all" >
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
            <li><a href="vip.php">Regresar al Inicio</a></li>
            <li><a href="">informacion</a></li>
            <li class="usuarioPading"><a data-bs-toggle="modal" data-bs-target="#exampleModal2">Contacto<a></li>
 
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

        <!--Inicio de las tarjetas -->
<div class="containerTarjet">
    <div class="card text-white bg-warning mb-3 oro" style="max-width: 18rem;">
        <div class="card-header">ORO</div>
        <div class="card-body">
            <h5 class="card-title">TIENES LAS SIGUIENTES MEMBRESIAS ACTIVAS:</h5>
            <p class="card-text">
            <?php
                echo $oro;
            ?>
            </p>
        </div>
    </div>

    <div class="card text-white bg-secondary mb-3 plata" style="max-width: 18rem;">
        <div class="card-header">PLATA</div>
        <div class="card-body">
            <h5 class="card-title">TIENES LAS SIGUIENTES MEMBRESIAS ACTIVAS:</h5>
            <p class="card-text">
            <?php
                echo $plata;
            ?>
            </p>
        </div>
    </div>

    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">BRONCE</div>
        <div class="card-body">
            <h5 class="card-title">TIENES LAS SIGUIENTES MEMBRESIAS ACTIVAS:</h5>
            <p class="card-text">
            <?php
                echo $bronce;
            ?>
            </p>
        </div>
    </div>
</div>
    <!-- Fin de las tarjetas-->

    <div class="clear"></div>

    <!-- Inicio de footer-->
    <footer id="footer">
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

</body>
</html>
