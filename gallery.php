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

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .trans
{
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
        
        .lightbox
{
	position: fixed;
	width: 100%;
	height: 100%;
	text-align: center;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,0.75);
	z-index: 999;
	opacity: 0;
	pointer-events: none;
}
.lightbox img
{
	max-width: 80%;
	max-height: 70%;
	position: relative;
	top: -100%;
	/* Transition */
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.lightbox h4
{
	font: 400 10px "Roboto", sans-serif;
  color: #fff;
    position: 
}
.lightbox:target
{
	outline: none;
	top: 0;
	opacity: 1;
	pointer-events: auto;
	transition: all 1.2s ease;
	-moz-transition: all 1.2s ease;
	-ms-transition: all 1.2s ease;
	-o-transition: all 1.2s ease;
	-webkit-transition: all 1.2s ease;
}
.lightbox:target img
{
	top: 0;
	top: 60%;
	transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16%;
  margin-top: -50%;
  color: #f6b60b;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
 .prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(211, 211, 211, 0.2);
}


/* The Close Button */
.close {
  color: hsl(62, 100%, 50%);
  position: relative;
  top: 10%;
  right: 25%;
  font-size: 35px;
  font-weight: bold;
  
}

.close:hover,
.close:focus {
  color: #f6b60b;
  text-decoration: none;
  cursor: pointer;
}
.cursor {
  cursor: pointer;
}


    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

<?php include("header.php"); ?> 

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Gallery</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Gallery</a></li>
        </ol>
    </section>

    <section class="featured_works row" data-stellar-background-ratio="0.3"><br>
        <div class="tittle wow fadeInUp">
             
            <h2>Photos</h2>
<!--            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>                -->
        </div>
        <div class="featured_gallery">
            
            <?php
                $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM gallery");
                if(mysqli_num_rows($i)){
                    $count = 0;
                  while($row = mysqli_fetch_assoc($i)){
                      $count++;
                    echo "
                        <div class='col-md-3 col-sm-4 col-xs-6 gallery_iner p0'>
                        <img src='images/gallery/{$row["path"]}' width='341px' height='192px' alt=''>
                        <div class='gallery_hover'>
                        <h4> {$row["title"]} </h4>
                        <a id='img_open' href='#img_{$count}'>VIEW</a>
                        </div>
                    </div>";
                  }
                }
                ?>
        </div>
        <div id="img_open">
     <span class="close cursor" onclick="closeModal()">&times;</span>
        <?php 
            $i=mysqli_query($_con,"SELECT * FROM gallery");
            if(mysqli_num_rows($i)){
                $count = 0;
                while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    echo "<a href='#' class='lightbox trans' id='img_{$count}'><img src='images/gallery/{$row["path"]}'></a>";
                }
            }
         ?>
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
       
                  
               
    </section>


   <?php include("footer.php"); ?> 

         
        <!--<a href="#" class="lightbox trans" id="img_1"><img src="images/gallery/new3.jpg" alt=""></a>-->
        <!--<a href="#" class="lightbox trans" id="img_3"><img src="images/gallery/img3.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_4"><img src="images/gallery/10.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_5"><img src="images/gallery/11.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_6"><img src="images/gallery/12.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_7"><img src="images/gallery/13.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_8"><img src="images/gallery/15.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_9"><img src="images/gallery/20.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_10"><img src="images/gallery/23.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_11"><img src="images/gallery/24.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_12"><img src="images/gallery/25.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_13"><img src="images/gallery/17.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_14"><img src="images/gallery/18.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_15"><img src="images/gallery/21.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_16"><img src="images/gallery/22.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_17"><img src="images/gallery/23.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_18"><img src="images/gallery/26.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_19"><img src="images/gallery/27.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_20"><img src="images/gallery/28.jpg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_21"><img src="images/gallery/5.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_22"><img src="images/gallery/9.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_23"><img src="images/gallery/7.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_24"><img src="images/gallery/8.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_25"><img src="images/gallery/6.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_26"><img src="images/gallery/3.jpeg"></a>-->
        <!--<a href="#" class="lightbox trans" id="img_27"><img src="images/gallery/5.jpeg"></a>-->
        
         
   

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
