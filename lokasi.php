<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pemetaan SD Negeri di Kecamatan Mojolaban</title>

    <!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">
     <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
 <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    
  </head>
  <body>
    <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Pemetaan SD Negeri di Kecamatan Mojolaban</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item ">
                                    <a href="index.php ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="sd.php" class="nav-link">SD Negeri</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="lokasi.php" class="nav-link"> Lokasi SD </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">Login</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
        <div class="container-fluid">

<?php

include ('inc/config.php');
?>

<!DOCTYPE html>                     
<html lang="en">
 <head>
  <title>Input Maps</title>
  <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> --> <!-- old version, doesnt work in localhost --> 
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBRu3owYCjN4ZKDq1_FogBuzsujxxjRO2g&sensor=false" type="text/javascript"></script>
   <link rel="stylesheet" type="text/css" href="css/map-icons.css">
    <script type="text/javascript" src="js/map-icons.js"></script>  
    <style>
      
      .map-icon-label .map-icon {
          font-size: 12px;
          color: #FFFFFF;
          text-align: center;
          white-space: nowrap;
        }
    </style>

  <script>
    var marker;
      function initialize() {
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        


        // Pengambilan data dari database
       
           <?php
            $query = mysql_query("select * from lokasi");
            while ($data = mysql_fetch_array($query))
            {
               $nama = $data['nama'];                
                $lat = $data['lat'];
                $lon = $data['lng'];
 
                echo ("addMarker($lat, $lon, 'Nama SD : $nama<br/>Latitude : $lat<br/>Longitude : $lon <br/> ');\n");             
            }
          ?>

           

        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
               
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }

         
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
   </script>

 </head>
 
 <body>
  <div class="panel-body">
      <div id="map-canvas" style="width:1400px;height:600px;"></div>
  </div>
      
              <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
          </div>

      
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
