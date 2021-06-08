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
                       
                                    <h2>Entrer les données du cas<small></small></h2>
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
                                if(isset($_GET['id_caso']))
                                {
                                $id_caso=$_GET['id_caso'];
                                $query = "SELECT * FROM caso WHERE id_caso='$id_caso' ";
                                $query_run= mysqli_query($conn, $query);
                                if(mysqli_num_rows($query_run)==1){
                                    $row=mysqli_fetch_array($query_run);
                                    $nombre_caso=$row['nombre_caso'];
                                    $codigos_caso=$row['codigos_caso'];
                                    $direccion_caso=$row['direccion_caso'];
                                    $corte_caso=$row['corte_caso'];
                                    $tarifa_total_caso=$row['tarifa_total_caso'];
                                    $descripcion_caso=$row['descripcion_caso'];
                                    $estado_caso=$row['estado_caso'];
                                    $id_escenario=$row['id_escenario'];
                                    $id_categoria_caso=$row['id_categoria_caso'];
                                    $id_caso_archivado=$row['id_caso_archivado'];
                                    $id_cliente=$row['id_cliente'];
                                    $id_empr=$row['id_empr'];
                                    }   
                                }
                                ?> 
                                <div class="x_content">
                                    <form class="" action="Caso_bd.php?id_caso=<?php  echo $_GET['id_caso']; ?>" method="POST" enctype="Multipart/form-data" novalidate >
                                    <input type="hidden" name="update_id_caso" value="<?php  echo $row['id_caso']; ?>">    
                                    <p><code></code> <a href="#"></a>
                                        </p>
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom du cas<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input  type="text" name="update_nombre_caso" class="form-control" value="<?php echo  $row['nombre_caso']; ?>" placeholder="Entrar los codes " required="required"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Codes du cas<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_codigos_caso" value="<?php echo  $row['codigos_caso']; ?>" class="form-control" class='optional'   type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Direction<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_direccion_caso" value="<?php echo  $row['direccion_caso']; ?>" class="form-control" class='Telefono'  required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tribunal<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  name="update_corte_caso"  value="<?php echo  $row['corte_caso']; ?>" class="form-control"  class='email' required="required" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tarif total<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_tarifa_total_caso" value="<?php echo  $row['tarifa_total_caso']; ?>" class="form-control"  class='email'  data-validate-linked='Direccion' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"  value="<?php echo  $row['descripcion_caso']; ?>" class="form-control" class='email' name="update_descripcion_caso" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select type="text" name="update_estado_caso" placeholder="update_estado_caso" value="<?php echo  $row['estado_caso']; ?>" required="required" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Nouvelle">Nouvelle</option>
                                                <option value="En Procés">En Procés</option>
                                                <option value="Terminée">Terminée</option>
                                                </select>
                                                </div>
                                              </div>
                                       
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Escenario<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="update_id_escenario"  value="<?php echo  $row['id_escenario']; ?>" class="form-control" class='number'   required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Categorie<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea type="text" class="form-control" name="update_id_categoria_caso"  value="<?php echo  $row['id_categoria_caso']; ?>"required="required"  ></textarea></div>
                                        </div>
                                        
                                              <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'archive<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <imput type="text" class="form-control" name="update_id_caso_archivado"  value="<?php echo  $row['id_caso_archivado']; ?>"required="required" ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom du client<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="update_id_cliente" value="<?php echo  $row['id_cliente']; ?>"required="required"  ></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'entreprise<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" value="<?php echo  $row['id_empr']; ?>"required="required" name="update_id_empr" ></div>
                                        </div>
                                          <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="actualizarbtn" value="actualizarbtn">Save</button>
                                                     <!--<button class="btn btn-theme04" href="Location: departamento.php" type="submit">CANCELAR</button>-->
                                                    <a href="Cas.php" class="btn btn-danger">Annuler</a>
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