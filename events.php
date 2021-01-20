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
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

<!-- /*CSS for events slider starts*/ -->
<style>

img{
    max-width:590px !important;
    max-height:290px;
}

  .owl-item
{
  border: solid;
  border-color: 
 
}
 .owl-item .media-left img
 {
  position: relative;
  width: 149px;
  height: 150px;
 }
 .owl-item .media-body
 {
  padding-top: 1.82%;

 }


.media-carousel 
{
  margin-bottom: 0;
  padding: 0 8.09% 6.07% 8.09%;
  margin-top: 6.07%;
 
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -2.43%;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 0.81% solid #FFFFFF;
  border-radius: 4.65% 4.65% 4.65% 4.65%;
  height: 10%;
  width : 10%;
  margin-top: 6.07%
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -2.43% !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 0.81% solid #FFFFFF;
  border-radius: 4.65% 4.65% 4.65% 4.65%;
  height: 10%;
  width : 10%;
  margin-top: 6.07%
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0%;
  margin-right: -3.84%;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}

</style>
 <!--/* CSS end */-->

</head>



<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <?php include("header.php"); ?> 

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Events</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Events</a></li>
        </ol>
    </section>
    <!-- End Banner area -->





<!-- blog area --> <!-- actually events area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row" id="event">
                <div class="col-sm-8 main_blog">
                    
                  
                <?php
                    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                    $i=mysqli_query($_con,"SELECT * FROM events where date < CURRENT_DATE()");
                    $id_count = 0;
                    $active = "active";
                    while($row = mysqli_fetch_assoc($i)){
                        $id_count++;
                        $date = explode(' ',date('d M Y', strtotime($row["date"])));
                        echo "<div id='{$id_count}' style='display: {$active};'>
                                <img src='images/events/{$row["img_path"]}' alt=''> 
                                <div class='col-xs-1 p0'>
                                    <div class='blog_date'>
                                        <a href='#'>{$date[0]}</a>
                                        <a href='#'>{$date[1]}</a>
                                    </div>
                                </div>
                            <div class='col-xs-11 blog_content'> 
                                <a class='blog_heading' href='#'>{$row["title"]}</a>
                                <p>{$row["detail"]}</p>
                                <br><br><br><br><br>
                            </div>
                        </div>";
                        $active = "none";
                    }
                    
                ?>
            </div>

    
                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT EVENTS</h3>
                        <?php
                            $i=mysqli_query($_con,"SELECT * FROM events where date < CURRENT_DATE()");
                            $id_count = 0;
                            while($row = mysqli_fetch_assoc($i)){
                                $id_count++;
                                $date = join(" ",explode(' ',date('d M Y', strtotime($row["date"]))));
                                echo "<div class='media'>
                                    <div class='media-left'>
                                        <a href='#container' onclick='toggle_visibility({$id_count});'>
                                            <img class='media-object' width='75px' src='images/events/{$row["img_path"]}' alt=''>
                                        </a>
                                    </div>
                                    <div class='media-body'>
                                        <a href='#container' onclick='toggle_visibility({$id_count});'>{$row["title"]}</a>
                                        <h6>{$date}</h6>
                                    </div>
                                </div>";
                            }
                        ?>
                            <a href="#"><b>Show More Events</b></a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

<script type="text/javascript">
    $(document).ready(function() {
      $('#media').carousel({
        pause: true,
        interval: false,
      });
    });
    function toggle_visibility(id) {
       var i=0;
       for (i=1;i<=<?=$id_count?>;i=i+1) 
       {
                document.getElementById(i).style.display = "none";
       }
        document.getElementById(id).style.display = "block";
    }

</script>
    <!-- End blog area -->
    <!--<?php include ("advert.php");?>-->
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
