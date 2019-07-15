<!DOCTYPE html>
<html lang="en">
<?php include "config.php" ?>
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
        <section class="bar background-white no-mb">
            <div class="container">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h3>Peta Rute Sampah Usyiah</h3><br><br>
                            
                            <div id="map"></div>



                            <div id="koordinat"></div>

                           
                        </div>

                </div>
            </div>
        </section>
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
  <script>
  //var map;
  var infowindow;

  function initMap() {


    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {

        var pyrmont = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 18
        });

        var positionMarker;

        positionMarker = new google.maps.Marker({
          map: map,
          position: pyrmont,
        });

        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 5000
          
          //callback2 untuk manggil data dari database yang diinput oleh user
        }, callback);
      }, function() {
        handleLocationError();
      });
    } else {
      handleLocationError();
    }

    infowindow = new google.maps.InfoWindow();

  }

  function handleLocationError() {
    alert("Tidak dapat mendeteksi lokasi.\nKoordinat default adalah:\nlat: 5.892621\nlong: 95.323857");

    var pyrmont = {
      lat : 5.892621,
      lng : 95.323857
    };

    map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 18
    });

    var positionMarker;

    positionMarker = new google.maps.Marker({
      map: map,
      position: pyrmont,
    });

    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch({
      location: pyrmont,
      radius: 5000
    }, callback);
  }

//manggil marker data dari inputan user
function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
    }
  }

  function createMarker(place) {
    <?php 
    $query = mysqli_query($connect_db,"select * from tempatsampah");
    while($row=mysqli_fetch_array($query)){ 
      
      ?>
    var image = {
      
      scaledSize: new google.maps.Size(32, 32), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
    };

    var placeLoc = place.geometry.location;

    var marker = new google.maps.Marker({

      map: map,
      position: {lat: <?php echo $row['latitude'] ?>, lng: <?php echo $row['longtitude'] ?>},
      icon: image

    });

    google.maps.event.addListener(marker, 'click', function() {

      infowindow.setContent("<?php echo "<img src='".$row['gambar']."' alt='Smiley face' height='42' width='42'>"."<p>".$row['nama']."</p><p>".$row['jenis']."</p><p>".$row['alamat']."</p><p>".$row['kapasitas']."</p>" ?>");
      infowindow.open(map, this);

    });
    <?php } ?>

  }




</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBes_a5dscPmGcr5TGV34RNirVcgKP9SdM&libraries=places&callback=initMap" async defer></script>


  


</body>

</html>
