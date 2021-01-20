<style>
    .advt{
        margin-left:7%;
    }
    .advt:hover{
        width:317px;
        height:260px;
    }
</style>
<div class="tittle wow fadeInUp">
                <h2>Advertisements</h2>
            </div><br><br><br>
<marquee onmouseover="this.stop()" onmouseout="this.start()">
    <?php
        $_con=mysqli_connect("localhost","root","","u519790871_goshi");
        $i=mysqli_query($_con,"SELECT * FROM ads WHERE (expire >= CURRENT_DATE() AND status>0) OR status=2");
        if(mysqli_num_rows($i)){
          while($row = mysqli_fetch_assoc($i)){
            echo "<img class='advt' src='images/advertise/{$row["name"]}' height='200' width='270' border='2'>";
          }
        }
    ?>
</marquee>

