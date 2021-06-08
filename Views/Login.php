<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login|de Avocats </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      
  </head>

        <?php
        $conn = mysqli_connect('localhost','root','','avocat');
        //include ("../Views/config.php");
        
        ?>
  <body class="login">
      <div>
         <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="profile_pic">

      <img src="../Assets/Iconos/Balance4.png" width="100" alt="..." class="img-circle profile_img">
      </div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
         
              <?php
              if(isset($_SESSION['status'])&& $_SESSION['status']!=''){

                echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].' </h2>';
                unset($_SESSION['status']);
              }
              ?>  

            <form class="form-login" action="LoginSave.php" method="POST" enctype="multipart/form-data">
              <h1>Formulaire de S'identifier</h1>
              <div>
                <input type="text" class="form-control" name="nombre_usua" placeholder="Nom d'utilisateur" required="">
              </div>
              <!--<div>
                <input type="text" class="form-control"  name="email_usua"  placeholder="Email" required="" />
              </div>-->
              <div>
                <input type="password" class="form-control"  name="contrasena_usua" placeholder="Mot de passe" required="">

              <!--<div class="g-recaptcha" data-sitekey="6LcDpE8aAAAAAAcesxz4THAX8qmAHymRD3Zc00UU"></div>-->
              </br>
              </div>
              
              <div>
             <div>
             <button type="submit" name="entrer" class="btn btn-primary btn-block" ><i class="fa fa-lock"></i> ENTRER</button>
             <a class="btn btn-default >S'identifier</a>
                                 
                <a class="reset_pass" href="#">Mot de passe perdu?</a>
                
              </div>
           
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nouveau sur le site?
                  <a href="LoginRegistrar.php" class="to_register"> Créer un compte </a>
                </p>
                <br />

                <div>
                
                  <h1><i class="fa fa-paw"></i>Sistema </h1>
                  <p>© 2021 Tous droits réservés. Système de bureau d'avocats réalisé par Pierre Jean Roudy. Confidentialité et conditions</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
    <script>
    $.backstretch("Assets/Imagenes/juez.jpg", {
      speed: 500
    });
  </script>
   <!--Recaptcha -->
   <script src="https://www.google.com/recaptcha/api.js?"></script>

  </body>
</html>
