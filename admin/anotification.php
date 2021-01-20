<?php
session_start();
if(!(isset($_SESSION['username'])))
{
     
 header("location:adminlogin.php");
 
 }
 $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
 if(isset($_POST["add_noti"]))
{
   $title = $_POST['heading'];
   if($_POST['no_expire']==2){
       $i=mysqli_query($_con,"INSERT INTO notification (title,status) VALUES ('$title',2)");
   }
   else{
        $date = $_POST['date'];
        $i=mysqli_query($_con,"INSERT INTO notification (title,expire,status) VALUES ('$title','$date',1)");
   }
  
}

if(isset($_POST['delete_noti'])){
    $d_id = $_POST['delete_noti'];
    $i=mysqli_query($_con,"DELETE FROM notification WHERE noti_id=$d_id");
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
    
    .eventtable th , .eventtable td
    {
        text-align: center; 
        vertical-align: middle;
    }
    

    .ffont {
      font-family: georgia;
    }

    .inputtable {
      margin: 40px 0;
      /*margin: auto;*/
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

        <!--<div class="upload_box">-->
          <!--   imp update form  -->
          <form action="anotification.php" class="form-inline contact_box" method="post" enctype="multipart/form-data">
            <table class="inputtable">
              <tr>
                <td colspan="3">
                  <center>
                    <h2 class="sign">Important Update </h2>
                  </center>
                </td>
              </tr>
              <tr>
                <td class="ffont">Notification</td>
                <td>:</td>
                <td><input type="text" class="form-control input_box" name="heading"></td>
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
                  <center><button type="submit" name="add_noti" class="button_a">Submit</button></center>
                </td>
              </tr>
            </table>
          </form>
          
        
          <!--</div>-->
          <!--<div class="display_box">-->
          <?php
        //   display();
                $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM notification ORDER BY noti_id DESC");
                if(mysqli_num_rows($i)){
                  echo "<form action='anotification.php' method='post'>
                  <table class='content-table'>
                  <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Notification</th>
                    <th>Expire On</th>
                    <th></th>
                    </tr></thead><tbody>";
                $count =0 ;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    echo "<tr>
                      <td>{$count}</td>
                      <td>{$row["title"]}</td>
                      <td>".($row["expire"]=$row["expire"]?$row["expire"]:"no")."</td>
                      <td>
                      <button class='btn btn-danger btn-sm rounded-0 del' type='submit' value='{$row["noti_id"]}' data-toggle='tooltip' data-placement='top' name='delete_noti'>
                      <i class='fa fa-trash'></i></button>
                      </td>
                      
                      </tr>";
                  }
                  echo "</tbody></table></form>";
                }
                else{
                  echo  "No data";
                }
              ?>
          <!--</div>-->
          
        <div class="recent">
        </div>
      <!--</div>-->
      <div>
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
    $('#no_expire').change(function() {
        if(this.checked) {
             $('#date').attr('disabled', true);
        }
        else{
            $('#date').attr('disabled', false);
        }
    });
    
    // $('.del').click(function() {
    //     update_data($(this).attr('value'));
    // });
  });
//   function update_data(id){
//     $.ajax({
//         url: 'anotification.php',
//         type: 'post',
//         data: {
//             'delete_noti' : id
//         },
//         success: function(response){
//             $('.display_box').empty();
//             $('.display_box').append(response); 
//         }
//     });
//   }
</script>