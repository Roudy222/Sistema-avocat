<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR EL CLIENTE
if(isset($_POST['Save'])){
    $clie_cogidos=$_POST['clie_cogidos'];
    $clie_nombres_completos=$_POST['clie_nombres_completos'];
    $clie_dni=$_POST['clie_dni'];
    $clie_tipo_dni=$_POST['clie_tipo_dni'];
    $clie_direccion=$_POST['clie_direccion'];
    $clie_email=$_POST['clie_email'];
    $clie_nacionalidad=$_POST['clie_nacionalidad'];
    $clie_telefono=$_POST['clie_telefono'];
    $clie_descripcion=$_POST['clie_descripcion'];
    $clie_estado=$_POST['clie_estado'];
    $id_empr=$_POST['id_empr'];
   
    
    $query= "INSERT INTO  cliente(clie_cogidos,clie_nombres_completos,clie_dni,
    clie_tipo_dni,clie_direccion,clie_email,clie_nacionalidad,clie_telefono,
    clie_descripcion,clie_estado,id_empr)VALUES('$clie_cogidos','$clie_nombres_completos ','$clie_dni',
    '$clie_tipo_dni','$clie_direccion','$clie_email','$clie_nacionalidad','$clie_telefono','$clie_descripcion',
    '$clie_estado','$id_empr')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:Clientes.php');   
}
//ACTUALIZAR EL CLIENTE
if(isset($_POST['actualizarbtn'])){
    $id_cliente=$_POST['update_id_cliente'];
    $clie_cogidos=$_POST['update_clie_cogidos'];
    $clie_nombres_completos=$_POST['update_clie_nombres_completos'];
    $clie_dni=$_POST['update_clie_dni'];
    $clie_tipo_dni=$_POST['update_clie_tipo_dni'];
    $clie_direccion=$_POST['update_clie_direccion'];
    $clie_email=$_POST['update_clie_email'];
    $clie_nacionalidad=$_POST['update_clie_nacionalidad'];
    $clie_telefono=$_POST['update_clie_telefono'];
    $clie_descripcion=$_POST['update_clie_descripcion'];
    $clie_estado=$_POST['update_clie_estado'];
    $id_empr=$_POST['update_id_empr'];
   
    $query = "UPDATE cliente SET clie_cogidos='$clie_cogidos',clie_nombres_completos='$clie_nombres_completos',
    clie_dni='$clie_dni',clie_tipo_dni='$clie_tipo_dni',clie_direccion='$clie_direccion',
    clie_email='$clie_email',clie_nacionalidad='$clie_nacionalidad',clie_telefono='$clie_telefono',
    clie_descripcion='$clie_descripcion',clie_estado='$clie_estado',id_empr='$id_empr' WHERE id_cliente='$id_cliente' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:Clientes.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:Clientes.php');
       
    }
   } 

?>