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
                                if(isset($_GET['id_empr']))
                                {
                                $id_empr=$_GET['id_empr'];
                                $query = "SELECT * FROM empresa WHERE id_empr='$id_empr' ";
                                $query_run= mysqli_query($conn, $query);
                                if(mysqli_num_rows($query_run)==1){
                                    $row=mysqli_fetch_array($query_run);
                                    $empr_Codigos=$row['empr_Codigos'];
                                        $empr_nombre=$row['empr_nombre'];
                                        $empr_telefono=$row['empr_telefono'];
                                        $empr_Nif=$row['empr_Nif'];
                                        $empr_Direccion=$row['empr_Direccion'];
                                        $empr_impuesto=$row['empr_impuesto'];
                                        $empr_sector=$row['empr_sector'];
                                        $empr_email=$row['empr_email'];
                                        $empr_descripcion=$row['empr_descripcion'];
                                        $empr_estado=$row['empr_estado'];
                                    }   
                                }
                                ?> 
                                <div class="x_content">
                                    <form class="" action="Entreprise_bd.php?id_empr=<?php  echo $_GET['id_empr']; ?>" method="POST" enctype="Multipart/form-data" novalidate >
                                    <input type="hidden" name="update_id_empr" value="<?php  echo $row['id_empr']; ?>">    
                                    <p><code></code> <a href=""></a>
                                        </p>
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Codes<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input  type="text" name="update_empr_Codigos" class="form-control" value="<?php echo  $row['empr_Codigos']; ?>" placeholder=" " required="required"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_empr_nombre" value="<?php echo  $row['empr_nombre']; ?>" class="form-control" class='optional'   type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_empr_telefono" value="<?php echo  $row['empr_telefono']; ?>" class="form-control" class='Telefono' type="number"  required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nif<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  name="update_empr_Nif"  value="<?php echo  $row['empr_Nif']; ?>" class="form-control"  class='email' required="required" type="Nif" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Direction<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_empr_Direccion" value="<?php echo  $row['empr_Direccion']; ?>" class="form-control" type="Direccion" class='email'  data-validate-linked='Direccion' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Impots<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  value="<?php echo  $row['empr_impuesto']; ?>" class="form-control" class='Impuesto' type="number" name="update_empr_impuesto" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Secteur<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" value="<?php echo  $row['empr_sector']; ?>"required="required" name="update_empr_sector" ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_empr_email"  value="<?php echo  $row['empr_email']; ?>" class="form-control" type="Email" class='number'   required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea type="text" class="form-control" name="update_empr_descripcion"  value="<?php echo  $row['empr_descripcion']; ?>"required="required" name="update_empr_Descripcion" ></textarea></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select name="update_empr_estado" placeholder="update_empr_ estado" value="<?php echo  $row['empr_estado']; ?>" required="required" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Nouvelle">Nouvelle</option>
                                                <option value="En Procés">En Procés</option>
                                                <option value="Terminée">Terminée</option>
                                                </select>
                                                </div>
                                              </div>
                                          <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="actualizarbtn" value="actualizarbtn">Save</button>
                                                     <!--<button class="btn btn-theme04" href="Location: departamento.php" type="submit">CANCELAR</button>-->
                                                    <a href="Entreprise.php" class="btn btn-danger">Annuler</a>
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