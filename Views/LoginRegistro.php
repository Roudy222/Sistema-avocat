<?php
  
  //include("../Views/config.php")
  $conn = mysqli_connect('localhost','root','','avocat');
  
  if(isset($_POST['Sauvegarde']))

  {
    $nombre_usua = $_POST['nombre_usua'];
    $Contrasena_usua =$_POST['Contrasena_usua'];
    $email_usua =$_POST['email_usua'];
   
    $sql= "INSERT INTO  login (nombre_usua,Contrasena_usua,email_usua)values('$nombre_usua','$Contrasena_usua','$email_usua')";
    $resultado = mysqli_query($conn,$sql);
    $fila = mysqli_fetch_row($resultado);

    if($fila){
    
    echo "REGISTROS GUARDADOS";
    
    header("Location: Login.php");

     }else{
        echo "DATOS NO FUERON GUARDADOS";

    header("Location: Login.php");
           
    }

   }

?>