<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR EL CLIENTE
if(isset($_POST['Save'])){
    $categoria_caso=$_POST['categoria_caso'];
    $categoria_estado=$_POST['categoria_estado'];
      
    
    $query= "INSERT INTO  categoria_caso(categoria_caso,categoria_estado)VALUES('$categoria_caso',
    '$categoria_estado')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:categoria.php');   
}
//ACTUALIZAR EL CLIENTE
if(isset($_POST['actualizarbtn'])){
    $id_categoria_caso=$_POST['update_id_categoria_caso'];
    $categoria_caso=$_POST['update_categoria_caso'];
    $categoria_estado=$_POST['update_categoria_estado'];
    
   
    $query = "UPDATE categoria_caso SET categoria_caso='$categoria_caso',categoria_estado='$categoria_estado'
     WHERE id_categoria_caso='$id_categoria_caso' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:categoria.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:categoria.php');
       
    }
   } 

?>