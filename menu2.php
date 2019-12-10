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
        <title>Food ordering</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

       
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
                            <a href="#"><i class="fa fa-phone"></i>+126 71845296</a>
                            <a href="#"><i class="fa fa-envelope-o"></i>+126 28459621</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_btn_inner">
                            
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

                            <li class="dropdown submenu"><a href="index.php">Home</a></li>
                            <li class="dropdown submenu">
                                <a href="menu2.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="menu2.php">Menu</a></li>
                                    
                                </ul>
                            </li>
							<li class="dropdown submenu">
                                <a href="menu.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About US <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                </ul>
                            </li>                           

                            <li><a href="contact.php">Contact US</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <a href="logout.php" class="btn btn-sm btn-outline-secondary">Déconnexion</a>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->


          <!--================Banner Area =================-->
          <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>our menu</h4>
                   
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->




	<!-- menu -->
	
	<section class="portfolio py-5">

			<div class="container py-xl-5 py-lg-3">
	<?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Produit ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Produit modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Produit supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
			
				
<div>

<?php
        include 'classes/produit.class.php';
         $produit = new Produit;
                    $listProduit = $produit->readAllProduit();
					$data = $listProduit->fetchAll();
					
                    foreach($data as $produitData):
        ?>
	
    
		<div style="grid-row:25% 25% 25%">	<div style=" margin-top: 8px;
        margin-left:-20px;
  vertical-align: middle;
  display: flex; ">
 
    <table>
	<thead>
	<tr>
				<td><img src = "<?php echo $produitData['fichier'] ?>" style="width:300px;height:200px;border:5000px; " /></td>
                </tr>
				</thead>
	               <tbody>
				 <tr><td> <h2  style="font-family:aria;text-align:center;"><?=$produitData['nom']?></h2></td>
			    </tr>

			    <tr>	  
				    <td style="text-align:center;"><?= $produitData['descr']?></td>
			    </tr>

			    <tr>	  
			        <td style="text-align:center;"><?= $produitData['prix']?> DT</td>
				</tr>
					
			    
			    <tr>
				    <td>
                    <br>
                    <a href="panieraff.php?nom=<?php echo$produitData['nom'];?>&amp pid=<?php echo$produitData['pid'];?>"><button class="btn btn-outline-success" type="submit">Acheter </button></a> &nbsp;&nbsp;

					    <!--a href="login.php"><button class="btn btn-outline-info" type="submit" style="margin-left:90px;"Add to panier </button></a>--> &nbsp;&nbsp;
                        <br><br>
                    </td>
				</tr>	
		&nbsp;&nbsp;&nbsp;&nbsp;      
			<?php endforeach ?>
			
		</tbody>
	 </table>

	 </div>
</div>

	</section>

	<!-- //menu -->
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                    <h4>ABOUT Tasty Food</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <p>Have questions, comments or just want to say hello:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>tastyfood@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+126 28459621</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>5001 Bizerte. Jarzouna. Suite 820</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h4>Twitter Feed</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget gallery_widget">
                                <div class="f_w_title">
                                    <h4>Gallery On Flickr</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-1.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-2.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-3.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-4.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-5.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-6.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart-o" aria-hidden="true"></i>
</p></h5>
                    </div>
                </div>
            </div>
        </footer>
    
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
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