<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>
<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
<?php include "header.php" ?>
    <!--header end-->

    <!--sidebar start-->
    <?php include "sidebar.php" ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        <br>
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Seluruh Tempat Sampah di Universitas Syiah Kuala</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                         

                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Nama Tempat</th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                                <th>Alamat</th>
                                <th>Koordinat(Lat,Long)</th>
                               
                              </tr>
                            </thead>


                            <tbody>

                                    <?php
          

           $query = mysqli_query ($connect_db, "select * from tempatsampah");

           while ($row=mysqli_fetch_array($query)) {
        

                ?>

                              <tr>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['jenis'] ?></td>
                                <td><?php echo $row['kapasitas'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><?php echo $row['latitude'].' - '.$row['longitude'];  ?></td>
                                
                              </tr>
                             
                              <?php
              }
              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  
 


</body>

</html>
