<?php 
include 'conn/config.php';
$id = $_POST['id'];
$arryOfPayment = [];

$sql2="SELECT * FROM tblpayment WHERE payerid = '".$id."' AND resetStats = '0' ORDER BY id ASC";
$recos = mysqli_query($dbc, $sql2) or die ("database error: ".mysql_error($dbc));
 
while ($rowress = mysqli_fetch_assoc($recos)) {

$stmt = "UPDATE tblpayment  SET resetStats='1' WHERE id='".$rowress['id']."'";
    $result=mysqli_query($dbc,$stmt);
    if($result){
        echo "Announcement has been updated successfully";      
    }
  
}




?>