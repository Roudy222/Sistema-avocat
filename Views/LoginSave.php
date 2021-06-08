<?php
  //include("../Views/config.php");
  $conn = mysqli_connect('localhost','root','','avocat');
  //require('includes/navbar.php');
  //include('seguridad_log.php');
   
    if(isset($_POST['entrer'])){
    
    $nombre_usua= $_POST['nombre_usua'];
    $contrasena_usua= $_POST['contrasena_usua'];

    $sql= "SELECT * FROM login where nombre_usua='$nombre_usua' and contrasena_usua='$contrasena_usua' ";
    $resultado = mysqli_query($conn,$sql);
    
    if(mysqli_fetch_array($resultado))
   
    {
       
      //echo "Mot de passe correct";
    $_SESSION['NOMBRE'] = $nombre_usua;
    header('Location: Principal.php');

     }
     else{
      
      echo "Mot de passe incorrect";

    header('Location:Login.php');

      //$_SESSION['status'] = 'PASSWORD O NOMBRE INCORRECTO';
      // 
           
    }
    

   }

?>