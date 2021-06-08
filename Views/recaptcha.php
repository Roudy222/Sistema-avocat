
  <?php
  if ($_POST) {
      $arrayName = array(
         'nombre_usua' => $_POST['nombre_usua'],
         'contrasena_usua' => $_POST['contrasena_usua']
      );
      $reCaptcha = $_POST["g-recaptcha-response"];
      $secret = "6LfzlE8aAAAAAL2mbnHqEhR-5IrCrC3yXRMA9-rb";
      $userIP = $_SERVER["REMOTE_ADDR"];
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
      $response = json_decode($response);
      if ($response->success) {
          echo "confirmado";
      }else{
          echo "Error de confirmacion";
      }
  }
  
  ?>