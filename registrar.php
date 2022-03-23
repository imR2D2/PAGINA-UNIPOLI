<?php
include "conexion.php"; 
    $usuario = $_POST["usuario"]; 
    $contrasena = $_POST["contrasena"]; 
    $email = $_POST["email"]; 
    $edad = $_POST["edad"]; 
    $saldo = 10000;
    $oro = 0;
    $plata = 0;
    $bronce = 0; 
    $opcion = "aceptado";
    $razon = "";

    //Validar si existe un valor en post
    if($usuario == "" and $contrasena == "" and $email == "" and $edad == ""){
        $opcion = "rechazado";
        $razon = "No hay ningun dato";
    }
    else if($usuario == "" || strlen($usuario) <= 5 || strlen($usuario) > 50){
        $opcion = "rechazado";
        $razon = "El usuario es invalido, coloque al menos 5 caracteres";
    }
    else if($contrasena == "" || strlen($contrasena) <= 4) {
        $opcion = "rechazado";
        $razon = "La contrasena es demasiado corta, debe tener al menos 4 caracteres";
    }
    else if($edad <= 18 || $edad == NULL || $edad >= 120) {
        $opcion = "rechazado";
        $razon = "Ingrese una edad valida";
    }
    else if($email == ""){
        $opcion = "rechazado";
        $razon = "Ingrese un correo electronico valido";
    }

    if($opcion == "aceptado"){

        echo json_encode("{ \"clave\":\"1\",\"texto\":\"Se ha registrado correctamente\" }");

        $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, contrasena, email, saldo, oro, plata, bronce, edad) VALUES(?,?,?,?,?,?,?,?)"); 
        //Enlazar parametros de lo signos ????
        $stmt->bind_param("sssiiiii", $usuario, $contrasena, $email, $saldo, $oro, $plata, $bronce, $edad,); 
        
        //Ejecutarlo
        $stmt->execute(); 

    }
    else if($opcion == "rechazado"){
        echo json_encode("{ \"clave\":\"0\",\"texto\":\"$razon\" }");
    }

?>

