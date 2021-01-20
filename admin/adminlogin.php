<?php
    
    session_start();
if(isset($_POST["submit"]))
{
    $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
 

    $username=$_POST["username"];
    $password=$_POST["password"];
    $encpassword=md5($password);
    // echo"Username : ".$username;
    // echo"<br><br>";


  
    $i=mysqli_query($_con,"select * from admin where username='$username'");
    $data=mysqli_fetch_array($i);
    if($data['password']==$encpassword)
    {
        $_SESSION['username']=$username; 
        echo"successful<br>";
        echo $data['id'];
        echo"<br>";
        echo $data['username'];
        echo"<br>";
        echo $data['password'];
        echo"<br>";
        echo $data['status'];
        echo"<br>";
        header("location:index.php");
        echo"<script>alert('User');</script>";
    }
    else
            echo"<script>alert('User Name and Password is incorrect');</script>";
    }
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="../images/favicon.png" type="image/x-icon" />

    <style>
body {
      background-color: #F3EBF6;
      font-family: 'Ubuntu', sans-serif;
    }

    .main {
      background-color: #FFFFFF;
      width: 400px;
      height: 400px;
      margin: 7em auto;
      border-radius: 1.5em;
      box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }

    .sign {
      /*padding-top: 40px;*/
      color: #8C55AA;
      font-family: 'Ubuntu', sans-serif;
      font-weight: bold;
      font-size: 23px;
    }

    .un {
      width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
    }

    /*form.form1 {*/
    /*  padding-top: 20px;*/
    /*}*/
    img{
        padding-top:40px;
        margin: 0 auto;
        display: block;
    }

    .pass {
      width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
    }


    .un:focus,
    .pass:focus {
      border: 2px solid rgba(0, 0, 0, 0.18) !important;

    }

    .submit {
      cursor: pointer;
      border-radius: 5em;
      color: #fff;
      /*background: linear-gradient(to right, #9C27B0, #E040FB);*/
      background: #ED8516;
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: 'Ubuntu', sans-serif;
      margin-left: 35%;
      font-size: 13px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }

    .forgot {
      text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
      color: #E1BEE7;
      padding-top: 15px;
    }

    a {
      text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
      color: #E1BEE7;
      text-decoration: none
    }

    @media (max-width: 600px) {
      .main {
        border-radius: 0px;
      }
    }

</style>
<!-- <link rel="stylesheet" href="style.css">-->
<title>
    Admin Panel
</title>
</head>
<body>
    <div class="main">
     <img src="../images/Logo/Logo1.png">
     <p class="sign" align="center">Admin Login</p>
    <form class="form1" action="adminlogin.php" method="post">
      <input class="un " type="text" align="center" name="username" placeholder="Username">
      <input class="pass" type="password" align="center" name="password" placeholder="Password">
      <button class="submit" type="submit" name="submit" align="center">Sign in</button>
    </form>

  </div>
</body>
</html>