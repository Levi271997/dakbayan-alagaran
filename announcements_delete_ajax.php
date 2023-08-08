<?php
include 'conn/config.php';

    $id = $_POST['deleteid'];
    $stmt = "DELETE FROM tblannouncements WHERE id='$id'";
    $result=mysqli_query($dbc,$stmt);
    if($result){
        echo "yes";      
    }else{
        echo "no";
    }


?>