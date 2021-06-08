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

              <img src="../Assets/Iconos/Documento.png" alt="..." width="25" height="80" class="img-circle profile_img">
              </div>
                <h3><small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="InsertarArch.php?id=<?php echo $row['id'] ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Nouveau Document</i></button>
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
                $query= "SELECT * FROM caso_archivado WHERE nombre_caso_archivado  LIKE '%$searchKey%'";
              }else{

                ///$query= "SELECT * FROM caso_archivado ";

                $query= " SELECT cliente.clie_cogidos,caso_archivado.nombre_caso_archivado,cliente.clie_nombres_completos,empresa.empr_Codigos,empresa.empr_Direccion,
                 empresa.empr_nombre,caso_archivado.descripcion_caso_archivado from caso_archivado INNER join cliente on caso_archivado.id_cliente =cliente.id_cliente INNER JOIN empresa ON caso_archivado.id_empr=empresa.id_empr"; 
                $searchKey="";
              }
              
              $query_run=mysqli_query($conn,$query);
                ?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>CODES-CLIENTS</th>
                          <th>NOM-ARCHIVES</th>
                          <th>NOM-CLIENTS</th>
                          <th>CODES-ENTREPRISE</th>
                          <th>DIRECTION-ENTREPRISE</th>
                          <th>NOM-ENTREPRISE</th>
                          <th>DESCRIPTION-ARCHIVES</th>
                          <th>ÉDITER</th>
                          <th>POUBELLE</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        
                        while($row= mysqli_fetch_array($query_run)){
                        
                        ?>
                      <tr>
                    <td><?php echo $row['clie_cogidos']; ?></td>
                    <td><?php echo $row['nombre_caso_archivado']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_nombres_completos']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_Codigos']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_Direccion']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_nombre']; ?></td>
                    <td><?php echo $row['descripcion_caso_archivado']; ?></td>

                    <td>
                    <a href="updateArchiv.php?id_caso_archivado=<?php echo $row['id_caso_archivado']; ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Editar</i></button>
                    </a> 
                    </td>
                    <td>
                    <a href="DeleteArchiv.php?id_caso_archivado=<?php echo $row['id_caso_archivado'] ?>">
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