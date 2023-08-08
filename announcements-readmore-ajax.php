<?php

session_start();
require('conn/config.php');

 $uid = $_POST['retrieveid'];
 
 $query = "SELECT tblannouncements.*, tblregistration.* FROM tblannouncements INNER JOIN tblregistration ON tblannouncements.createdBy = tblregistration.uid WHERE id = '".$uid."'" ;
 $result = mysqli_query($dbc,$query);
 $arr =[];
 $i=0;

 while($row = mysqli_fetch_assoc($result))
 {
  

   $arr[$i] = $row;
   $i++;

     
 }

 echo json_encode($arr);
    ?>