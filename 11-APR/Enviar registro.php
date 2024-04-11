<?php
include "conexion.php";
mysql_set_charset($conexion,'utf8');
                                            //label MUST be the same name
$buscarusuario="SELECT * FROM persona WHERE no_cuenta='$_POST[no_cuenta]'"

$resultado = $conexion -> query($buscarusuario);
$count = mysqli_num_rows($resultado)

if($count==1){
    echo"El usuario ya esta registrado"
    echo"<a href='index.html'>Nuevo registro</a>"
}

?>