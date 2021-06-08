<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR LA EMPRESA
if(isset($_POST['Save'])){
    $empr_Codigos=$_POST['empr_Codigos'];
    $empr_nombre=$_POST['empr_nombre'];
    $empr_telefono=$_POST['empr_telefono'];
    $empr_Nif=$_POST['empr_Nif'];
    $empr_Direccion=$_POST['empr_Direccion'];
    $empr_impuesto=$_POST['empr_impuesto'];
    $empr_sector=$_POST['empr_sector'];
    $empr_email=$_POST['empr_email'];
    $empr_descripcion=$_POST['empr_descripcion'];
    $empr_estado=$_POST['empr_estado'];
   
    
    $query= "INSERT INTO empresa (empr_Codigos,empr_nombre,empr_telefono,empr_Nif,empr_Direccion,empr_impuesto,empr_sector,empr_email,empr_descripcion,empr_estado)
    VALUES('$empr_Codigos','$empr_nombre','$empr_telefono','$empr_Nif','$empr_Direccion','$empr_impuesto','$empr_sector',
    '$empr_email','$empr_descripcion','$empr_estado')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:Entreprise.php');   
}
//ACTUALIZAR LA CLIENTE
if(isset($_POST['actualizarbtn'])){
    $id_empr=$_POST['update_id_empr'];
    $empr_Codigos=$_POST['update_empr_Codigos'];
    $empr_nombre=$_POST['update_empr_nombre'];
    $empr_telefono=$_POST['update_empr_telefono'];
    $empr_Nif=$_POST['update_empr_Nif'];
    $empr_Direccion=$_POST['update_empr_Direccion'];
    $empr_impuesto=$_POST['update_empr_impuesto'];
    $empr_sector=$_POST['update_empr_sector'];
    $empr_email=$_POST['update_empr_email'];
    $empr_descripcion=$_POST['update_empr_descripcion'];
    $empr_estado=$_POST['update_empr_estado'];
   
    $query = "UPDATE empresa SET empr_Codigos='$empr_Codigos',empr_nombre='$empr_nombre',
    empr_telefono='$empr_telefono',empr_Nif='$empr_Nif',empr_Direccion='$empr_Direccion',
    empr_impuesto='$empr_impuesto',empr_sector='$empr_sector',empr_email='$empr_email',
    empr_descripcion='$empr_descripcion',empr_estado='$empr_estado' WHERE id_empr='$id_empr' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:Entreprise.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:Entreprise.php');
       
    }
   } 

?>