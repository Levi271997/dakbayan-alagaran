<?php


require('conn/config.php');
include('server.php');

$tag=$_POST['tag'];

if($tag == "vp"){
  
 $uid = $_POST['retrieveid'];
$query = "SELECT *,
(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name
from tblregistration  WHERE uid = '".$uid."'" ;
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

 if($tag == "FamRep"){
  $id = $_POST['id'];
  $query1 = "SELECT * FROM tblfamilyrep WHERE member_id='".$id."'" ;
   $result1 = mysqli_query($dbc,$query1);
    $count = 0;
	$famRep="";
	 $icon="";
   while($row1 = mysqli_fetch_assoc($result1))
   {
		$icon = "<svg id='add'  xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='#3468a2' class='bi bi-plus-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/><path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/></svg>";

	if($count == 0){
		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-one' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-one' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a href='#'>$icon</a></div></div>";
	}else if($count == 1){
		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-two' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-two' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a href='#'>$icon</a></div></div>";
	}else if($count == 2){
		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-three' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-three' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a href='#'>$icon</a></div></div>";
	}
	   $count++;
   } 
	 echo $famRep;
 }else if($tag == "retrievepayments"){
	
	$uid=$_POST['id'];

	$yearthisyear= date("Y");
	$date = date("Y/m/d");
	$queryretrieve="SELECT * FROM tblpayment WHERE payerid='".$uid."' AND typeofpayment = '1' AND resetStats='0' ORDER by id ASC";
	$resultretrieve = mysqli_query($dbc,$queryretrieve);

	$arrretrieve =[];
	$z=0;

	while($rowretrieve = mysqli_fetch_assoc($resultretrieve))
	{ 
	   $arrretrieve[$z] = $rowretrieve;
	   $z++;
	 }

	echo json_encode($arrretrieve);
 }else if($tag == "retrievemembercounts"){
	if($_SESSION['level'] == "super admin"){
		$sql = "SELECT * from tblregistration WHERE level_status='member'";
			if ($result = mysqli_query($dbc, $sql)) {
				$rowcount = mysqli_num_rows( $result );
				printf($rowcount);
			}
	}
	
 }else if($tag == "retrieveactivemembers"){
	if($_SESSION['level'] == "super admin"){
		$sqlss = "SELECT count(*) FROM tblregistration WHERE member_status='1' ";
		$result = $dbc->query($sqlss);
		while($row = mysqli_fetch_array($result)) {
			 echo $row['count(*)'];
		
		}
	}
 }else if($tag == "retrieveoverdue"){
	if($_SESSION['level'] == "super admin"){
		$month = date('m');
		$count = 0;
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1'";
		$queryres = mysqli_query($dbc, $sql);
		while($rowres = mysqli_fetch_array($queryres)) {
			
		$sqlss = "SELECT * FROM tblpayment WHERE payerid='".$rowres['uid']."' AND typeofpayment='1' ORDER BY id DESC LIMIT 1";
			$result = $dbc->query($sqlss);
			
				while($row = mysqli_fetch_array($result)) {
					

					 (int)$getPayment =  date("m", strtotime($row['dateofpayment']));
					 $getPandingMonth =  $month -  (int)$getPayment;
					 	if($getPandingMonth > 2 && $getPandingMonth <= 3){

							$stmt = "UPDATE tblregistration SET `member_status`='2' WHERE uid='".$rowres['uid']."'";
							$resultUpdate=mysqli_query($dbc,$stmt);
							if($resultUpdate){
								echo "success";
							}

						}else if($getPandingMonth > 3){
							$stmt = "UPDATE tblregistration SET `member_status`='4' WHERE uid='".$rowres['uid']."'";
							$resultUpdate=mysqli_query($dbc,$stmt);
							if($resultUpdate){
								echo "success";
							}
						}
				
		}
		 

		}

		
	}

 }else if($tag == "retrieveAllDue"){
	$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='2'";
		$queryres = mysqli_query($dbc, $sql);
		echo $rowcount = mysqli_num_rows( $queryres );
	
 }else if($tag == "retrieveAllDeceased"){
	$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='3'";
	$queryres = mysqli_query($dbc, $sql);
	echo $rowcount = mysqli_num_rows( $queryres );
 }else if($tag == "retrievepayername"){
	$uid=$_POST['id'];
	
	$sql="SELECT * FROM tblregistration WHERE uid='".$uid."' ";
	$queryres = mysqli_query($dbc, $sql);
	$arrretrieve =[];
	$z=0;

	while($rowretrieve = mysqli_fetch_assoc($queryres))
	{ 
	   $arrretrieve[$z] = $rowretrieve;
	   $z++;
	 }

	echo json_encode($arrretrieve);
 }
    
	
	?>