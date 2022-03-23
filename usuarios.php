<?php
require "conexion.php";
session_start();
$id =$_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los Usuarios</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="css/inicio.css" media="all" >
    <link rel="stylesheet" type="text/css" href="css/inicio1.css" media="all" >
    <link rel="stylesheet" type="text/css" href="css/usuarios.css" media="all" >

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
<?php
include "conexion.php";
$resultado = $mysqli->query("SELECT nombre, edad, oro, plata, bronce FROM usuarios WHERE oro > 0 OR plata > 0 OR bronce > 0");
?>

<div class="container">
    <table class="table table-dark table-stripedtable-striped">
        <thead>
            <th>NOMBRE</th>
            <th>EDAD</th>
            <th>ADQUIRIO DE ORO</th>
            <th>ADQUIRIO DE PLATA</th>
            <th>ADQUIRIO DE BRONCE</th>
        </thead>
        <tbody>

            <?php
                while($fila = $resultado ->fetch_assoc()){
                    echo "<tr>
                        <td>$fila[nombre]</td>
                        <td>$fila[edad]</td>
                        <td>$fila[oro]</td>
                        <td>$fila[plata]</td>
                        <td>$fila[bronce]</td>
                    </tr>";
                    }
                ?>
        </tbody>
        <table class="table table-dark table-stripedtable-striped">
    </table>
</div>

    <!-- Inicio de footer-->
    <footer id="footer">
        <p>&copy; Desarrollado por Arturo Hernandez</p>
        <p>Mas contenido y formacion de desarrollo web en <a href="#">link-Arturo-Hernandez</a></p>
    </footer>
    <!-- Fin del footer -->
</body>
</html>
