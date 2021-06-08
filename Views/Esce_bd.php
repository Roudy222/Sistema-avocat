<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR EL CLIENTE
if(isset($_POST['Save'])){
    $esce_Nombre=$_POST['esce_Nombre'];
    
    $query= "INSERT INTO  escenario_caso(esce_Nombre)VALUES('$esce_Nombre')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:escenario.php');   
}
//ACTUALIZAR EL ESCENARIO
if(isset($_POST['actualizarbtn'])){
    $id_escanario=$_POST['update_id_escenario'];
    $esce_Nombre=$_POST['update_esce_Nombre'];
    
    $query = "UPDATE escenario_caso SET esce_Nombre='$esce_Nombre'
     WHERE id_escenario='$id_escenario' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:escenario.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:escenario.php');
       
    }
   } 

?>