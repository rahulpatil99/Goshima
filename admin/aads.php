<?php
session_start();
if(!(isset($_SESSION['username'])))
{
 header("location:adminlogin.php");
 }
 $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
 
 if(isset($_POST["add_ad"]))
{
  $file_n = $_FILES['fileToUpload1']['name'];
  if($file_n!=''){
    $file_t = $_FILES['fileToUpload1']['tmp_name'];
    move_uploaded_file($file_t,"../images/advertise/".$file_n);
  }
  if($_POST['no_expire']==2){
    $i=mysqli_query($_con,"INSERT INTO ads (name,status) VALUES ('$file_n','2')");
  }
   else{
        $date = $_POST['date'];
        $i=mysqli_query($_con,"INSERT INTO ads (name,expire,status) VALUES ('$file_n','$date','1')");
   }
}

if(isset($_POST['delete_ad'])){
    $d_id = $_POST['delete_ad'];
    $i=mysqli_query($_con,"SELECT * FROM ads WHERE ad_id=$d_id");
    $file_path = "../images/advertise/".mysqli_fetch_assoc($i)['name'];
    if (file_exists($file_path)) {
        unlink($file_path);
    }
    $i=mysqli_query($_con,"DELETE FROM ads WHERE ad_id=$d_id");
}

if(isset($_POST['disable_ad'])){
    $d_id = $_POST['disable_ad'];
    $change_to = $_POST['stat'];
    if($change_to!=0){
         $i=mysqli_query($_con,"SELECT expire FROM ads WHERE ad_id=$d_id");
         $row = mysqli_fetch_assoc($i);
         $change_to = ($row["expire"]?1:2);
    }
    $i=mysqli_query($_con,"UPDATE ads SET status=$change_to WHERE ad_id=$d_id");
}

?>


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


  <style>

    
    /*.navbar-fixed-top{*/
    /*    position: fixed !important;*/
    /*}*/
    
    /*.upload_box{*/
        /*padding :10px;*/
    /*    margin: 100px auto 50px;*/
    /*    width : 800px;*/
    /*    padding :25px;*/
    /*    background : white;*/
    /*    box-shadow: 10px 10px 5px #aaaaaa;*/
    /*}*/
    
    /*.display_box{*/
    /*    margin: 0 auto 50px;*/
    /*    width : 800px;*/
    /*    padding :25px;*/
    /*    background : white;*/
    /*    box-shadow: 10px 10px 5px #aaaaaa;*/
    /*}*/
    
    .eventtable th , .eventtable td
    {
        /*height: 50px; */
        min-width: 75px;
        text-align: center; 
        vertical-align: middle;
    }
    

    .ffont {
      font-family: georgia;
    }

    .inputtable {
      /*padding-left: 50px;*/
      /*padding-right: 50px;*/
      margin: 40px 0;
    }
    .inputtable td {
      padding: 10px;
    }


    #user {
      color: white;
      padding: 10px;
    }

    .sign {
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
    
    
        /*Data table display*/
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width:100%;
  max-width:1000px;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #fac02d;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #ffd66e;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #cf8a02;
}
    
  </style>
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
        <!--<div class="upcoming">-->
        <!--<div class="upload_box">-->
            
        <!--   imp update form  -->
          <form action="#" class="form-inline contact_box" method="post" enctype="multipart/form-data">
            <table class="inputtable">
              <tr>
                <td colspan="3">
                  <center>
                    <h2 class="sign">Advertise </h2>
                  </center>
                </td>
              </tr>
              <tr>
                <td class="ffont">Select image to upload</td>
                <td>:</td>
                <td><input type="file" class="form-control input_box" name="fileToUpload1"></td>
              </tr>
              <tr>
                <td class="ffont">Expire On</td>
                <td>:</td>
                <td><input type="date" name="date" id="date" class="form-control input_box"></td>
              </tr>
               <tr>
                <td class="ffont">No Expire</td>
                <td>:</td>
                <td>
                    <input type="checkbox" id ="no_expire" name="no_expire" value=2>
                </td>
              </tr>
              <tr>
                <td colspan="3">
                  <center><button type="submit" name="add_ad" class="button_a">Submit</button></center>
                </td>
              </tr>
            </table>
          </form>
          
        
          <!--</div>-->
          <!--  show event data here-->
          <!--<div class="display_box">-->
        
          <?php
            $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
            $i=mysqli_query($_con,"SELECT * FROM ads");
            if(mysqli_num_rows($i)){
              echo "<form action='aads.php' method='post'>
                <table class='content-table'>
                <thead>
                <tr>
                <th>Sr no.</th>
                <th>Image</th>
                <th>Expire</th>
                <th>Show</th>
                <th></th>
                </tr></thead><tbody>";
            $count =0 ;
              while($row = mysqli_fetch_assoc($i)){
                $count++;
                echo "<tr>
                  <td>{$count}</td>
                  <td><img width='100px' src='../images/advertise/{$row["name"]}' alt=''></td>
                  <td>".($row["expire"]=$row["expire"]?$row["expire"]:"no")."</td>
                  <td>
                  <input class='change' value='{$row["ad_id"]}' type='checkbox' ".($row["status"]>=1?"checked":"").">
                  </td>
                  <td>
                  <button class='btn btn-danger btn-sm rounded-0 del' type='submit' value='{$row["ad_id"]}' data-toggle='tooltip' data-placement='top' name='delete_ad'>
                  <i class='fa fa-trash'></i></button>
                  </td>
                  
                  </tr>";
              }
              echo "</tbody></table></form";
            }
            else{
              echo  "No data";
            }
              ?>
          <!--</div>-->
          
        <!--</div>-->
        <div class="recent">
        </div>
      </div>
      <div>
      </div>
    </section>
  </div>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function () {
    $("#menu_icon").click(function () {
      $(".open_sidbar").toggleClass("small_sidebar");
      $('.remove_text').toggleClass('text_hide');
      $('#content_body').toggleClass('margin_left');
    });
    $('.change').change(function() {
        if(this.checked) {
            update_ad($(this).val(),1)
            // alert($(this).val()+"check");
            
        }
        else{
            update_ad($(this).val(),0)
            //  alert($(this).val());
        }
    });
    $('#no_expire').change(function() {
        if(this.checked) {
             $('#date').attr('disabled', true);
        }
        else{
            $('#date').attr('disabled', false);
        }
    });
});

function update_ad(id,stat){
    $.ajax({
        url: 'aads.php',
        type: 'post',
        data: {
            'disable_ad' : id,
            'stat' : stat
        },
        success: function(response){
            // $('.display_box').empty();
            // $('.display_box').append(response); 
        }
    });
  }
</script>