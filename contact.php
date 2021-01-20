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
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162431.145625516!2d74.208243062061!3d16.606865999929273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0ffc2ed74c593%3A0x57b56a9666bef7d3!2sGOSHIMA+Office!5e0!3m2!1sen!2sin!4v1561985726849!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">Location</a>
                            <a href="#">Phone</a>
                            <a href="#">Email</a>
                            <a href='#'>Web-site</a>
                        </div>
                        <div class="address">
                            <a href="#">P-35, MIDC,<br>Gokul Shirgaon, Kolhapur - 416234 </a>
                            <a href="#">(0231) 2672400 </a>
                            <a href="#">goshima2012@gmail.com</a>
                            <a href="index.php">www.goshima.in</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message" id="mailus">
                    <h2>Send Us a Message</h2>
                    <form class="form-inline contact_box" action="form-to-email.php" method="post">
                        <input type="text" name="fname" class="form-control input_box" placeholder="First Name *" required>
                        <input type="text" name="lname" class="form-control input_box" placeholder="Last Name *" required>
                        <input type="text" name="semail" class="form-control input_box" placeholder="Your Email *" required>
                        <input type="text" name="subject" class="form-control input_box" placeholder="Subject">
                        <input type="text" name="sweb" class="form-control input_box" placeholder="Your Website">
                        <textarea name="message" class="form-control input_box" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-default" name="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Footer Area -->
    <!--<?php include ("advert.php");?>-->
   <?php include("footer.php"); ?> 
    <!-- End Footer Area -->

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
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
