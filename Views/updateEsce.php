<?php  
        //session_start();
        include("Entreprise_bd.php");
        include("../Template/Header.php");
        include("../Template/Navbar.php");
        ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                        <div class="profile_pic">

                <img src="../Assets/Imagenes/Escribir-Caso.png" alt="..." class="img-circle profile_img">
              </div>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <!--<input type="text" class="form-control" placeholder="Search for...">-->
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                       
                                    <h2>Entrer les données de scenario<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                                if(isset($_GET['id_escenario']))
                                {
                                $id_escenario=$_GET['id_escenario'];
                                $query = "SELECT * FROM escenario_caso WHERE id_escenario='$id_escenario' ";
                                $query_run= mysqli_query($conn, $query);
                                if(mysqli_num_rows($query_run)==1){
                                    $row=mysqli_fetch_array($query_run);
                                    $esce_Nombre=$row['esce_Nombre'];
                                    
                                   
                                    }   
                                }
                                ?> 
                                <div class="x_content">
                                    <form class="" action="Esce_bd.php?id_escenario=<?php  echo $_GET['id_escenario']; ?>" method="POST" enctype="Multipart/form-data" novalidate >
                                    <input type="hidden" name="update_id_escenario" value="<?php  echo $row['id_escenario']; ?>">    
                                    <p><code></code> <a href="#"></a>
                                        </p>
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom du scenario <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input  type="text" name="update_esce_Nombre" class="form-control" value="<?php echo  $row['esce_Nombre']; ?>" placeholder="Entrar el nom " required="required"/></div>
                                            </div>
                                            </div>
                                          <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="actualizarbtn" value="actualizarbtn">Save</button>
                                                     <!--<button class="btn btn-theme04" href="Location: departamento.php" type="submit">CANCELAR</button>-->
                                                    <a href="escenario.php" class="btn btn-danger">Annuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            
    
    <!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

       <?php
        include("../Template/Footer.php");
        ?>