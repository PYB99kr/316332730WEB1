<?php
$user_db="root";
$pass_db="123456";
$db_name="Asistencia"
$host_db="127.0.0.1";
$conexion = new mysql($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion peto: ".$conexion->connect_error);
}

?>