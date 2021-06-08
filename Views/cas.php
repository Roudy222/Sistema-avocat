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

              <img src="../Assets/Iconos/caso1.jpg" alt="..." width="25" height="80" class="img-circle profile_img">
              </div>
                <h3><small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="InsertarCaso.php?id_caso=<?php echo $row['id_caso'] ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Nouveau Cas</i></button>
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
                $query= "SELECT * FROM caso WHERE nombre_caso LIKE '%$searchKey%'";
              }else{

                ///$query= "SELECT * FROM caso_archivado ";

                $query= " SELECT caso.codigos_caso,caso.nombre_caso,caso.direccion_caso,caso.corte_caso,caso.tarifa_total_caso,
                caso_archivado.nombre_caso_archivado,cliente.clie_nombres_completos,categoria_caso.categoria_caso,escenario_caso.esce_Nombre,
                empresa.empr_nombre,caso.descripcion_caso,caso.estado_caso
                from caso 
                INNER join cliente on caso.id_cliente =cliente.id_cliente 
                INNER JOIN empresa ON caso.id_empr=empresa.id_empr
                INNER JOIN caso_archivado ON caso.id_caso_archivado=caso_archivado.id_caso_archivado
                INNER JOIN categoria_caso ON caso.id_categoria_caso=categoria_caso.id_categoria_caso
                INNER JOIN escenario_caso ON caso.id_escenario=escenario_caso.id_escenario" ; 
                $searchKey="";
              }
              
              $query_run=mysqli_query($conn,$query);
                ?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>CODES-CAS</th>
                          <th>NOM-CAS</th>
                          <th>DIRECTION-CASO</th>
                          <th>TRIBUNAL-CAS</th>
                          <th>TARIF-TOTAL</th>
                          <th>NOM-ARCHIVE</th>
                          <th>NOM-CLIENT</th>
                          <th>NOM-CATEGORIE</th>
                          <th>NOM-ESCENARIO</th>
                          <th>NOM-ENTREPRISE</th>
                          <th>DESCRIPTION-CAS</th>
                          <th>STATUS</th>
                          <th>ÉDITER</th>
                          <th>POUBELLE</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        
                        while($row= mysqli_fetch_array($query_run)){
                        
                        ?>
                      <tr>
                    <td><?php echo $row['codigos_caso']; ?></td>
                    <td><?php echo $row['nombre_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['direccion_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['corte_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['tarifa_total_caso']; ?></td>
                    <td><?php echo $row['nombre_caso_archivado']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_nombres_completos']; ?></td>
                    <td><?php echo $row['categoria_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['esce_Nombre']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_nombre']; ?></td>
                    <td class="hidden-phone"><?php echo $row['descripcion_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['estado_caso']; ?></td>

                    <td>
                    <a href="updateCas.php?id_caso=<?php echo $row['id_caso']; ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Editar</i></button>
                    </a> 
                    </td>
                    <td>
                   
                    <a href="DeleteCas.php?id_caso=<?php echo $row['id_caso']; ?>">
                   <button  href="#" type="submit"  class="btn btn-danger btn-xs" 
                   p-2 onclick="return confirm('Etes vous sur de inactivar  les données?');" ><i class="fa fa-trash-o "></i>
                   </button>
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