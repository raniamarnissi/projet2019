﻿


<?php
    session_start();

    if(isset($_SESSION['username']) =="") {
        header("Location: login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RedCaynne Re</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       <div id="preloader">
            <div class="loader absolute-center">
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
            </div>
        </div>
       
        <!--================ Frist hader Area =================-->
        <div class="first_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header_contact_details">
                            <a href="#"><i class="fa fa-phone"></i>+1 (168) 314 5016</a>
                            <a href="#"><i class="fa fa-envelope-o"></i>+1 (168) 314 5016</a>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Footer Area =================-->
        
        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/logorest.png" style="width:140px;height:80px;" alt="logo"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                        <h5 class="text-info">Username : <?php echo $_SESSION['username']?></h5>
                        <li><a href="modif.php" class="fa fa-user">client</a></li>
                            <li><a href="index.php">Home</a></li>
                            <li class="dropdown submenu active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About US <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-us2.html">About Us2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="menu-grid.html">Menu Grid</a></li>
                                    <li><a href="menu-list.html">Menu List</a></li>
                                </ul>
                            </li>
                            <li><a href="commende.php">liste commande</a></li>
                            
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-gallery.html">Blog Gallery</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact US</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <a href="logout.php" class="btn btn-sm btn-outline-secondary">Déconnexion</a>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->
          <!--================Banner Area =================-->
       
        <!--================End Banner Area =================-->
 
        
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des vehicule</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                     if ($_GET['notif'] == 'add') echo 'Client ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Client modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'vehicule supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <br>
        <br>
<a href="createvehicule.php" class="btn btn-primary">Nouveau vehicule</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>vid</th>
                    <th>statut</th>
                    <th>num_vehicule</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/vehicule.class.php';
                    $vehicule = new vehicule;
                    $listVehicule = $vehicule->readAllVehicule();
                    $data = $listVehicule->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $vehiculeData):
                    ?>
                        <tr>
                            <td><?= $vehiculeData['vid'] ?></td>   
                            <td><?= $vehiculeData['statut'] ?></td>   
                            <td><?= $vehiculeData['num_vehicule'] ?></td> 
                            
                             <td>
                             <a href='editevehicule.php?vid=<?= $vehiculeData['vid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;  
                           <a href='deletevehicule.php?vid=<?=$vehiculeData['vid']?>'<button type="submit" class="btn btn-danger">supprimer le vehicule</button></a> &nbsp;&nbsp;
    

 
                            </td>
                        </tr>
                    <?php endforeach //on ferme la boucle qu'on a ouvert précédemment avec php ?>
            </tbody>
        </table>
    </div>
</html>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        <!--gmaps Js-->
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->
<!--        <script src="js/gmaps.min.js"></script>-->
        
        
<!--        <script src="js/video_player.js"></script>-->
        <script src="js/theme.js"></script>
    </body>
</html>