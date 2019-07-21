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

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Elements
              </header>
              <form action ="proses_input_data.php" method="POST" enctype="multipart/form-data">
              <div class="panel-body">
              
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Jenis</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Kapasitas</label>
                    <div class="col-sm-8">
                      <input type="text" name="kapasitas" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="exampleInputFile">Upload Gambar</label>
                    <div class="col-sm-8"><input type="file" name="gambar" id="exampleInputFile"></div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Latitude</label>
                    <div class="col-sm-8">
                      <input type="text" name="latitude" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Longitude</label>
                    <div class="col-sm-8">
                      <input type="text" name="longitude" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" required="required" class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <center>
                <button type="submit" class="btn btn-success" name="simpan">Submit</button>
                </center>
                </div>
                </form>
            </section>
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
