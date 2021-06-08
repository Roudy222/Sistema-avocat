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

              <img src="../Assets/Iconos/cliente.jpg" alt="..." width="25" height="80" class="img-circle profile_img">
              </div>
                <h3><small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="InsertarClie.php?id_cliente=<?php echo $row['id_cliente'] ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Nouveau Client</i></button>
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
                $query= "SELECT * FROM cliente WHERE clie_nombres_completos  LIKE '%$searchKey%'";
              }else{

                ///$query= "SELECT * FROM caso_archivado ";

                $query= " SELECT cliente.clie_cogidos,cliente.clie_nombres_completos,cliente.clie_dni,
                cliente.clie_tipo_dni,cliente.clie_direccion,cliente.clie_email,cliente.clie_nacionalidad,
                cliente.clie_telefono,cliente.clie_descripcion,empresa.empr_nombre,cliente.clie_estado 
                from cliente INNER join empresa on cliente.id_empr = empresa.id_empr"; 

                $searchKey="";
              }
              
              $query_run=mysqli_query($conn,$query);
                ?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>CODES-CLIENTS</th>
                          <th>NOM-CLIENTS</th>
                          <th>IDENTITÉ-CLIENT</th>
                          <th>TYPE-IDENTITÉ</th>
                          <th>DIRECTION-CLIENT</th>
                          <th>EMAIL-CLIENT</th>
                          <th>NACIONALITÉ-CLIENT</th>
                          <th>TELEPHONE-CLIENT</th>
                          <th>DESCRIPTION-CLIENT</th>
                          <th>STATUS-CLIENT</th>
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
                    <td><?php echo $row['clie_cogidos']; ?></td>
                    <td><?php echo $row['clie_nombres_completos']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_dni']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_tipo_dni']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_direccion']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_email']; ?></td>
                    <td><?php echo $row['clie_nacionalidad']; ?></td>
                    <td class="hidden-phone"><?php echo $row['clie_telefono']; ?></td>
                    <td><?php echo $row['clie_descripcion']; ?></td>
                    <td><?php echo $row['clie_estado']; ?></td>
                    <td class="hidden-phone"><?php echo $row['empr_nombre']; ?></td>
                    
                    <td>
                    <a href="updateClie.php?id_cliente=<?php echo $row['id_cliente']; ?>">
                    <button href="#" type="submit" class="btn btn-success btn-xs"p-2><i class="fa fa-pencil">Editar</i></button>
                    </a> 
                    </td>
                    <td>
                    <a href="DeleteClie.php?id_cliente=<?php echo $row['id_cliente'] ?>">
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