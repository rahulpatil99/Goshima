<?php

                $_con=mysqli_connect("localhost","root","","u519790871_goshi");
                
            if(isset($_POST['pay']))
            {
             $P_name =$_POST['p_name'];
              $P_event =$_POST['p_event'];
              $P_email = $_POST['p_email'];
              $P_mobile =$_POST['p_mobile'];
              $P_date =explode("-",$_POST['p_date']);
              $P_slot =$_POST['p_slot'];
            }
            
            if(isset($_POST['check_s']))
            {
                $ss=$_POST['slot'];
                $yyy=$_POST['year'];
                $mmm= $_POST['month'];
                $ddd=$_POST['day'];
              
              $query="select * from hallbook where b_year='$yyy' AND b_month='$mmm' AND b_day='$ddd'";
              $r = mysqli_query($_con,$query);
              if(mysqli_num_rows($r)>0){
                    $c=0;
                    while ($row=mysqli_fetch_row($r))
                     {      
                            if($row[8]=='1'){$c=$c+1;}
                            if($row[8]=='2'){$c=$c+2;}
                    }
                    if($c==3){
                        echo "found all";
                    }
                
                    else if($c==2){
                            if($ss==3){
                                echo "found 3";
                            }
                            else if($ss==1){
                                echo "no found";
                            }
                            else{
                            echo "found 1&2";
                            }
                    }
                    else if($c==1){
                        if($ss==3){
                            echo "found 3";
                        }
                        else if($ss==2){
                            echo "no found";
                        }
                        else{
                            echo "found 1&2";
                        }
                    }
                }
                else{
                    echo "no found";
                }
                mysqli_close($_con);
                exit();
            }
            
            if(isset($_POST['check_d']))
            {
            //  $yy=$_POST['year'];
            //   $mm= $_POST['month'];
            //   $dd=$_POST['day'];
              $dd=$_POST['date'];
            //   $query="select * from hallbook where b_year='$yy' and b_month='$mm' and b_day='$dd'";
            //   $query="select * from hallbook where d_date='$dd'";
            $_con=mysqli_connect("localhost","u519790871_godb","Goshima@2019","u519790871_goshi");
              $i = mysqli_query($_con,"SELECT * FROM hallbook WHERE b_date='$dd' AND status=1");
                if(mysqli_num_rows($i)){
                    $c=0;
                // $row=mysqli_fetch_row($r);
                    while($row = mysqli_fetch_assoc($i))
                     {
                            if($row["b_slot"]=="1"){
                                $c+=1;
                                
                            }
                            if($row["b_slot"]=='2'){
                                $c=$c+2;
                                
                            }
                            if($row["b_slot"]=='3'){
                                $c=3;
                                // break;
                            }
                    }
                    if($c==3){
                        echo "all slot found";
                    }
                    else if($c==2){
                        echo "found slot 2";
                    }
                    else if($c==1){
                        echo "found slot 1";
                    }
                }
                else{
                    echo "no found";
                }
                mysqli_close($_con);
                exit();
            }
                
?>