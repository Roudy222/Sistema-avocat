<?php
include("Caso_bd.php");

if(isset($_GET['id_caso'])){
$id_caso=$_GET['id_caso'];
$query="DELETE FROM caso WHERE id_caso=$id_caso";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:cas.php");
}

?>