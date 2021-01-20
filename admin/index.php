<?php
session_start();
if(!(isset($_SESSION['username'])))
{
     
 header("location:adminlogin.php");
 
 }
 
 if(isset($_POST["confirm_book"])){
    $id = $_POST['confirm_book'];
   
    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
    $i=mysqli_query($_con,"UPDATE hallbook SET status=1 WHERE book_id=$id");
    $i=mysqli_query($_con,"SELECT SUM(b_slot) AS total_slot FROM hallbook WHERE status=1 AND b_date=(SELECT b_date FROM hallbook WHERE book_id=$id)");
    $row = mysqli_fetch_assoc($i); 
    $sum = $row['total_slot'];
    if($sum==3){
        $i=mysqli_query($_con,"UPDATE hallbook SET status=-1 WHERE b_date=(SELECT b_date FROM hallbook WHERE book_id=$id) AND status=0");
    }
    else{
        $i=mysqli_query($_con,"UPDATE hallbook SET status=-1 WHERE b_date=(SELECT b_date FROM hallbook WHERE book_id=$id) AND status=0 AND b_slot!=".($sum==2? 1:2));
    }
    echo "<script>alert({$sum})</script>";
    
    // $c=0;
    //  while($row = mysqli_fetch_assoc($i)){
    //      if($row["b_slot"]=='1'){$c=$c+1;}
    //      if($row["b_slot"]=='2'){$c=$c+2;}
         
    //  }
  }
  if(isset($_POST["unconfirm_book"])){
    $id = $_POST["unconfirm_book"];
    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
    $i=mysqli_query($_con,"UPDATE hallbook SET status=0 WHERE book_id=$id");
  }
  if(isset($_POST["cancel_book"])){
    $id = $_POST["cancel_book"];
    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
    $i=mysqli_query($_con,"UPDATE hallbook SET status=-1 WHERE book_id=$id");
  }
  if(isset($_POST["delete_book"])){
    $id = $_POST["delete_book"];
    $_con=mysqli_connect("localhost","root","","u519790871_goshi");
    $i=mysqli_query($_con,"DELETE FROM hallbook WHERE book_id=$id");
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    
<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  <ul class="nav nav-tabs">
    <li class="active"><a href="#nconfirm">Not Confirm</a></li>
    <li><a href="#confirm">Confirm</a></li>
    <li><a href="#done">Done</a></li>
    <li><a href="#cancel">Cancel</a></li>
  </ul>

  <div class="tab-content">
    <div id="nconfirm" class="tab-pane fade in active">
      <h3>Pending Confirmation</h3>
      <?php
                $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM hallbook WHERE status=0 AND b_date > CURDATE() ORDER BY b_date");
                if(mysqli_num_rows($i)){
                  echo "
                  <form action='index.php' method='post'>
                    <table class='content-table'>
                    <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Slot</th>
                    <th></th>
                    <th></th>
                    </tr></thead><tbody>";
                $count=0;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    
                    echo "
                      <tr>
                      <td>{$count}</td>
                      <td>{$row["b_name"]}</td>
                      <td>{$row["b_event"]}</td>
                      <td>{$row["b_email"]}</td>
                      <td>{$row["b_mobile"]}</td>
                      <td>{$row["b_date"]}</td>
                      <td>{$row["b_slot"]}</td>
                       <td>
                      <button class='btn btn-success btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='confirm_book'>Confirm</button>
                      </td>
                      <td>
                      <button class='btn btn-danger btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='cancel_book'>
                      Cancel</button>
                      </td>
                      </tr>";
                  }
                  echo "</tbody></table></form>";
                }
                else{
                  echo "No data";
                }
              ?>
    </div>
    <div id="confirm" class="tab-pane fade">
      <h3>Confirmation Completed By client</h3>
      <?php
                $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM hallbook WHERE status=1 AND b_date> CURDATE() ORDER BY b_date");
                if(mysqli_num_rows($i)){
                  echo "
                  <form action='index.php' method='post'>
                    <table class='content-table'>
                    <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Slot</th>
                    <th></th>
                    <th></th>
                    </tr></thead><tbody>";
                $count=0;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    
                    echo "
                      <tr>
                      <td>{$count}</td>
                      <td>{$row["b_name"]}</td>
                      <td>{$row["b_event"]}</td>
                      <td>{$row["b_email"]}</td>
                      <td>{$row["b_mobile"]}</td>
                      <td>{$row["b_date"]}</td>
                      <td>{$row["b_slot"]}</td>
                        <td>
                      <button class='btn btn-warning btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='unconfirm_book'>UnConfirm</button>
                      </td>
                      <td>
                      <button class='btn btn-danger btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='cancel_book'>
                      Cancel</button>
                      </td>
                      </tr>";
                  }
                  echo "</tbody></table></form>";
                }
                else{
                  echo "No data";
                }
              ?>
    </div>
    <div id="done" class="tab-pane fade">
      <h3>Completed Event</h3>
      <?php
                $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM hallbook WHERE status>0 AND b_date< CURDATE() ORDER BY b_date");
                if(mysqli_num_rows($i)){
                  echo "
                  <form action='index.php' method='post'>
                    <table class='content-table'>
                    <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Slot</th>
                    <th></th>
                    </tr></thead><tbody>";
                $count=0;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    
                    echo "
                      <tr>
                      <td>{$count}</td>
                      <td>{$row["b_name"]}</td>
                      <td>{$row["b_event"]}</td>
                      <td>{$row["b_email"]}</td>
                      <td>{$row["b_mobile"]}</td>
                      <td>{$row["b_date"]}</td>
                      <td>{$row["b_slot"]}</td>
                       <td>
                      <button class='btn btn-danger btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='delete_book'>
                      <i class='fa fa-trash'></i></button>
                      </td>
                      </tr>";
                  }
                  echo "</tbody></table></form>";
                }
                else{
                  echo "No data";
                }
              ?>
    </div>
    <div id="cancel" class="tab-pane fade">
      <h3>Cancel Registration</h3>
      <?php
                $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM hallbook WHERE (status<1 AND b_date< CURDATE()) OR status=-1 ORDER BY b_date");
                if(mysqli_num_rows($i)){
                  echo "
                  <form action='index.php' method='post'>
                    <table class='content-table'>
                    <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Slot</th>
                    <th></th>
                    </tr></thead><tbody>";
                $count=0;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    echo "
                      <tr>
                      <td>{$count}</td>
                      <td>{$row["b_name"]}</td>
                      <td>{$row["b_event"]}</td>
                      <td>{$row["b_email"]}</td>
                      <td>{$row["b_mobile"]}</td>
                      <td>{$row["b_date"]}</td>
                      <td>{$row["b_slot"]}</td>
                       <td>
                      <button class='btn btn-danger btn-sm rounded-0' type='submit' value='{$row["book_id"]}' data-toggle='tooltip' data-placement='top' name='delete_book'>
                      <i class='fa fa-trash'></i></button>
                      </td>
                      </tr>";
                  }
                  echo "</tbody></table></form>";
                }
                else{
                  echo "No data";
                }
              ?>
    </div>
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
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    
    // $("#confirm_book").click(function () {
    //     update_book($(this).val(), 1);
    //   });
    //   $("#unconfirm_book").click(function () {
    //     update_book($(this).val(), 0);
    //   });
    //   $("#cancel_book").click(function () {
    //     update_book($(this).val(), -1);
    //   });
    //   $("#delete_book").click(function () {
    //      delete_book($(this).val());
    //   });
});


function update_book(id, stat) {
      $.ajax({
        url: 'index.php',
        type: 'post',
        data: {
          'update_id': id,
          'stat': stat
        },
        success: function (response) {
          // $('.display_box').empty();
          // $('.display_box').append(response); 
        }
      });
    }
    
    
    function delete_book(id) {
      $.ajax({
        url: 'index.php',
        type: 'post',
        data: {
          'delete_id': id
        },
        success: function (response) {
          // $('.display_box').empty();
          // $('.display_box').append(response); 
        }
      });
    }

</script>
<style>
    #user{
        color:white;
        padding:10px;
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
