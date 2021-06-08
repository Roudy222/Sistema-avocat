<?php
//session_start();

$host="localhost";
$user="root";
$pass="";
$data="avocat";
$conexion = mysqli_connect($host,$user,$pass,$data) or die ("sin conexion a la base");
   
if(mysqli_connect_errno()){

    echo " error de  conexion a la base de datos";

    exit();

    mysqli_close($conexion);
}




?>