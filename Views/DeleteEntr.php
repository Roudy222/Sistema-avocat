<?php
include("Entreprise_bd.php");

if(isset($_GET['id_empr'])){
$id_empr=$_GET['id_empr'];
$query="DELETE FROM empresa WHERE id_empr=$id_empr ";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:Entreprise.php");
}

?>