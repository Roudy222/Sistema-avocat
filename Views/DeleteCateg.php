<?php
include("Categ_bd.php");

if(isset($_GET['id_categoria_caso'])){
$id_categoria_caso=$_GET['id_categoria_caso'];
$query="DELETE FROM categoria_caso WHERE id_categoria_caso=$id_categoria_caso ";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:categoria.php");
}

?>