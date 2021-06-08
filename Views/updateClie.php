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
                       
                                    <h2>Entrer les données de Éditar<small></small></h2>
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
                                if(isset($_GET['id_cliente']))
                                
                                {
                                $id_cliente=$_GET['id_cliente'];
                                $query = "SELECT * FROM cliente WHERE id_cliente='$id_cliente' ";
                                $query_run= mysqli_query($conn, $query);
                                if(mysqli_num_rows($query_run)==1){
                                    $row=mysqli_fetch_array($query_run);
                                    $clie_cogidos=$row['clie_cogidos'];
                                    $clie_nombres_completos=$row['clie_nombres_completos'];
                                    $clie_dni=$row['clie_dni'];
                                    $clie_tipo_dni=$row['clie_tipo_dni'];
                                    $clie_direccion=$row['clie_direccion'];
                                    $clie_email=$row['clie_email'];
                                    $clie_nacionalidad=$row['clie_nacionalidad'];
                                    $clie_telefono=$row['clie_telefono'];
                                    $clie_descripcion=$row['clie_descripcion'];
                                    $clie_estado=$row['clie_estado'];
                                    $id_empr=$row['id_empr'];
                                    }   
                                }
                                ?> 
                                <div class="x_content">
                                    <form class="" action="Cliente_bd.php?id_cliente=<?php  echo $_GET['id_cliente']; ?>" method="POST" enctype="Multipart/form-data" novalidate >
                                    <input type="hidden" name="update_id_cliente" value="<?php  echo $row['id_cliente']; ?>">    
                                    <p><code></code> <a href=""></a>
                                        </p>
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Codes<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input  type="text" name="update_clie_cogidos" class="form-control" value="<?php echo  $row['clie_cogidos']; ?>" placeholder="Entrar los codes " required="required"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom Complet<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_clie_nombres_completos" value="<?php echo  $row['clie_nombres_completos']; ?>" class="form-control" class='optional'   type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Carte Identité<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_clie_dni" value="<?php echo  $row['clie_dni']; ?>" class="form-control" class='Telefono'  required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Type de Identité<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  name="update_clie_tipo_dni"  value="<?php echo  $row['clie_tipo_dni']; ?>" class="form-control"  class='email' required="required" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Direction<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_clie_direccion" value="<?php echo  $row['clie_direccion']; ?>" class="form-control"  class='email'  data-validate-linked='Direccion' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  value="<?php echo  $row['clie_email']; ?>" class="form-control" class='email' name="update_clie_email" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nationalité<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" value="<?php echo  $row['clie_nacionalidad']; ?>"required="required" name="update_clie_nacionalidad" ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_clie_telefono"  value="<?php echo  $row['clie_telefono']; ?>" class="form-control" class='number'   required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea type="text" class="form-control" name="update_clie_descripcion"  value="<?php echo  $row['clie_descripcion']; ?>"required="required"  ></textarea></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select type="text" name="update_empr_estado" placeholder="update_clie_estado" value="<?php echo  $row['clie_estado']; ?>" required="required" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Nouvelle">Nouvelle</option>
                                                <option value="En Procés">En Procés</option>
                                                <option value="Terminée">Terminée</option>
                                                </select>
                                                </div>
                                              </div>
                                              <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'entreprise<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <imput type="text" class="form-control" name="update_id_empr"  value="<?php echo  $row['id_empr']; ?>"required="required" ></div>
                                        </div>
                                          <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="actualizarbtn" value="actualizarbtn">Save</button>
                                                     <!--<button class="btn btn-theme04" href="Location: departamento.php" type="submit">CANCELAR</button>-->
                                                    <a href="Clientes.php" class="btn btn-danger">Annuler</a>
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