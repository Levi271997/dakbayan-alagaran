<?php
session_start();
require('conn/config.php');


if($_POST['tag'] == 'barangaylist')
  {
    $query = "select * from barangay";
    $result = mysqli_query($dbc,$query);
    $arr =[];
    $i=0;
    while($row = mysqli_fetch_assoc($result))
    {
      $arr[$i] = $row;
      $i++;
    }
    echo json_encode($arr);
  }
 
  if($_POST['tag'] == 'zonelist')
  {
    $barangay_id = $_POST['barangay_id'];
 
    $query = "select * from tbl_zones where baranggay = '".$barangay_id."'" ;

    $result = mysqli_query($dbc,$query);
 
    $arr =[];
    $i=0;
 
    while($row = mysqli_fetch_assoc($result))
    {
      $arr[$i] = $row;
      $i++;

    }
 
    echo json_encode($arr);
  }



?>