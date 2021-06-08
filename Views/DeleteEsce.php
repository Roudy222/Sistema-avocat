<?php
include("Esce_bd.php");

if(isset($_GET['id_escenario'])){
$id_escenario=$_GET['id_escenario'];
$query="DELETE FROM escenario_caso WHERE id_escenario=$id_escenario ";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:escenario.php");
}

?>