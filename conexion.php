<?php
//Creamos una instancia para guardar los valores de la base de datos
$mysqli = new mysqli("localhost:3308", "root", "", "Graduacion2021");
//Para ver si existe un error en la conexion
if($mysqli->connect_errno){
    echo "Ocurrio un error en la conexion: ".$mysqli->connect_error;
}
/*SI CORRE DE MANERA CORRECTA PERO MEJOR LO COMENTAMOS
else{
    echo "Conexion exitosa a la base de datos";
}
*/
?>
