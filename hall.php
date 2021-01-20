<?php
            if(isset($_POST['book']))
            {
                 $P_name =$_POST['p_name'];
                 $P_event =$_POST['p_event'];
                 $P_email = $_POST['p_email'];
                 $P_mobile =$_POST['p_mobile'];

                 $P_date = $_POST['p_date'];
                 $P_slot =$_POST['p_slot'];
              
                $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
                $query="insert into hallbook(b_name,b_event,b_email,b_mobile,b_date,b_slot,status) values('$P_name','$P_event','$P_email','$P_mobile','$P_date','$P_slot','0')";
                $r = mysqli_query($_con,$query);
                if($r){ 
                    // echo "<script type='text/javascript'>alert('Booked');</script>"; 
                    header("Location:su.html");
                    exit();
                    
                }
                
            }
                
          ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GOSHIMA</title>

  <!-- Favicon -->

  <!--Theme Styles CSS-->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
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
  <!-- Lightbox CSS-->
  <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.min.css" media="all">

  <!--Theme Styles CSS-->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />


</head>

<body>
  <!-- Preloader -->
  <div class="preloader"></div>
  <?php include("header.php"); ?>
  <!-- Banner area -->
  <section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Hall Booking</h2>
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="newservices.php" class="active">Services</a></li>
      <li><a href="newservices.php" class="active">Hall Booking</a></li>
    </ol>
  </section>
  <!-- End Banner area -->

<div class="modal">
  <div id="success-icon">
    <div></div>
  </div>
  <svg id="close-modal" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 10 10">
    <line x1="1" y1="-1" x2="9" y2="11" stroke-width="2.5" />
    <line x1="9" y1="-1" x2="1" y2="11" stroke-width="2.5" />
  </svg>
  <h1><strong>Success!</strong></h1>
  <svg class="progress" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 4.5">
    <rect height="4.5" width="100" rx="2" ry="2" />
  </svg>
  <p class="points">+250 points</p>
  <hr>
  <p class="message">You've completed 7 out of 10 Challenges in Level 2.</p>
</div>

  <!-- Blood Donation CampArea -->
  <section class="building_construction_area">
    <div class="container">
      <div class="row building_construction_row">


        <div class="col-sm-8 constructing_laft">
          <h1 align="justify">Hall Booking</h1>
          <br><img src="images/slider/003.jpg" alt="Hall"><br>
          <br>GOSHIMA Seminar Hall
        </div>
        <div class="col-sm-4 constructing_right">
          <br><br>
          <h4 align="center">Our Services</h4>
          <ul class="painting">
            <li><a href="newservices.php" onclick="toggle_visibility('1');"><i aria-hidden="true"></i>Advisory</a></li>
            <li><a href="hall_booking.php" onclick="toggle_visibility('2');"><i aria-hidden="true"></i>Hall Booking</a>
            </li>

          </ul>
        </div>
        <div class="col-sm-8 constructing_laft">
          <p>
            <div class="ipsum">
              <h3>
                <ul class="excavator" align="justify">
                  <li><i class="fa fa-chevron-circle-right"></i>770 Sq.ft (AC Hall)</li>
                  <li><i class="fa fa-chevron-circle-right"></i>Multipurpose Hall</li>
                  <li><i class="fa fa-chevron-circle-right"></i>86 Seats</li>
                  <li><i class="fa fa-chevron-circle-right"></i>Sound System | LED Lights | Projector | Stage</li>
                </ul>
              </h3>
              <p>
            </div>
            <p align="justify">Hall is available for all members at reasonable price.For booking please contact GOSHIMA.
            </p><br>
            <a href="#" class="button_all" data-toggle="modal" data-target="#login-modal">Book now</a>
            <!--<a href="maintanance.html" class="button_all">Book now</a>-->
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true" style="display: none;">
          <div class="pos">
            <div class="modal-dialog">
              <div class="loginmodal-container">
                <div class="modal-header">
                  <h1 class="modal-title">Hall Book <button type="button" class="close" id="c1_button"
                      data-dismiss="modal">&times;</button></h1>
                </div>

                <form method="post">
                  <input type="text" name="p_name" placeholder="Name *" required>
                  <input type="text" name="p_event" placeholder="Event Name *" required>
                  <input type="email" name="p_email" placeholder="Email *" required>
                  <input type="mobile" name="p_mobile" placeholder="Mobile NO *" required>
                  <input type="date" name="p_date" id="p_date" class="form-control input_box" required>
                  <lable id="date_error"></lable>
                  <select class="form-control input_box" name="p_slot" id="p_slot" required disabled>

                    <option value="">Select Slot *</option>
                    <!--<option value="1">Slot 1 (Time 10AM - 1PM)</option>-->
                    <!--<option value="2">Slot 2 (Time 2PM - 5PM)</option>-->
                    <!--<option value="3">Full Day (Time 10AM - 5PM)</option>-->
                  </select>
                  <lable id="slot_error"></lable>
                  <input type="submit" name="book" id="book" class="login loginmodal-submit"
                    value="Register">
                    <b><h4>Note :</h4></b><lable id="note">After Registration complete Call In the GOHIMA Office in working Hours to confirm booking.</lable>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End ELECTRONIC CLUSTER Area -->

  <!--<?php include ("advert.php");?>    -->
  <?php include("footer.php"); ?>

  <!-- jQuery JS -->
  <script src="js/jquery-1.12.0.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#note').css({"color": "green", "font-size": "14px"});
      var d = new Date();
      var now = d.getFullYear() + "-" + ((d.getMonth() + 1) > 9 ? (d.getMonth() + 1) : "0" + (d.getMonth() + 1)) +
        "-" + (d.getDate() > 9 ? d.getDate() : "0" + d.getDate());

      // Checking date
      $('#p_date').on('input', function () {
        $("#date_error").text("");
        $('#slot_error').text("");
        // alert();
        //   alert($(this).val());
        //   alert(now);
        if ($(this).val() >= now) {
          $("#p_slot").removeAttr('disabled');
          $("#p_slot").empty();
          $("#p_slot").append($("<option></option>").attr("value", 0).text("Select Slot"));
          check_slot($(this).val());
        } else {
          $("#date_error").text("Please enter Current date onwards").css({
            "color": "red",
            "font-size": "12px"
          });
          $("#p_slot").attr('disabled', 'disabled');
          $('#p_date').val('');
          $('#p_slot').val('');
        }
      });

        $("#book").click(function () {
            if($("#p_slot").val()==0){
              $('#slot_error').text("Select Slot first").css({"color": "red", "font-size": "12px"});
              $('#p_slot').focus();
              return false;
          }
          else return;
        });
      $("#p_slot").on('change', function () {
          $('#slot_error').text("");
        // alert($("#p_slot").val());
        // if($("#p_slot").val()!=0){
        //     $("#book").removeAttr('disabled');
        // }
      });
      // $("#book").click(function(){
      //     if($('#p_slot').val()==0){
      //         $('#p_slot').focus()
      //     }
      // });

      //Valid the Time
      // $('#p_slot').on('input', function() {
      //     var date = $("#p_date").val().split("-");
      // var input=$(this);
      // var slot=input.val();

      // if(slot==1 || slot==3){
      //     if($("#p_date").val()==''){
      //         $("#slot_error").text("Select date first").css({"color": "red", "font-size": "12px"});
      //         $('#p_slot').val('');
      //         $("#p_date").focus();
      //     }
      //     else if(time>=14){
      //         if(date[0]<=year && date[1]<=month && date[2]<=day){
      //             $("#slot_error").text("Time not valid check date or choose second slot").css({"color": "red", "font-size": "12px"});
      //             $('#p_slot').val('');
      //              $("#p_date").focus();
      //         }
      //         else{
      //             $("#slot_error").text("Valid").css({"color": "green", "font-size": "12px"});
      //            check_slot(date,slot);
      //         }
      //     }
      //     else{
      //         $("#slot_error").text("Valid").css({"color": "green", "font-size": "12px"});
      //         check_slot(date,slot);
      //     }

      // }
      // else if(slot==2){
      //     if($("#p_date").val()==''){
      //         $("#slot_error").text("Select date first").css({"color": "red", "font-size": "12px"});
      //         $('#p_slot').val('');
      //         $("#p_date").focus();
      //     }
      //     else if(time>=18){
      //         if(date[0]<=year && date[1]<=month && date[2]<=day){
      //             $("#slot_error").text("Time not valid check date").css({"color": "red", "font-size": "12px"});
      //             $('#p_slot').val('');
      //              $("#p_date").focus();
      //         }
      //         else{
      //             $("#slot_error").text("Valid").css({"color": "green", "font-size": "12px"});
      //            check_slot(date,slot);
      //         }
      //     }
      //     else{
      //         $("#slot_error").text("Valid").css({"color": "green", "font-size": "12px"});
      //        check_slot(date,slot);
      //     }
      // }
      // });

    });

    // function check_slot(date,slot){
    //     $.ajax({
    //         url: 'hall_book_db.php',
    //         type: 'post',
    //         data: {
    //             'check_s' : 1,
    //             'slot' : slot,
    //         'year' : date[0],
    //         'month' : date[1],
    //         'day' : date[2],
    //         },
    //         success: function(response){

    //             if(response=='found 1&2'){
    //                 $(document).ready(function() {
    //                     $("#slot_error").text("This slot is already booked select another slot").css({"color": "red", "font-size": "12px"});
    //                     $("#p_slot").focus();

    //                 });
    //              }
    //              else if(response=='found 3'){
    //                 $(document).ready(function() {
    //                     $("#slot_error").text("One slot is already booked so choose another day").css({"color": "red", "font-size": "12px"});
    //                     $("#p_date").focus();
    //                 });
    //              }
    //              else if(response=='found all'){
    //                 $(document).ready(function() {
    //                     $("#slot_error").text("No slot found").css({"color": "red", "font-size": "12px"});
    //                     $("#p_date").focus();
    //                 });
    //              } 

    //             else if(response=='no found'){
    //                 $(document).ready(function() {
    //                     $("#slot_error").text("valid").css({"color": "green", "font-size": "12px"});
    //                     $("#p_slot").focus();
    //                 });
    //             }
    //         }
    //     });
    // }

    // function v(){
    //     if($("#p_slot").val()==0){
    //             $("#slot_error").text("Select Slot").css({"color": "red", "font-size": "12px"});
    //             ($('#p_slot').focus();
    //             return false;
    //     }
    //     else{
    //         return true;
    //     }
    // }

    function check_slot(date) {
      $.ajax({
        url: 'hall_book_db.php',
        type: 'post',
        data: {
          'check_d': 1,
          'date': date
        },
        success: function (response) {
          if (response == 'all slot found') {
            $(document).ready(function () {
              $("#date_error").text("Whole day already booked Select another day").css({
                "color": "red",
                "font-size": "12px"
              });
              $("#p_slot").attr('disabled', 'disabled');
              $("#p_slot").empty();
              $("#p_date").focus();
            });
          } else if (response == 'found slot 1') {
            $(document).ready(function () {
              $("#date_error").text("3PM-6PM slot available").css({
                "color": "green",
                "font-size": "12px"
              });
              $("#p_slot").append($("<option></option>").attr("value", 2).text("Slot 2 (Time 2PM - 5PM)"));
              $("#p_slot").focus();
            });
          } else if (response == 'found slot 2') {
            $(document).ready(function () {
              $("#date_error").text("10AM-2PM slot available").css({
                "color": "green",
                "font-size": "12px"
              });
              $("#p_slot").append($("<option></option>").attr("value", 1).text("Slot 1 (Time 10AM - 1PM)"));
              $("#p_slot").focus();
            });
          } else if (response == 'no found') {
            $(document).ready(function () {
              // $("#date_error").text("all slot available").css({"color": "green", "font-size": "12px"});
              $("#date_error").text("");
              $("#p_slot").append($("<option></option>").attr("value", 1).text("Slot 1 (Time 10AM - 1PM)"));
              $("#p_slot").append($("<option></option>").attr("value", 2).text("Slot 2 (Time 2PM - 5PM)"));
              $("#p_slot").append($("<option></option>").attr("value", 3).text("Full Day (Time 10AM - 5PM)"));
              $("#p_slot").focus();
            });
          }
        }
      });
    }
  </script>

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
  <!-- Lightbox JS -->
  <script src="vendors/lightbox/js/lightbox.min.js"></script>
  <!-- Theme JS -->
  <script src="js/theme.js"></script>
  <style>
    td {
      padding: 10px;
    }

    .ffont {
      font-family: georgia;
    }

    #user {
      color: white;
      padding: 10px;
    }

    .sign {
      padding-top: 40px;
      color: #8C55AA;
      font-family: 'Ubuntu', sans-serif;
      font-weight: bold;
      font-size: 23px;
    }

    .sms {
      padding: 40px 10px;
      width: 600px;
      height: auto;
      margin-left: 15%;
      top: 70%;
      left: 80%;
      border-width: 5px solid;

      border-color: black;
      transform: translate(10%, 10%);
    }

    .button_a {
      color: #ffff !important;
      text-transform: uppercase;
      text-decoration: none;
      background: gray;
      width: 150px;
      padding: 20px;
      border-radius: 5px;
      display: inline-block;
      border: none;
      transition: all 0.4s ease 0s;
    }

    .button_a:hover {
      background: #434343;
      letter-spacing: 1px;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
      box-shadow: 5px 40px -10px rgba(0, 0, 0, 0.57);
      transition: all 0.4s ease 0s;
    }

    .back {
      background: graylight;
    }
  </style>



  <style media="screen">
    .loginmodal-container {
      padding: 30px;
      max-width: 350px;
      width: 100% !important;
      background-color: #F7F7F7;
      margin: 0 auto;
      border-radius: 2px;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      overflow: hidden;
      font-family: roboto;
    }

    .loginmodal-container h1 {
      text-align: center;
      font-size: 1.8em;
      font-family: roboto;
    }

    .loginmodal-container input[type=submit] {
      width: 100%;
      display: block;
      margin-bottom: 10px;
      position: relative;
    }

    .loginmodal-container input[type=text],
    input[type=password],
    input[type=email],
    input[type=mobile],
    input[type=date],
    select {
      height: 44px;
      font-size: 16px;
      width: 100%;
      margin-bottom: 10px;
      -webkit-appearance: none;
      background: #fff;
      border: 1px solid #d9d9d9;
      border-top: 1px solid #c0c0c0;
      /* border-radius: 2px; */
      padding: 0 8px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
    }

    .loginmodal-container input[type=text]:hover,
    input[type=email]:hover,
    input[type=mobile]:hover,
    input[type=password]:hover,
    input[type=date]:hover,
    select:hover {
      border: 1px solid #b9b9b9;
      border-top: 1px solid #a0a0a0;
      -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .loginmodal {
      text-align: center;
      font-size: 14px;
      font-family: 'Arial', sans-serif;
      font-weight: 700;
      height: 36px;
      padding: 0 8px;
      /* border-radius: 3px; */
      /* -webkit-user-select: none;
        user-select: none; */
    }

    .loginmodal-submit {
      /* border: 1px solid #3079ed; */
      border: 0px;
      color: #fff;
      text-shadow: 0 1px rgba(0, 0, 0, 0.1);
      background-color: #4d90fe;
      padding: 17px 0px;
      font-family: roboto;
      font-size: 14px;
      /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }

    .loginmodal-submit:hover {
      /* border: 1px solid #2f5bb7; */
      border: 0px;
      text-shadow: 0 1px rgba(0, 0, 0, 0.3);
      background-color: #357ae8;
      /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }

    .loginmodal-container a {
      text-decoration: none;
      color: #666;
      font-weight: 400;
      text-align: center;
      display: inline-block;
      opacity: 0.6;
      transition: opacity ease 0.5s;
    }

    .login-help {
      font-size: 12px;
    }

    .login-btn {
      text-align: center;
      margin-top: 50px;
    }

    .button {
      line-height: 55px;
      padding: 0 30px;
      background: #004a80;
      color: #fff;
      display: inline-block;
      font-family: roboto;
      text-decoration: none;
      font-size: 18px;
    }

    .button:hover,
    .button:visited {
      background: #006cba;
      color: #fff;
    }

    .pos {
      margin-top: 150px;
    }
  </style>
</body>

</html>