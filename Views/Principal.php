<?php
 include("../Template/Header.php");
 include("../Template/Navbar.php");
?>
                    <!-- page content -->
                    <div class="right_col" role="main">

                    <div class="">
                    <div class="page-title">
                        <div class="title_left">
                        <h3>Notre devise</h3>
                        </div>

                        <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                            <!--<input type="text" class="form-control" placeholder="Search for...">-->
                            <span class="input-group-btn">
                                <!--<button class="btn btn-default" type="button">Go!</button>-->
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                            <h2></h2>
                           
                            <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                 <!-- /col-md-4 -->
              
                 <!-- TOTAL DE CASO -->
                 <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>CAS</h5>
                  </div>
                  
                  <?php
                  $conn = mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'avocat'
                );
                
                    $query = "SELECT id_caso FROM caso ORDER BY  id_caso";
                    $query_run = mysqli_query($conn, $query); 
                    
                    $row = mysqli_num_rows($query_run);
                    echo'<h5>Total:'.$row.'</h5>';

                    echo "Rien de nouveau";
                    
                    ?>
                  <!--<p class="mt"><b>$ 17489980.50</b><br/>Ingreso mensual</p>-->
                </div>
              </div>
              
              <!-- TOTAL DE CASO_ARCHIVADO -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Cas Obtenus</h5>
                  </div>
                  
                  <?php
                  $conn = mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'avocat'
                );
                
                    $query = "SELECT id_caso_archivado FROM caso_archivado ORDER BY  id_caso_archivado";
                    $query_run = mysqli_query($conn, $query); 
                    
                    $row = mysqli_num_rows($query_run);
                    echo'<h5>Total:'.$row.'</h5>';

                    echo "Rien de nouveau";
                    
                    ?>
                  <!--<p class="mt"><b>$ 17489980.50</b><br/>Ingreso mensual</p>-->
                </div>
              </div>

              <!-- TOTAL DE CLIENTE -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Clientes</h5>
                  </div>
                  
                  <?php
                  $conn = mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'avocat'
                );
                
                    $query = "SELECT id_cliente FROM cliente ORDER BY  id_cliente";
                    $query_run = mysqli_query($conn, $query); 
                    
                    $row = mysqli_num_rows($query_run);
                    echo'<h5>Total:'.$row.'</h5>';

                    echo "Rien de nouveau";
                    
                    ?>
                  <!--<p class="mt"><b>$ 17489980.50</b><br/>Ingreso mensual</p>-->
                </div>
              </div>
              <!--/ col-md-4 -->                    
                                <div class="product-image form-group pull-center">
                                
                                <a><img src="../Assets/Iconos/LogoBalance.jpg" style="width:500" SELECT class="img-circle profile_img"><a>
                                
                                </div>
                             
        
                            <div class="col-md-12">

                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                        synth. Cosby sweater eu banh mi, qui irure terr.
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                        booth letterpress, commodo enim craft beer mlkshk aliquip
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                        booth letterpress, commodo enim craft beer mlkshk 
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