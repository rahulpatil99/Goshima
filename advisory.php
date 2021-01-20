<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GOSHIMA</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />


</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>


	<?php include("header.php"); ?> 

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Advisory</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">Services</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow" id="Hallid">
        <div class="container" >
        <div class="col-sm-5 constructing_right">
                    <h2>Our Committees</h2>
                    <ul class="painting">
                        <li><a href="#container"  onclick="toggle_visibility('1');"><i  aria-hidden="true"></i>Afforestation Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('2');"><i  aria-hidden="true"></i>Fondry Cluster Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('3');"><i  aria-hidden="true"></i>Building and Fund Raising Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('4');"><i  aria-hidden="true"></i>Goshima Newspaper and Website Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('5');"><i  aria-hidden="true"></i>Mahavitaran, Industry and Government Tax Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('6');"><i  aria-hidden="true"></i>Seminar Committee</a></li>
                        <li><a href="#container" onclick="toggle_visibility('7');"><i  aria-hidden="true"></i>Block Committee</a></li>
                    </ul>                    
                </div>      
            <div class="architecture_area services_pages">
                <div class="portfolio_filter portfolio_filter_2">
                </div>
                <div class="portfolio_item portfolio_2" >
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>Advisory</h2>
                            </div><br>
                             <br><p align="justify">In order to run an industry you may face different difficulties. Gokul Shirgaon Manufacturers Association (GOSHIMA) gives advisory services through Domain Experts heading the committees. This service may help you to come out of your problem or you may get the knowledge how to solve your problems. These committees are representatives of the Industrial Profile of the Kolhapur Region.</p>
                          
                            <a href="contact.php" class="button_all">Contact</a>
                        </div>
                    </div>

                    <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/advice1.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Our Services Area -->

    <?php include("footer.php"); ?> 
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
