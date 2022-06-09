<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$kat="";
$web="";
$hp="";
$alamat="";
$kota="";
$prov="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_instansi;
  $ids.=$item->id_instansi;
  $kat.=$item->NPSN;
  $web.=$item->website;
  $hp.=$item->no_telepon;
  $alamat.=$item->alamat;
  $kota.=$item->kota;
  $prov.=$item->provinsi;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
//include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAh0M3vKIhVO26dTSA_UMx-x2dl1JKlanb"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 13,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIG SMAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>SIG</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <!--<li><a href="#about">About</a></li>
            <li><a href="#services">Maps</a></li> -->
            <!-- <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li> -->
            <!-- <li><a href="#contact">Contact</a></li>
            <li class="drop-down"><a href="detail/detailsekolah.php">Login</a>
              <ul>
                <li><a href="#">Login</a></li> -->
                <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> -->
                <!-- <li><a href="#">Register</a></li> -->
<!--                 <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li> -->
              <!-- </ul>
            </li> -->

            <li class="get-started"><a href="index.php#portfolio">Kembali</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <div class="container" style="padding-top: 120px;">
      <div class="row">
        
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>Informasi Instansi </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <!-- <th>Item</th> -->
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Sekolah</td>
                 <td><h5><?php echo $titles ?></h5></td>
               </tr>
               <tr>
                 <td>Lokasi</td>
                 <td><h5><?php echo $kota ?></h5></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h5><?php echo $prov ?></h5></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h5><?php echo $alamat ?></h5></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h5><?php echo $hp ?></h5></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h5><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h5></td>
               </tr>
             </table>
            </div>
            </div>
          </div>
          
        <div class="col-md-5" data-aos="zoom-in">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>Lokasi</strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIG</h3>
            <p>
              Jl. Ketintang, Ketintang <br>
              Gayungan, SBY 60231<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 895 0987 6543<br>
              <strong>Email:</strong> info@sigsma.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SMA Negeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SMK Negeri</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Ikuti info terbaru</h4>
            <p>Subscribe email</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SIG SMA&SMK</span></strong>.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/datatable-bootstrap.js"></script>

</body>

</html>
<!--     <?php include_once "footer.php"; ?> -->
