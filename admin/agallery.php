<?php
session_start();
if(!(isset($_SESSION['username'])))
{
     
 header("location:adminlogin.php");
 
 }
 $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
 if(isset($_POST["add_gallery"]))
{
   $file_n = $_FILES['fileToUpload1']['name'];
   $title = $_POST['title'];
    if($file_n!=''){
        $file_t = $_FILES['fileToUpload1']['tmp_name'];
        move_uploaded_file($file_t,"../images/gallery/".$file_n);
    }
  
  $i=mysqli_query($_con,"INSERT INTO gallery (path,title) VALUES ('$file_n','$title')");
}

if(isset($_POST['delete_gallery'])){
    $d_id = $_POST['delete_gallery'];
    $i=mysqli_query($_con,"SELECT * FROM gallery WHERE id=$d_id");
    $file_path = "../images/gallery/".mysqli_fetch_assoc($i)['path'];
    if (file_exists($file_path)) {
        unlink($file_path);
    }
    $i=mysqli_query($_con,"DELETE FROM gallery WHERE id=$d_id");
    // display();
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
        /*height: 50px; */
        /*width: 50px;*/
        min-width: 75px;
        text-align: center; 
        vertical-align: middle;
    }
    
    .ffont {
      font-family: georgia;
    }

    .inputtable {

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
      /*padding-top: 40px;*/
      /*color: #8C55AA;*/
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
  overflow-y: scroll; 
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
      <h3 class="sign">Gallery</h3>
        <!--<div class="upload_box">-->
          <form action="agallery.php" class="form-inline contact_box" method="post" enctype="multipart/form-data">
            <table class="inputtable">
            
              <tr>
                <td class="ffont">Select image to upload</td>
                <td>:</td>
                <td><input type="file" class="form-control input_box" name="fileToUpload1" id="fileToUpload1"></td>
              </tr>
              <tr>
                <td class="ffont">Title</td>
                <td>:</td>
                <td><input type="text" class="form-control input_box" name="title"></td>
              </tr>
              <tr>
                <td colspan="3">
                  <center><button type="submit" name="add_gallery" class="button_a submit">Submit</button></center>
                </td>
              </tr>
            </table>
          </form>
          <!--</div>-->
          <!--<div class="display_box">-->
          <?php
        //   <form action='aevents.php' method='post'>
        //   display();
                $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
                $i=mysqli_query($_con,"SELECT * FROM gallery ORDER BY id DESC");
                if(mysqli_num_rows($i)){
                  echo " <form action='agallery.php' method='post'>
                    <table class='content-table'>
                    <thead>
                    <tr>
                    <th>Sr no.</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th></th>
                    </tr></thead><tbody>";
                $count =0 ;
                  while($row = mysqli_fetch_assoc($i)){
                    $count++;
                    echo "<tr>
                      <td>{$count}</td>
                      <td><img width='100px' src='../images/gallery/{$row["path"]}' alt=''></td>
                      <td>{$row["title"]}</td>
                      <td>
                      <button class='btn btn-danger btn-sm rounded-0' type='submit' value='{$row["id"]}' data-toggle='tooltip' data-placement='top' name='delete_gallery'>
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
  $(document).ready(function() {
    $("#menu_icon").click(function() {
      $(".open_sidbar").toggleClass("small_sidebar");
      $('.remove_text').toggleClass('text_hide');
      $('#content_body').toggleClass('margin_left');
    });
    // $('.del').click(function() {
    //     update_data($(this).attr('value'));
    // });
  });
//   function update_data(id){
//     $.ajax({
//         url: 'agallery.php',
//         type: 'post',
//         data: {
//             'delete_gallery' : id
//         },
//         success: function(response){
//             $('.display_box').empty();
//             $('.display_box').append(response); 
//         }
//     });
//   }
</script>