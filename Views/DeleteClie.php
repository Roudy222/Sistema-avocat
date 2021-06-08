<?php
include("Cliente_bd.php");

if(isset($_GET['id_cliente'])){
$id_cliente=$_GET['id_cliente'];
$query="DELETE FROM cliente WHERE id_cliente=$id_cliente ";
$result= mysqli_query($conn,$query);
if(!$result){
    die("Query failed");
}
$_SESSION['message']='Les données  sont sauvegardées';
$_SESSION['message_type']='danger';
header("Location:Clientes.php");
}

?>