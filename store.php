<?php

include "server.php";


	# database connection file
	include "conn/config.php";

$tag=$_POST['tag'];;




  $userid =  $_SESSION['usersId'];

  if($tag == "addmember"){


	// # getting image data and store them in var
	$img_name = $_FILES['profile_img']['name'];
	$img_size = $_FILES['profile_img']['size'];
	$tmp_name = $_FILES['profile_img']['tmp_name'];
	//$error    = $_FILES['profile_img']['error'];

  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $suffix = $_POST['suffix'];
  $barangay = $_POST['barangay'];//
  $zone = $_POST['zone'];//
  $saddress = $_POST['saddress'];
  $bdate = $_POST['birthdate'];//
  $age = $_POST['age'];
  $status = $_POST['status'];//
  $gender = $_POST['gender'];
  $voter = $_POST['voter'];
  $number = $_POST['phone'];//
  $email = $_POST['email'];
  $occupation = $_POST['work'];//.

  //family rep
  $rep_name_one =$_POST['repnameone'];
  $rep_name_two =$_POST['repnametwo'];
  $rep_name_three =$_POST['repnamethree'];
  $rep_rel_one =$_POST['reprelone'];
  $rep_rel_two =$_POST['repreltwo'];
  $rep_rel_three =$_POST['reprelthree'];
  $total=$_POST['total'];
  $datespaid = $_POST['classeslist'];
  
  
  $idval=2200000;
  $new_img_name = "";
  $newuseridval= 0;
  $password = "";
	// if ($error === 0) {
	// 	if ($img_size > 1000000) {
	// 		$em = "Sorry, your file is too large.";
	// 		$error = array('error' => 1, 'em'=> $em);
	// 	    echo json_encode($error);
	// 	    exit();
	// 	}else {	
	// 		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	// 		$img_ex_lc = strtolower($img_ex);
	// 		$allowed_exs = array("jpg", "jpeg", "png");


  //        if (in_array($img_ex_lc, $allowed_exs)) {	

$sqlviewdatabase="SELECT * FROM tblregistration WHERE first_name = '".$fname."' AND middle_name = '".$mname."' AND last_name='".$lname."' LIMIT 1";
    $resulta = mysqli_query($dbc, $sqlviewdatabase);
    $rescount = mysqli_fetch_assoc($resulta);
    if($rescount){
        echo "member already existed";    
    }else{


if($_FILES['profile_img']['name'] == ""){
  $new_img_name = "";
}else{
  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
  $img_ex_lc = strtolower($img_ex);
  $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
  $img_upload_path = "profileimages/" .$new_img_name;
  move_uploaded_file($tmp_name, $img_upload_path);
}


$sqls = "SELECT COUNT(uid) as counting from tblregistration ";
             $result = mysqli_query($dbc, $sqls);
             while($results=mysqli_fetch_array($result)){
              $createdcount=$results["counting"] + 1;
              $newuseridval = $idval + $createdcount;
    }
$sql = "INSERT INTO tblregistration (`userid`,`first_name`,`middle_name`,`last_name`,`suffix`,`personnel_id`,`img`,`level_status`,`gender`,`civil_status`,`b_date`,`age`,`baranggay`,`zone`,`street`,`voter`,`phone`,`email`,`occupation`,`date_of_registration`,`password`,`status`,`member_status`)
VALUES ('$newuseridval','$fname','$mname','$lname','$suffix','$userid','$new_img_name','member','$gender','$status','$bdate','$age','$barangay','$zone','$saddress','$voter','$number','$email','$occupation',NOW(),'$password','1','1')";     
          if ($dbc->query($sql) === TRUE) {
            $last_id = mysqli_insert_id($dbc);            
            if (!empty ($rep_name_one) && !empty($rep_rel_one))
            {
              $query1 = "INSERT INTO tblfamilyrep (`member_id`, `family_rep_name`, `relationship`) VALUES ('$last_id','$rep_name_one','$rep_rel_one')"; 
              mysqli_query($dbc,$query1); 
            }
            if(!empty($rep_name_two) && !empty($rep_rel_two))
            {
              $query2 = "INSERT INTO tblfamilyrep (`member_id`, `family_rep_name`, `relationship`) VALUES ('$last_id','$rep_name_two','$rep_rel_two')"; 
              mysqli_query($dbc,$query2); 
            }
            if(!empty($rep_name_three) && !empty($rep_rel_three))
            {
              $query3 = "INSERT INTO tblfamilyrep (`member_id`, `family_rep_name`, `relationship`) VALUES ('$last_id','$rel_name_three','$rep_rel_three')"; 
              mysqli_query($dbc,$query3); 
            }
                // $dt1 = new DateTime();
                // $today = $dt1->format("Y-m-d");
                // $dt2 = new DateTime("+1 month");
                // $datesfinal = $dt2->format("Y-m-d");
               $thisyear= date("Y");
              $datetodays = date('Y/m/d'); 
              $query4="";
              $final="";


              $getday=date('j', strtotime($datetodays));
              if($getday > 30){
                  //  $time = strtotime($dateofreg);
                  $getday = 30;
                    $date = date_create($datetodays);
                    $date->setDate($date->format('Y'), $date->format('m'), $getday);
                     $datetodays=$date->format('Y-m-d');  
                }


                $query5="INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$datetodays','$thisyear','2','$last_id','$userid','1','0')";
                mysqli_query($dbc,$query5); 

              for($x = 0;$x < $datespaid; $x++){ 
            
              if(empty($query4)){
                
                $query4 = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$datetodays','$thisyear','1','$last_id','$userid','1','0')";
                mysqli_query($dbc,$query4); 
              }else{

                 $time = strtotime($datetodays);               
                  $d = new DateTime($datetodays);   
                   $d->modify( 'last day of next month' );
                   $modifieddate=$d->format('j');

                if( $modifieddate <= 29){                                     
                      if($getday > $modifieddate){
                          $final = date("Y-2-28", strtotime( "+ 1 month" , $time));
                      }else{
                          $final = date("Y-2-".$getday."", strtotime( "+ 1 month" , $time));
                      }
                           $query4 = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$final','$thisyear','1','$last_id','$userid','1','0')";

                }else{
                  $final = date("Y-m-".$getday." ", strtotime("+ 1 month", $time));    
                  $query4 = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$final','$thisyear','1','$last_id','$userid','1','0')";
                }
                mysqli_query($dbc, $query4);
                $datetodays = $final;
     
              }
              $sqlfindlastpaid="SELECT * FROM tblpayment WHERE payerid = '".$last_id."' AND typeofpayment='1' AND resetStats='0'";
              if ($result = mysqli_query($dbc, $sqlfindlastpaid)) {
                  $rowcount = mysqli_num_rows( $result );
                  if($rowcount == 12){
                      $sqlupdateresetstats="UPDATE tblpayment SET `resetStats`='1' WHERE payerid ='".$last_id."'  ";
                      mysqli_query($dbc, $sqlupdateresetstats);
                      $quer2="INSERT INTO tblpayment(dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$datetodays','','2','$last_id','$userid','0','0')";
                      mysqli_query($dbc,$quer2); 
                  }       
              }
          
              // if($dbc->query($query4) === TRUE){
              //   if(!empty($final)){
              //     $datetodays = $final;
              //   }
                
              // }
              }
             
             
           

          }


        }
        
    }

                
                    // mysqli_query($dbc, $sql);  
                    // $res = array('error' => 0, 'src'=> $new_img_name);
                    // echo json_encode($res);
  //          exit();
  //       }else {
  //         $em = "You can't upload files of this type";
  //         $error = array('error' => 1, 'em'=> $em);
  //         echo json_encode($error);
  //         exit();
  //       }


	// 	}
	// }else {
	// 	# error message
	// 	$em = "unknown error occurred!";

	// 	# response array
	// 	$error = array('error' => 1, 'em'=> $em);

	

	//     echo json_encode($error);
	//     exit();
	// }

  //$totalpaid=$_POST['total'];
 
 if($tag == "submitpayment"){
  $monthspaid = $_POST['classesslist'];
  $payerid=$_POST['id'];

$yearthisyear=date("Y");
$sql1="SELECT * FROM tblpayment WHERE payerid = '".$payerid."' ORDER BY id DESC LIMIT 1";
$reco = mysqli_query($dbc, $sql1) or die ("database error: ".mysql_error($dbc));
 
while ($rowres = mysqli_fetch_assoc($reco)) {
  $lastdatepaid=$rowres['dateofpayment']; 
}


  $query7="";
  $finals="";


  $getday=date('j', strtotime($lastdatepaid));
  if($getday > 30){
      //  $time = strtotime($dateofreg);
      $getday = 30;
        $date = date_create($lastdatepaid);
        $date->setDate($date->format('Y'), $date->format('m'), $getday);
         $lastdatepaid=$date->format('Y-m-d');  
    }

  for($x = 0;$x < $monthspaid; $x++){ 

    
    
   
    $time = strtotime($lastdatepaid);

                    
    $d = new DateTime($lastdatepaid);   
     $d->modify( 'last day of next month' );
     $modifieddate=$d->format('j');

     if( $modifieddate <= 29){
          if($getday > $modifieddate){
            $final = date("Y-2-28", strtotime( "+ 1 month" , $time));
          }else{
              $final = date("Y-2-".$getday."", strtotime( "+ 1 month" , $time));
          }
          $query7 = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$final','','1','$payerid','$userid','1','0')";    
     }else{
          $lastdatepaid = date("Y-m-".$getday."", strtotime("+ 1 month", $time));
          $query7 = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$lastdatepaid','','1','$payerid','$userid','1','0')";
     }

    
        mysqli_query($dbc, $query7);
        $lastdatepaid=$final;
        

      $sqlfindlastpaid="SELECT * FROM tblpayment WHERE payerid = '".$payerid."' AND typeofpayment='1' AND resetStats='0'";
      if ($result = mysqli_query($dbc, $sqlfindlastpaid)) {
          $rowcount = mysqli_num_rows( $result );
          if($rowcount == 12){
              $sqlupdateresetstats="UPDATE tblpayment SET `resetStats`='1' WHERE payerid ='".$payerid."'  ";
              mysqli_query($dbc, $sqlupdateresetstats);


              $queryinsertnew = "INSERT INTO tblpayment (dateofpayment,yearofpayment,typeofpayment,payerid,coorid,status,resetStats) VALUES ('$lastdatepaid','','2','$payerid','$userid','1','0')";
              mysqli_query($dbc, $queryinsertnew);
          }       
      }


  }

  
 }else if($tag == "availbenefits"){
  $memberid=$_POST['memberid'];
  $benefitid=$_POST['benefitid'];

  $currentdate = date("Y-m-d");
  $dateavailed = strtotime($currentdate);
  $enddate = date("Y-m-d", strtotime("+12 months", $dateavailed));

  $query = "INSERT INTO tblavailedbenefits (memberid,benefitsavailed,date_of_availment,end_of_availment) VALUES ('$memberid','$benefitid','$currentdate','$enddate')";
  if($dbc->query($query) === TRUE){
    echo "yes";
  }else{
    echo "no";
  }

 }

?>