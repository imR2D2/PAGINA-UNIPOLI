<?php
include("conexion.php");
session_start();

//---------------------------------------------------------ORO
if(isset($_POST["oroCompra"])){
    $precioOro = 4000; 
    $id = $_SESSION["id"];
    $saldo;
    $oro;
    $stmt = $mysqli->prepare("SELECT saldo, oro FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($saldo, $oro);
$stmt->fetch();

if($saldo > 0){
    include("conexion.php");
    $stmt= $mysqli->prepare("UPDATE usuarios SET saldo=saldo-? WHERE id=?");
    $stmt ->bind_param("ii", $precioOro, $id);
    $stmt->execute();
    $stmt= $mysqli->prepare("UPDATE usuarios SET oro=oro+1 WHERE id=?");
    $stmt ->bind_param("i", $id);
    $stmt->execute();

    echo ' 
    <script>
    alert("paquete oro comprado");
    window.location = "compras.php";
    </script>
    ';
    }
else if($saldo <= 0){
    echo ' 
    <script>
    alert("No tienes suficiente dinero");
    window.location = "compras.php";
    </script>
    ';
    //Cerramos la consulta del stmt para que no ejecute nada y se cierre
    $stmt->close();
}
}

//-----------------------------------------------------PLATA
if(isset($_POST["plataCompra"])){
    $precioPlata= 2000; 
    $id = $_SESSION["id"];
    $saldo;
    $plata;
    $stmt = $mysqli->prepare("SELECT saldo, plata FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();


$stmt->bind_result($saldo, $plata);
$stmt->fetch();

if($saldo > 0){
    include("conexion.php");
    $stmt= $mysqli->prepare("UPDATE usuarios SET saldo=saldo-? WHERE id=?");
    $stmt ->bind_param("ii", $precioPlata, $id);
    $stmt->execute();
    $stmt= $mysqli->prepare("UPDATE usuarios SET plata=plata+1 WHERE id=?");
    $stmt ->bind_param("i", $id);
    $stmt->execute();

    echo ' 
    <script>
    alert("paquete plata comprado");
    window.location = "compras.php";
    </script>
    ';
    }
    else if($saldo <= 0){
        echo ' 
        <script>
        alert("No tienes suficiente dinero");
        window.location = "compras.php";
        </script>
        ';
        //Cerramos la consulta del stmt para que no ejecute nada y se cierre
        $stmt->close();
    }
}
//---------------------------------------------------BRONCE

if(isset($_POST["bronceCompra"])){
    $precioBronce = 1000; 
    $id = $_SESSION["id"];
    $saldo;
    $bronce;
    $stmt = $mysqli->prepare("SELECT saldo, bronce FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();


$stmt->bind_result($saldo, $bronce);
$stmt->fetch();

if($saldo > 0){
    include("conexion.php");
    $stmt= $mysqli->prepare("UPDATE usuarios SET saldo=saldo-? WHERE id=?");
    $stmt ->bind_param("ii", $precioBronce, $id);
    $stmt->execute();
    $stmt= $mysqli->prepare("UPDATE usuarios SET bronce=bronce+1 WHERE id=?");
    $stmt ->bind_param("i", $id);
    $stmt->execute();

    echo ' 
    <script>
    alert("paquete bronce comprado");
    window.location = "compras.php";
    </script>
    ';
    }
    else if($saldo <= 0){
        echo ' 
        <script>
        alert("No tienes suficiente dinero");
        window.location = "compras.php";
        </script>
        ';
        //Cerramos la consulta del stmt para que no ejecute nada y se cierre
        $stmt->close();
    }
}
?>


