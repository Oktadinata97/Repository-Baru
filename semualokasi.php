<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    // <title>Pemetaan SD Negeri di Kecamatan Mojolaban</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Index</a>
                    </li>
                    <li>
                        <a href="tambahlokasi.php"><i class="fa fa-fw fa-bar-chart-o"></i> Tambah Lokasi</a>
                    </li>
                    <li>
                        <a href="daftarlokasi.php"><i class="fa fa-fw fa-table"></i> Daftar Hotel</a>
                       		  
                    </li>
					<li>
                        <a href="lokasisaya.html"><i class="fa fa-fw fa-table"></i> Lokasi Saya </a>
                    </li>
					<li>
                        <a href="rute.php"><i class="fa fa-fw fa-table"></i> Pencarian Rute </a>
                    </li>
                    <li class="active">
                        <a href="semualokasi.php"><i class="fa fa-fw fa-edit"></i> Semua Lokasi</a>
                    </li>
                   <li>
                        <a href="about.php"><i class="fa fa-fw fa-table"></i> About </a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Semua Lokasi Hotel</h1>
                  </div>
                </div>
                <!-- /.row -->
                
<?php

include ('inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Input Maps</title>
  <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> --> <!-- old version, doesnt work in localhost --> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkkzEhmSxFqd6RlVgVoJwWvW1XpIorjio&sensor=false" type="text/javascript"></script>

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
            $query = mysql_query("select * from tbl_data");
            while ($data = mysql_fetch_array($query))
            {
                $nama = $data['nama'];
                $lat = $data['x'];
                $lon = $data['y'];
				
        
                echo ("addMarker($lat, $lon,  'Lokasi : $nama<br/>Latitude : $lat<br/>Longitude : $lon <br/>  ');\n");                      
            }
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
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
      <div id="map-canvas" style="width:900px;height:400px;"></div>
  </div>
 </body>
</html>
                <div class="row"></div>
          <!-- /.row -->

                <div class="row"></div>
    <!-- /.row -->

                <div class="row"></div>
          <!-- /.row -->

                <div class="row"></div>
              <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
