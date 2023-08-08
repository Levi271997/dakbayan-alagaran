<?php
//session_start();
include("conn/config.php");

$arr =[];
$payerid = $_POST['id'];
$date = date("Y/m/d");
$sql1="SELECT * FROM tblpayment WHERE payerid = '".$payerid."' AND typeofpayment = '1' AND resetStats='0' ORDER BY id DESC LIMIT 1";
$reco = mysqli_query($dbc, $sql1) or die ("database error: ".mysql_error($dbc));
 if(mysqli_num_rows($reco) > 0){ 
    while ($rowres = mysqli_fetch_assoc($reco)) {
      $lastdatepaid=$rowres['dateofpayment']; 
      echo $lastdatepaid;
    }
  }else{
    $queryretrieving="SELECT dateofpayment FROM tblpayment WHERE payerid='".$payerid."' AND typeofpayment = '1' ORDER by id DESC LIMIT 1 ";
		$resultretrieving = mysqli_query($dbc,$queryretrieving);
		while ($rowresults = mysqli_fetch_assoc($resultretrieving)) {
      $lastdatepayment=$rowresults['dateofpayment']; 
      echo $lastdatepayment;
    }
		//echo "yes";
	}
// }else{
//   $lastdatepaid = $date;
// }
// array_push($arr,$lastdatepaid );


// $sql2="SELECT * FROM tblpayment WHERE payerid = '".$payerid."' AND typeofpayment = '1' ORDER BY id ASC LIMIT 1";
// $recos = mysqli_query($dbc, $sql2) or die ("database error: ".mysql_error($dbc));
 
// while ($rowress = mysqli_fetch_assoc($recos)) {
//   $latest=$rowress['dateofpayment']; 
// }
// array_push($arr,$latest);

// echo json_encode($arr);
//$tag=$_POST['countrecords']''


?>