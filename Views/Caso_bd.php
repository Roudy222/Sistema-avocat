<?php
session_start();
$conn = mysqli_connect('localhost','root','','avocat');

//GUARDAR EL Caso
if(isset($_POST['Save'])){
    $nombre_caso=$_POST['nombre_caso'];
    $codigos_caso=$_POST['codigos_caso'];
    $direccion_caso=$_POST['direccion_caso'];
    $corte_caso=$_POST['corte_caso'];
    $tarifa_total_caso=$_POST['tarifa_total_caso'];
    $descripcion_caso=$_POST['descripcion_caso'];
    $estado_caso=$_POST['estado_caso'];
    $id_escenario=$_POST['id_escenario'];
    $id_categoria_caso=$_POST['id_categoria_caso'];
    $id_caso_archivado=$_POST['id_caso_archivado'];
    $id_cliente=$_POST['id_cliente'];
    $id_empr=$_POST['id_empr'];
    
   
   //INSERTAR EN LA BASE DE DATOS DE CASO
    
    $query= "INSERT INTO  caso(nombre_caso,codigos_caso,direccion_caso,corte_caso,tarifa_total_caso,
    descripcion_caso,estado_caso,id_escenario,id_categoria_caso,id_caso_archivado,
    id_cliente,id_empr)VALUES('$nombre_caso','$codigos_caso','$direccion_caso','$corte_caso','$tarifa_total_caso',
    '$descripcion_caso','$estado_caso','$id_escenario','$id_categoria_caso','$id_caso_archivado','$id_cliente','$id_empr')";

     $query_run=mysqli_query($conn,$query);
    
    if(!$query_run)
    {
       die("Les données  ne sont pas sauvegardées");
       header('Location:Cas.php'); 
    }
    
    $_SESSION['success']='sauvegardées';
    $_SESSION['message_type']='success';
    header('Location:Cas.php');   
}
//ACTUALIZAR EL CLIENTE
if(isset($_POST['actualizarbtn'])){
    $id_caso=$_POST['update_id_caso'];
    $nombre_caso=$_POST['update_nombre_caso'];
    $codigos_caso=$_POST['update_codigos_caso'];
    $direccion_caso=$_POST['direccion_caso'];
    $corte_caso=$_POST['update_corte_caso'];
    $tarifa_total_caso=$_POST['update_tarifa_total_caso'];
    $descripcion_caso=$_POST['update_descripcion_caso'];
    $estado_caso=$_POST['update_estado_caso'];
    $id_escenario=$_POST['update_id_escenario'];
    $id_categoria_caso=$_POST['update_id_categoria_caso'];
    $id_caso_archivado=$_POST['update_id_caso_archivado'];
    $id_cliente=$_POST['update_id_cliente'];
    $id_empr=$_POST['update_id_empr'];
   
    $query = "UPDATE caso SET clie_cogidos='$clie_cogidos',clie_nombres_completos='$clie_nombres_completos',
    clie_dni='$clie_dni',clie_tipo_dni='$clie_tipo_dni',clie_direccion='$clie_direccion',
    clie_email='$clie_email',clie_nacionalidad='$clie_nacionalidad',clie_telefono='$clie_telefono',
    clie_descripcion='$clie_descripcion',clie_estado='$clie_estado',id_empr='$id_empr' WHERE id_caso='$id_caso' ";

    $query_run = mysqli_query($conn,$query);
  
    if($query_run){

        $_SESSION['success']='Les données  sont changées';
        header('Location:Cas.php');
    
    }else{
       $_SESSION['status']='Les données  sont changées';
       header('Location:Cas.php');
       
    }
   } 

?>