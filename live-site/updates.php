<?php
include 'conn/config.php';
include 'server.php';

if($_POST['tag'] == 'updateannouncements')
  {

    $id = $_POST['recordid'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $adminid= $_SESSION['usersId'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $time = date("H:i:s");
    $date = date("Y/m/d");	 
  
        $stmt = "UPDATE tblannouncements SET `createdBy`='$adminid', `createdDate`='$date', `createdTime`='$time', `Title`='$title', `Description`='$desc' WHERE id='$id'";
        $result=mysqli_query($dbc,$stmt);
        if($result){
            echo "Announcement has been updated successfully";      
        }else{
            echo "Failed to update announcement";
        } 
  }

  if($_POST['tag'] == 'updateprofile')
  {
    $id = $_POST['recordid'];
    $img_name = $_FILES['profile_img']['name'];
	$img_size = $_FILES['profile_img']['size'];
	$tmp_name = $_FILES['profile_img']['tmp_name'];
	//$error    = $_FILES['profile_img']['error'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $suffix = $_POST['suffix'];
    $barangay = $_POST['barangay'];
    $zone = $_POST['zone'];
    $saddress = $_POST['saddress'];
    $bdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $voter = $_POST['voter'];
    $number = $_POST['phone'];
    $email = $_POST['email'];
    $occupation = $_POST['work'];

    $repnamesidone=$_POST['repnamesidone'];
    $repnamesidtwo=$_POST['repnamesidtwo'];
    $repnamesidthree=$_POST['repnamesidthree'];

    $repnameone=$_POST['repnameone'];
    $reprelone=$_POST['reprelone'];
    $repnametwo=$_POST['repnametwo'];
    $repreltwo=$_POST['repreltwo'];
    $repnamethree=$_POST['repnamethree'];
    $reprelthree = $_POST['reprelthree'];





    $new_img_name = "";
 
    $updatequery="";
    if(empty($_FILES['profile_img']['name'])){
        $new_img_name = "";
       
       $updatequery = "UPDATE `tblregistration` SET `first_name` ='$fname', `middle_name` = '$mname', `last_name` = '$lname', `suffix` = '$suffix',`gender`='$gender',
       `civil_status`='$status',`baranggay`='$barangay',`zone`='$zone',`age`='$age',`street`='$saddress',`voter`='$voter',`b_date`='$bdate',`phone`='$number',`email`='$email',`occupation`='$occupation'  WHERE uid='$id'";
    }else{
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = "profileimages/" .$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        $updatequery = "UPDATE `tblregistration` SET `first_name` ='$fname', `middle_name` = '$mname', `last_name` = '$lname', `suffix` = '$suffix',`gender`='$gender',
        `civil_status`='$status',`baranggay`='$barangay',`zone`='$zone',`age`='$age',`street`='$saddress',`voter`='$voter',`b_date`='$bdate',`phone`='$number',`email`='$email',`occupation`='$occupation' ,`img`='$new_img_name'  WHERE uid='$id'";
    }
        $result=mysqli_query($dbc,$updatequery);
        
        if($result){
            $updatefamrep="UPDATE `tblfamilyrep` SET family_rep_name = '$repnameone' , relationship = '$reprelone' WHERE id = '$repnamesidone' AND member_id='$id' ";
            mysqli_query($dbc,$updatefamrep);

            if(!empty($repnamesidtwo)){
                $updatefamreptwo="UPDATE `tblfamilyrep` SET family_rep_name = '$repnametwo' , relationship = '$repreltwo' WHERE id = '$repnamesidtwo' AND member_id='$id' ";
                mysqli_query($dbc,$updatefamreptwo);
            }
            if(!empty($repnamesidthree)){
                $updatefamrepthree="UPDATE `tblfamilyrep` SET family_rep_name = '$repnamethree' , relationship = '$reprelthree' WHERE id = '$repnamesidthree' AND member_id='$id' ";
                mysqli_query($dbc,$updatefamrepthree);
            }

            if(empty($repnamesidtwo)&& !empty($repnametwo) && !empty($repreltwo) ){
                $insertfamreptwo="INSERT INTO tblfamilyrep (member_id,family_rep_name,relationship) VALUES('$id','$repnametwo', '$repreltwo') ";
                mysqli_query($dbc,$insertfamreptwo);
            }
            if(empty($repnamesidthree)&& !empty($repnamethree)&& !empty($reprelthree)){
                $insertfamrepthree="INSERT INTO tblfamilyrep (member_id,family_rep_name,relationship) VALUES('$id','$repnamethree', '$reprelthree') ";
                mysqli_query($dbc,$insertfamrepthree);
            }

            echo "Profile has been updated successfully";      
        }else{
            echo "Failed to update Profile";
        } 
  }
  if($_POST['tag'] == "updatedeceasedperson"){
    $memberid=$_POST['memberid'];
    $stmt = "UPDATE tblregistration SET `member_status`='3' WHERE uid='$memberid'";
    $result=mysqli_query($dbc,$stmt);
    if($result){
        echo "yes";      
    }else{
        echo "no";
    } 
  }


  
    


?>