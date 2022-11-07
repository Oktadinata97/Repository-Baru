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
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
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
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="sd.php" class="nav-link">SD Negeri</a>
                                </li>
                                <li class="nav-item">
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

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Daftar SD Negeri di Kecamatan Mojolaban </h2>
                         </div>
                </div>

<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Maps </title>
  </head>
  <body>
    <table class="table table-bordered">
        <tr>
          <td>ID</td>
          <td>Nama</td>
          <td>Alamat</td>
        </tr>
        
          <?php

          $link = mysql_connect('localhost','root','');
          $result = mysql_query('USE sd');          

          $result = mysql_query('SELECT * FROM tbdata_sd');
          if ($result==FALSE) {
            die(mysql_error());
          }
          while($dapat = mysql_fetch_array($result))
          
          {
          echo "
              <tr>
               <td>$dapat[id]</td>
               <td>$dapat[nama_sd]</td>
         
               <td>$dapat[alamat] </td>
              </tr>
            ";
          }
      ?>
      
      </table>
      <p>&nbsp;</p>
</body>
</html>


                <div class="row">

                    <div class="col-xs-12 tm-copyright-col">
                    <br><br><br><br>    <p> Copyright 2020</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>