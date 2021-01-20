<html>
    <head>
        <title>
        Admin Panel
    </title>
    </head>
    <body>
       <form action = "adminreg.php " method = "post">

    Username 
    <input type ="text" name = "username"><br><br>
    password 
    <input type ="password" name = "password"><br><br>
    
    <input type="submit" name="submit">
     <input type="reset">

</form>  
    </body>
</html>

<?php
if(isset($_POST["submit"]))
{
  
    $username=$_POST["username"];
    $password=$_POST["password"];
    $encpassword=md5($password);
    
    
    // echo" ".$username;echo"<br><br>";
    
     $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
    $i=mysqli_query($_con,"insert into admin(username,password,status) values('$username','$encpassword','active')");
    
    echo"<br><br>";
    if ($i>0)
         echo"<script>alert('Insert Succesful');</script>";
    else 
       echo"<script>alert('Insert Failure');</script>";
   
}
?>
<a href="index.php"> Back To Main Menu </a><br>
    