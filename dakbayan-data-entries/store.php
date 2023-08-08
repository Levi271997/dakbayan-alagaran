
<?php
    include('conn.php');

    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $suffix = $_POST['suffix'];
    $status = $_POST['status'];
    $voter = $_POST['voter'];
    $gender = $_POST['gender'];
    $barangay = $_POST['barangay'];
    $zone = $_POST['zone'];
    $saddress = $_POST['saddress'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $work = $_POST['work'];
    $rep_name_one = $_POST['rep_name_one'];
    $rep_name_two = $_POST['rep_name_two'];
    $rep_name_three = $_POST['rep_name_three'];
    $rep_rel_one = $_POST['rep_rel_one'];
    $rep_rel_two = $_POST['rep_rel_two'];
    $rep_rel_three = $_POST['rep_rel_three'];
     $dateofreg = $_POST['dateofreg'];
     $classlists = $_POST['classlists'];

    
    $idval=2200000;
    $newuseridval= 0;
    $last_id=0;


    

    $sqlviewdatabase="SELECT * FROM tblregistration WHERE first_name = '".$fname."' AND middle_name = '".$mname."' AND last_name='".$lname."' LIMIT 1";
    $res = mysqli_query($dbc, $sqlviewdatabase);
    $rescount = mysqli_fetch_assoc($res);
    if($rescount){
        echo "member already existed";    
    }else{
       
        $sqls = "SELECT COUNT(uid) as counting from tblregistration ";
        $result = mysqli_query($dbc, $sqls);
        while($results=mysqli_fetch_array($result)){
        $createdcount=$results["counting"] + 1;
        $newuseridval = $idval + $createdcount;
        }
        $queryinsert="INSERT INTO tblregistration (userid, first_name , middle_name , last_name , suffix , personnel_id , img , level_status , gender , civil_status , b_date , age , baranggay , zone , street , voter , phone , email , occupation , date_of_registration , password,status,member_status)VALUES('$newuseridval','$fname','$mname','$lname','$suffix','1','','member','$gender','$status','$birthdate','$age','$barangay','$zone','$saddress','$voter','$phone','$email','$work','$dateofreg','','1','1')";
       
       
       
        if(mysqli_query($dbc,$queryinsert)){
          
           $last_id = mysqli_insert_id($dbc);

           if(!empty($rep_name_one) && !empty($rep_rel_one)){
            $query2 = "INSERT INTO tblfamilyrep(member_id,family_rep_name,relationship)VALUES('$last_id','$rep_name_one','$rep_rel_one')";
            mysqli_query($dbc, $query2);
           }
           if(!empty($rep_name_two) && !empty($rep_rel_two)){
            $query3 = "INSERT INTO tblfamilyrep(member_id,family_rep_name,relationship)VALUES('$last_id','$rep_name_two','$rep_rel_two')";
            mysqli_query($dbc, $query3);
           }
           if(!empty($rep_name_three) && !empty($rep_rel_three)){
            $query4 = "INSERT INTO tblfamilyrep(member_id,family_rep_name,relationship)VALUES('$last_id','$rep_name_three','$rep_rel_three')";
            mysqli_query($dbc, $query4);
           }

      
               
                $quer="";
                $final="";
                $modifdate="";
              

                $getday=date('j', strtotime($dateofreg));
                if($getday > 30){
                    //  $time = strtotime($dateofreg);
                    $getday = 30;
                      $date = date_create($dateofreg);
                      $date->setDate($date->format('Y'), $date->format('m'), $getday);
                       $dateofreg=$date->format('Y-m-d');  
                  }

                  $quer2="INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$dateofreg','','2','$last_id','1','0','0')";
                  mysqli_query($dbc,$quer2); 
                for($x = 0;$x < $classlists; $x++){ 

                
                  
                    if(empty($quer)){    
                        
                        $quer = "INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$dateofreg','','1','$last_id','1','0','0')";
                        mysqli_query($dbc, $quer);
                      
                      
                    }else{
                       
                  
                       
                        $time = strtotime($dateofreg);
                      
                       $d = new DateTime($dateofreg);   
                        $d->modify( 'last day of next month' );
                        $modifieddate=$d->format('j');
                       
                      
                        if( $modifieddate <= 29){                                     
                            if($getday > $modifieddate){
                                $final = date("Y-2-28", strtotime( "+ 1 month" , $time));
                            }else{
                                $final = date("Y-2-".$getday."", strtotime( "+ 1 month" , $time));
                            }
                            $quer = "INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$final','','1','$last_id','1','0','0')";      
                          
                                          
                        }else{
                            $final = date("Y-m-".$getday." ", strtotime("+ 1 month", $time));                                     
                            $quer = "INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$final','','1','$last_id','1','0','0')";   

                        }

                            mysqli_query($dbc, $quer);
                            $dateofreg = $final;
                    
                    }
                    
                        $sqlfindlastpaid="SELECT * FROM tblpayment WHERE payerid = '".$last_id."' AND typeofpayment='1' AND resetStats='0'";
                        if ($result = mysqli_query($dbc, $sqlfindlastpaid)) {
                            $rowcount = mysqli_num_rows( $result );
                            if($rowcount == 12){
                                $sqlupdateresetstats="UPDATE tblpayment SET `resetStats`='1' WHERE payerid ='".$last_id."'  ";
                                mysqli_query($dbc, $sqlupdateresetstats);
                                $quer2="INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$dateofreg','','2','$last_id','1','0','0')";
                                mysqli_query($dbc,$quer2); 
                            }       
                        }
                    

               
                }
                



               echo "user successfully registered";
        }else{
            echo "error registering";
        }

      
    }




    ?>
