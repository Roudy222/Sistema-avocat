<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR LA EMPLEADO
if(isset($_POST['Save'])){
    $empl_codigos=$_POST['empl_codigos'];
    $empl_nombre_Completo=$_POST['empl_nombre_completo'];
    $empl_telefono=$_POST['empl_telefono'];
    $empl_sector=$_POST['empl_sector'];
    $empl_direccion=$_POST['empl_direccion'];
    $empl_email=$_POST['empl_email'];
    $empl_estado=$_POST['empl_estado'];
    $id_empr=$_POST['id_empr'];
   
    
    $query= "INSERT INTO empleado (empl_codigos,empl_nombre_Completo,empl_telefono,empl_sector,empl_direccion,
    empl_email,empl_estado,id_empr)VALUES('$empl_codigos','$empl_nombre_Completo','$empl_telefono',
    '$empl_sector','$empl_direccion','$empl_email','$empl_estado','$id_empr')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:Employé.php');   
}
//ACTUALIZAR LEMPRESA
if(isset($_POST['actualizarbtn'])){
    $id=$_POST['update_id'];
    $Codigos=$_POST['update_Codigos'];
    $Nombres_Completos=$_POST['update_Nombres_Completos'];
    $Telefono=$_POST['update_Telefono'];
    $Direccion=$_POST['update_Direccion'];
    $Email=$_POST['update_Email'];
    $Estado=$_POST['update_Estado'];
   
    $query = "UPDATE empleado SET Codigos='$Codigos',Nombres_Completos='$Nombres_Completos',
    Telefono='$Telefono',Direccion='$Direccion',Email='$Email',Estado='$Estado' WHERE id='$id' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:Employé.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:Employé.php');
       
    }
   } 

?>