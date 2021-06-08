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

  <body class="login">
          
  <?php
                  if (isset($_SESSION['mensaje'])) {
                            ?>
                  <div class="alert alert-<?= $_SESSION['success']; ?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['mensaje'] ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <?php
                  session_unset(); //limpia la secciones
                  }
                  ?>                      
                   <?php
                   $conn = mysqli_connect('localhost','root','','avocat');
                   ?>
    <div>
    
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="profile_pic">

      <img src="../Assets/Imagenes/Balance5.jpg" width="50" alt="..." class="img-circle profile_img">
      </div>
      <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">


            <form action="LoginRegistro.php" method="POST">
              <h1>Créer un compte</h1>
              <div>
                <input type="text" class="form-control" name="nombre_usua" placeholder="Nom d'utilisateur" required="" autofocus />
              </div>
              <div>
                <input type="email" class="form-control" name="email_usua" required="Email" autofocus />
              </div>
              <div>
                <input type="password" class="form-control" name="Contrasena_usua" placeholder="Mot de Passe" required="" />
                <div class="g-recaptcha" id="catpcha" data-sitekey="6LfzlE8aAAAAANqwkpKPWQ1aIkxnj9ah8YE93YtF"></div>
              </div>
              <div>
                <button type="submit" name="Sauvegarde"  class="btn btn-primary" >Sauvegardé</button>
                
                   <button  type="submit" href="Login.php" class="btn btn-danger" >Annuler</button>
                    
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Déjà membre ?
                  <a href="#signin" class="to_register"> S'identifier </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-house"></i>Sistema </h1>
                  <p>© 2021 Tous droits réservés. Système de bureau d'avocats réalisé par Pierre Jean Roudy. Confidentialité et conditions</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        </div>
      </div>
    </div>
    <!--Recaptcha -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>