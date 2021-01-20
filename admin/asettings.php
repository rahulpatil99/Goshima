<?php
session_start();
if(!(isset($_SESSION['username'])))
{
     
 header("location:adminlogin.php");
 
 }
?>


<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="astyle.css">
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
       <form action="asettings.php" method="post">
           <br>
           <br>
           <table>
               <tr>
                   <td colspan="3" class="sign"><center>Change Password</center></td>
               </tr>
               <tr>
                   <td class="ffont">Old Password</td>
                   <td>:</td>
                   <td><input type="password" class="form-control input_box" name='oldpassword' required></td>
               </tr>
               <tr>
                   <td class="ffont">New Password</td>
                   <td>:</td>
                   <td><input type="password" class="form-control input_box" name='newpassword' required></td>
               </tr>
               <tr>
                   <td class="ffont">Re-enter Password</td>
                   <td>:</td>
                   <td><input type="password" class="form-control input_box" name='renewpassword' required></td>
               </tr>
               <tr>
                   <td colspan="3"><center><input type="submit" class="button_a" name="submit"></center></td>
               </tr>
           </table>
            </form>
            </div>
        </div>
       </section>



    </div>
    
</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
    $("#menu_icon").click(function(){
        $(".open_sidbar").toggleClass("small_sidebar");
        $('.remove_text').toggleClass('text_hide');
        $('#content_body').toggleClass('margin_left');
    });
});
</script>
<?php
//session_start();
if(isset($_SESSION['username']))
{
   if(isset($_POST["submit"]))
   {
       $user=$_SESSION["username"];
       
       $oldpass=$_POST["oldpassword"];
        $enoldpass=md5($oldpass);
        
        $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
        
        $result=mysqli_query($_con, "select *from admin where username='$user' and password='$enoldpass'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count==1){
       
            $newpass=$_POST["newpassword"];
            $renewpass=$_POST["renewpassword"];
            
            if(strcmp($newpass,$renewpass)==0){
                
               $ennewpass=md5($newpass); 
               
                $j=mysqli_query($_con, "update admin set password = '$ennewpass' where username='$user' and password='$enoldpass'");

                 if ($j>0)
                {
                   echo "<script>alert('Password change successfully');</script>";
                }
                else 
                {
                    echo "<script>alert('Password change Failed');</script>";
                }
            }
            else
            {
                echo "<script>alert('Re-enter password not match');</script>";
            }
        }
        else
        {
            echo "<script>alert('Old password is incorrect');</script>";
        }
   }
       
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


