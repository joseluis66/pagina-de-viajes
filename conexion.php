<?php


$conexion = mysqli_connect("localhost", "root","","login_registre");
if(!$conexion){
    echo"conectado ala base de datos ";
}else{
    echo "no se a podido conectar ala base de datos";
}
?>

