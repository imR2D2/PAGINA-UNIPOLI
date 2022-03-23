<?php

session_start();
require "conexion.php";

$nombre = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$resultado;

$stmt = $mysqli->prepare("SELECT Id FROM usuarios WHERE nombre = ? AND contrasena = ?");
$stmt->bind_param("ss", $nombre, $contrasena);

$stmt->execute();

$stmt->bind_result($resultado);

$stmt->fetch();
if($resultado == null){
    echo json_encode("{ \"clave\":\"0\",\"texto\":\"¡Usuario o contraseña incorrectos!\" }");
}else{
    $_SESSION["autenticado"] = $resultado;
    echo json_encode("{ \"clave\":\"1\",\"texto\":\"¡Las credenciales son correctas, Bienvenido(a) $!\" }");
}

?>
