<?php
include 'conn/config.php';

    $id = $_POST['usersid'];
    $tag=$_POST['tag'];
    if($tag=="deletemember"){

    $stmt = "DELETE FROM tblregistration  WHERE uid='$id'";
    $result=mysqli_query($dbc,$stmt);
    if($result){
       $stmt2="DELETE FROM tblpayment WHERE payerid ='$id' ";
       mysqli_query($dbc,$stmt2);
       
       $stmt3="DELETE FROM tblfamilyrep WHERE member_id='$id'";
       mysqli_query($dbc,$stmt3);

       $stmt4= "DELETE FROM tblavailedbenefits WHERE memberid='$id'";
       mysqli_query($dbc,$stmt4);

       $stmt5="DELETE FROM tblannouncements WHERE createdBy ='$id'";
       mysqli_query($dbc,$stmt5);


       echo "User has been successfully deleted from the database";

    }else{
        echo "Deletion failed";
    }

    }


?>