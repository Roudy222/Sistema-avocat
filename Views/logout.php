<?php

session_start();
if(isset($_POST['logout-btn']))
{
    session_destroy();
    unset($_SESSION['NOMBRE']);
    header('Location:Login.php');
}


?>