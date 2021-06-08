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

              <img src="../Assets/Iconos/audiencia.jpg" alt="..." width="25" height="80" class="img-circle profile_img">
              </div>
                <h3><small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="InsertarCaso.php?id_audiencia=<?php echo $row['id_audiencia'] ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Nouvelle Audience</i></button>
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
                $query= "SELECT * FROM audiencia  WHERE audie_nombre LIKE '%$searchKey%'";
              }else{

                ///$query= "SELECT * FROM caso_archivado ";

                $query= " SELECT audiencia.codigos_audiencia,audiencia.audie_nombre,audiencia.audie_juez_caso,
                audiencia.audie_fecha,audiencia.audie_testigos,audiencia.audie_direccion,cliente.clie_nombres_completos,
                caso.nombre_caso,escenario_caso.esce_Nombre,categoria_caso.categoria_caso,
                caso_archivado.descripcion_caso_archivado,audiencia.audie_estado
                from audiencia
                   INNER join cliente on audiencia.id_cliente =cliente.id_cliente 
                   INNER JOIN empresa ON audiencia.id_empr=empresa.id_empr
                   INNER JOIN caso_archivado ON audiencia.id_caso_archivado=caso_archivado.id_caso_archivado
                   INNER JOIN categoria_caso ON audiencia.id_categoria_caso=categoria_caso.id_categoria_caso
                   INNER JOIN escenario_caso ON audiencia.id_escenario=escenario_caso.id_escenario
                   INNER JOIN caso ON audiencia.id_caso=caso.id_caso"; 
                $searchKey="";
              }
              
              $query_run=mysqli_query($conn,$query);
                ?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>CODES-AUDIENCE</th>
                          <th>NOM-AUDIENCE</th>
                          <th>JUGE-AUDIENCE</th>
                          <th>DATE-AUDIENCE</th>
                          <th>TEMOINS</th>
                          <th>DIRECTION-AUDIENCE</th>
                          <th>NOM-CLIENT</th>
                          <th>NOM-CAS</th>
                          <th>NOM-ESCENARIO</th>
                          <th>NOM-CATEGORIE</th>
                          <th>DESCRIPTION-ARCHIVE</th>
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
                    <td><?php echo $row['codigos_audiencia']; ?></td>
                    <td><?php echo $row['audie_nombre']; ?></td>
                    <td class="hidden-phone"><?php echo $row['audie_juez_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['audie_fecha']; ?></td>
                    <td><?php echo $row['audie_testigos']; ?></td>
                    <td class="hidden-phone"><?php echo $row['audie_direccion']; ?></td>
                    <td><?php echo $row['clie_nombres_completos']; ?></td>
                    <td class="hidden-phone"><?php echo $row['nombre_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['esce_Nombre']; ?></td>
                    <td class="hidden-phone"><?php echo $row['categoria_caso']; ?></td>
                    <td class="hidden-phone"><?php echo $row['descripcion_caso_archivado']; ?></td>
                    <td class="hidden-phone"><?php echo $row['audie_estado']; ?></td>

                    <td>
                    <a href="updateAudie.php?id_audiencia=<?php echo $row['id_audiencia']; ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Editar</i></button>
                    </a> 
                    </td>
                    <td>
                    <a href="DeleteAudie.php?id_audiencia=<?php echo $row['id_audiencia'] ?>">
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