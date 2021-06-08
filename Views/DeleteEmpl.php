<?php
include("Employé_bd.php");

if(isset($_GET['id_empleado'])){
$id_empleado=$_GET['id_empleado'];
$query="DELETE FROM empleado WHERE id_empleado= $id_empleado ";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:Entreprise.php");
}

?>