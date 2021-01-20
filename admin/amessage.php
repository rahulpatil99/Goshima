<?php
 session_start();
 if(!(isset($_SESSION['username'])))
 {
   header("location:adminlogin.php");
 }
?>


<html lang="en">

<head>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="astyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap-hover-dropdown.min.js"></script>
  <script src="js/admin.js"></script>
  <script src="https://use.fontawesome.com/10a964325b.js"></script>
  <title>
    Admin Panel
  </title>
</head>


<body>
  <!--////////////////TOP NAVBAR FIXED NAVBAR////////////////-->
  <div class="main-container">
    <nav class="navbar navbar-fixed-top admin-navbar">
      <div class="container-fluid">
        <div class="navbar-header" style="display: inline-block;">
          <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>

        </div>

        <div class="dropdown pull-right">
                    <h3 class="notification-btn dropdown-toggle" id="user">
                    <img src="../images/Logo/Logo1.png" width=40 height=40 class="fa fa-user-circle" aria-hidden="true"><?php 
                    // $u = $_SESSION["username"]; 
                    // echo "  $u";
                    echo "  Goshima";
                    ?><span class="badge"></span>
                    </h3>
                </div>
      </div>
    </nav>

        <?php include("admin_slider.php");?>
        
    <section id="content_body">
      <div class="container">
        <div class="upload_box">
          <form action="amessage.php" method="post">

            <table>
                <tr>
                <td colspan="3">
                  <center>
                    <h2 class="sign">Message </h2>
                  </center>
                </td>
              </tr>
                <tr>
                    <td class="ffont">Phone Number</td>
                    <td>:</td>
                    <td><input type="text" class="form-control input_box" name="phoneNumber" placeholder="" /></td>
                </tr>
                <tr>
                    <td class="ffont">Message</td>
                    <td>:</td>
                    <td><textarea name="sms" id="smsMessage" class="form-control input_box" cols="40" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3"><center><input type="submit" name="sendMessage" class="button_a" value="SEND"></center></td>
                </tr>

          </form>
        </div>
      </div>
    </section>



  </div>

</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {
    $("#menu_icon").click(function() {
      $(".open_sidbar").toggleClass("small_sidebar");
      $('.remove_text').toggleClass('text_hide');
      $('#content_body').toggleClass('margin_left');
    });
  });
</script>

<?php
	if(isset($_POST['sendMessage']))
    {
        $apiKey = urlencode('dfwAxr6NrDg-bdN7YQBGgLGefvzfJ0QAAqipyGRDTx');
	// Message details
    $no=$_POST['phoneNumber'];
    $sms=$_POST['sms'];
	$numbers = array($no);
	$sender = urlencode('VAIDYA');
	$message = rawurlencode($sms);

	$numbers = implode(',', $numbers);

	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message,'unicode'=>'1');

	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
    $Balance=$response[11];
    for ($i = 12; $i < 15; $i++){
        if($response[$i]!=','){
            $Balance = $Balance * 10;
            $Balance = $Balance + $response[$i];
        }
        else{
            break;
        }
    }

	echo "<script>";
	echo "alert('Balance : $Balance');";
	echo "</script>";
    }

?>

<style>
    td {
      padding: 10px;
    }
    
    .navbar-fixed-top{
        position: fixed !important;
    }
    
    .upload_box{
        /*padding :10px;*/
        margin: 100px auto 50px;
        width : 800px;
        padding :25px;
        background : white;
        box-shadow: 10px 10px 5px #aaaaaa;
    }
    
    .display_box{
        margin: 0 auto 50px;
        width : 800px;
        padding :25px;
        background : white;
        box-shadow: 10px 10px 5px #aaaaaa;
    }
    
    .eventtable th , .eventtable td
    {
        /*height: 50px; */
        /*width: 50px;*/
        text-align: center; 
        vertical-align: middle;
    }
    

    .ffont {
      font-family: georgia;
    }

    table {
      padding-left: 50px;
      padding-right: 50px;
      margin: auto;
    }

    body {
      background-color: #2222;
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

    .button_a {
      color: #fff !important;
      text-transform: uppercase;
      text-decoration: none;
      background: gray;
      width: 200px;
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
</style>