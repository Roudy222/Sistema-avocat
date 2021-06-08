<?php
 include("../Template/Header.php");
 include("../Template/Navbar.php");
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <div class="profile_pic">

              <img src="../Assets/Iconos/tarea.jpg" alt="..." width="25" height="80" class="img-circle profile_img">
              </div>
                <h3><small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="InsertarTare.php?id_tarea=<?php echo $row['id_tarea'] ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Nouvelle Tâche</i></button>
                    </a>  <small></small></h2>
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
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      <code></code>
                    </p>
                    <?PHP 
                $conn = mysqli_connect('localhost','root','','avocat');
              if (isset($_POST['caja_busqueda'])) {
                $searchKey = $_POST['caja_busqueda'];
                $query= "SELECT * FROM tarea WHERE tare_nombre LIKE '%$searchKey%'";
              }else{

                ///$query= "SELECT * FROM caso_archivado ";

                $query= " SELECT tarea.tare_codigos,tarea.tare_nombre,tarea.tare_fecha_inicial,
                 tarea.tare_fecha_final,tarea.tare_descripcion,tarea.tare_estado, 
                 empleado.empl_nombre_completo,empresa.empr_nombre 
                 from tarea 
                 INNER join empresa on tarea.id_empr = empresa.id_empr
                 INNER join empleado on tarea.id_empleado = empleado.id_empleado ";
                $searchKey="Par el nom";
              }
              
              $query_run=mysqli_query($conn,$query);
                ?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>CODES-TACHES</th>
                          <th>NOM-TACHES</th>
                          <th>DATE-INICIAL</th>
                          <th>DATE-FINAL</th>
                          <th>DIRECTION-TACHES</th>
                          <th>STATUS-TACHES</th>
                          <th>NOM-EMPLOYÉ</th>
                          <th>NOM-ENTREPRISE</th>
                          <th>ÉDITER</th>
                          <th>POUBELLE</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        
                        while($row= mysqli_fetch_array($query_run)){
                        
                        ?>
                      <tr>
                    <td><?php echo $row['tare_codigos']; ?></td>
                    <td><?php echo $row['tare_nombre']; ?></td>
                    <td class="hidden-phone"><?php echo $row['tare_fecha_inicial']; ?></td>
                    <td class="hidden-phone"><?php echo $row['tare_fecha_final']; ?></td>
                    <td class="hidden-phone"><?php echo $row['tare_descripcion']; ?></td>
                    <td class="hidden-phone"><?php echo $row['tare_estado']; ?></td>
                    <td><?php echo $row['empl_nombre_completo']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_nombre']; ?></td>
                   
                    <td>
                    <a href="updateTare.php?id_tarea=<?php echo $row['id_tarea']; ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Editar</i></button>
                    </a> 
                    </td>
                    <td>
                    <a href="DeleteTare.php?id_tarea=<?php echo $row['id_tarea'] ?>">
                   <button  href="#" type="submit"  class="btn btn-danger btn-xs" p-2 onclick="return confirm('Etes vous sur de eliminer les données?');" ><i class="fa fa-trash-o "></i></button>
                    </a> 
                    </td> 
                    </tr>                 
                    
                    <?php } ?>  
                      </tbody>
                    </table>
	
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

     <?php
        include("../Template/Footer.php");
        ?>