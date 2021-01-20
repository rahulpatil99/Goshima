<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
     <meta meta name="viewport" content=  
            "width=device-width, user-scalable=no" /> 
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
<!-- Ticker -->
<link href="css/ticker.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



 <!-- Slider area -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!--INDICATOR-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
        </ol> 
        <!--WRAPPER FOR SLIDES-->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slider/goshima logo 2.jpg" alt="First" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/slider/goshima logo.jpg" alt="First" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/slider/001.jpg" alt="First" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/slider/002.jpg" alt="First" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/slider/003.jpg" alt="First" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/slider/004.JPG" alt="First" style="width:100%;">
            </div>
            <!--<div class="item">-->
            <!--    <img src="images/slider/01.jpg" alt="First" style="width:100%;">-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--    <img src="images/slider/03.jpg" alt="First" style="width:100%;">-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--    <img src="images/slider/04.jpg" alt="First" style="width:100%;">-->
            <!--</div>-->
            <div class="item">
                <img src="images/slider/05.jpg" alt="First" style="width:100%;">
            </div>
            <!--<div class="item">-->
            <!--    <img src="images/slider/06.jpg" alt="First" style="width:100%;">-->
            <!--</div>-->
            <div class="item">
                <img src="images/slider/07.jpg" alt="First" style="width:100%;">
            </div>
            <!--<div class="item">-->
            <!--    <img src="images/slider/005.JPG" alt="First" style="width:100%;">-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--    <img src="images/slider/006.jpeg" alt="First" style="width:100%;">-->
            <!--</div>-->
            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
        </div>

    </div>
   



<!-- Ticker -->
<link href="css/ticker.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<!--
<link href="css/ticker.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="js/ticker.bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">
                    <?php
                    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM notification where expire >= CURRENT_DATE() or status>1");
                if(mysqli_num_rows($i)){
                    while($row=mysqli_fetch_assoc($i)){
                        echo "<span class='glyphicon glyphicon-forward' style='padding-left:50px ; padding-right:10px'></span>{$row['title']}&nbsp;&nbsp;";
                    }
                }
          ?>
                </marquee>
                <!--    <span class="glyphicon glyphicon-forward"></span>ISO 9001:2015 Certified-->
                <!--&nbsp;&nbsp;-->
                <!--<span class="glyphicon glyphicon-forward"></span>Inauguration of GOSHIMA Official Website on 13<sup>th</sup>October, 2019  -->
                <!-- &nbsp;&nbsp;-->
                <!-- <span class="glyphicon glyphicon-forward"></span>Annual General Meeting (AGM) on 13<sup>th</sup>October, 2019-->
                
                
                <span class="onoffswitch3-switch">Important Updates.!!!<span class="glyphicon glyphicon-remove"></span></span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
        </span>
    </label>
</div>
    

    

<!-- Timeline and Downloads-->
<br>

<link rel="stylesheet" href="css/timeline.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6" >
     <div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h4>Gokul Shirgaon Manufacturers Association</h4>
      
          <br/>
          <p>GOSHIMA is the catalyst required by every industry to run their industry at Gokul Shirgaon, Kolhapur. The efforts of GOSHIMA let them be in interacting with Government officials or portraying the problems of industrialists as a whole or encouraging industrial growth and quality, resulting in huge rewards and benefits to every industry.<a href="about.php"> Read More...</a></p>
        
    </div>
  </div>
</div>
    </div>


<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h4>Upcoming Events</h4>
      <ul class="timeline">
          <?php
            $_con=mysqli_connect("localhost","root","","u519790871_goshi");
            $i=mysqli_query($_con,"SELECT * FROM events where date > CURRENT_DATE()");
            while($row = mysqli_fetch_assoc($i)){
                $date = explode(' ',date('d F Y', strtotime($row["date"])));
                echo "<li>
                      <p><b>{$row["title"]}</b></p>
                        <a href='#' class='float-right'>{$date[0]}<sup>th</sup> {$date[1]}, {$date[2]}</a>
                        </li>";
            }
        ?>
        <!--<li>-->
        <!--  <p><b>Inauguration of GOSHIMA Official Website</b></p>-->
        <!--  <a href="#" class="float-right">13<sup>th</sup> October, 2019</a>-->
        <!--  <p>GOSHIMA has launched it's official website <u><a href="http://goshima.in/">www.goshima.in</a></u> on 13<sup>th</sup> October, 2019. This website will help all stakeholders of GOSHIMA to know the updates about activities and services of GOSHIMA. </p>-->
        <!--</li>-->
        <!--<li>-->
        <!--  <p><b>Annual General Meeting (AGM)</b></p>-->
        <!--  <a href="#" class="float-right">13<sup>th</sup> October, 2019</a>-->
        <!--  <p>GOSHIMA is going to conduct Annual General Meeting (AGM) on 13<sup>th</sup> October, 2019. This AGM will be held at Hotel Sayaji, Kolhapur. All GOSHIMA member are inited for AGM.</p>-->
        <!--</li>-->
       
       
       </ul>
    </div>
  </div>
</div>
</div>
    <div class="col-lg-6" >
     <div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h4>Downloads</h4>
      <ul class="timeline">
        <li>
          <a href="/downloads/GoshimaMembershipForm.docx" download>Membership Form</a>
        </li>
        <li>
          <a href="/downloads/GoshimaISOCertificate.jpg" download>ISO Certificate</a>
        </li>
        <li>
            <?php
                $i=mysqli_query($_con,"SELECT * FROM file where category ='annual report' ORDER BY file_id DESC");
                $row = mysqli_fetch_assoc($i);
                $date = explode(' ',date('M Y', strtotime($row["date"])));
                echo "<a href='/downloads/report/{$row['name']}' download>Annual Report {$date[1]}</a>";
          ?>
        </li>
         <li>
          <a href="/downloads/Feb 2019 FINAL.pdf" download>Magazine</a>
        </li>
        <li>
            <?php
                $i=mysqli_query($_con,"SELECT * FROM file where category ='vartapatra' ORDER BY file_id DESC");
                $row = mysqli_fetch_assoc($i);
                $date = explode(' ',date('M Y', strtotime($row["date"])));
                $date[0] = strtoupper($date[0]); 
                echo "<a href='/downloads/{$row['name']}' download>GOSHIMA VARTAPATRA {$date[0]} {$date[1]}</a>";
          ?>
        </li>
      </ul>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
  
    <!-- Our Services Area -->
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Services</h2>
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter=".branding"><a href="hall_booking.php">Hall Booking</a></li>
                        <li data-filter=".photography"><a href="newservices.php">Advisory</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php include ("advert.php");?>   
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
