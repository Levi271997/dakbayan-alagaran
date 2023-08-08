<?php
include "conn/config.php";
include "server.php";

  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $adminid= $_SESSION['usersId'];
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $time = date("H:i:s");
  $date = date("Y/m/d");	 

if(!empty($title) && (!empty($desc))){
    $insertsql = "INSERT INTO tblannouncements (`createdBy`,`createdDate`,`createdTime`,`Title`,`Description`) VALUES ('$adminid','$date','$time','$title','$desc')";
    if ($dbc->query($insertsql) === TRUE) {
        echo "Announcement Successfully inserted";
    }else{
        echo "Failed to insert announcements";
    }
}else{
    echo "Please fill all fields";
}


  ?>