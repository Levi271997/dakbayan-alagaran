<?php
require('conn/config.php');
include('server.php');

$getcoorid=0;
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

	// $sql2="SELECT first_name as fname FROM tblregistration WHERE uid='".$row['personnel_id']."' LIMIT 1";
	// $result2 = mysqli_query($dbc,$sql2);
	// while($row2 = mysqli_fetch_assoc($result2))
 	// {
	// 	array_insert($arr,$row2);
	// 	echo json_encode($arr);
 	// }
  }
echo json_encode($arr);
}

// if($tag == "getcoor"){
//   	$sql2="SELECT firstname FROM tblregistration WHERE uid='".$getcoorid."' LIMIT 1";
// 	$result2 = mysqli_query($dbc,$sql2);
// 	while($row2 = mysqli_fetch_assoc($result2))
//  	{
// 		echo $row2;
//  	}
// }

 if($tag == "FamRep"){
  $id = $_POST['id'];
  $query1 = "SELECT * FROM tblfamilyrep WHERE member_id='".$id."'" ;
   $result1 = mysqli_query($dbc,$query1);
    $count = 0;
	$famRep="";
	 $icon="";

   while($row1 = mysqli_fetch_assoc($result1))
   {
		

	if($count == 0){

		$icon = "<svg style='display:none' id='add'  xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='#3468a2' class='bi bi-plus-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/><path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/></svg>";

		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-one' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-one' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a>$icon</a></div></div>";
	}else if($count == 1){
		$icon = "<svg style='display:none' id='removeone' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='red' class='bi bi-dash-circle' viewBox='0 0 16 16'>
		<path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'></path>
		<path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'></path>
	  </svg>";

		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-two' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-two' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a>$icon</a></div></div>";
	}else if($count == 2){
		$icon = "<svg style='display:none' id='removetwo' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='red' class='bi bi-dash-circle' viewBox='0 0 16 16'>
		<path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'></path>
		<path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'></path>
	  </svg>";

		$famRep .= 
		"<div id='".$row1['id']."' class='representative'><div><label><input id='rep-name-three' type='text' name='repname-one' class='' placeholder='Pangalan (Full Name)' autocomplete='off' value='".$row1['family_rep_name']."'></label><label><input id='rep-relation-three' type='text' name='reprel-one' class='' placeholder='Relasyon (Relationship)' autocomplete='off' value='".$row1['relationship']."'></label><a>$icon</a></div></div>";
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
	if(mysqli_num_rows($resultretrieve) > 0){
		while($rowretrieve = mysqli_fetch_assoc($resultretrieve))
		{ 
		$arrretrieve[$z] = $rowretrieve;
		$z++;
		}
		
		
		$sql1="SELECT * FROM tblpayment WHERE payerid = '".$uid."' AND typeofpayment = '1' AND resetStats='0' ORDER BY id DESC LIMIT 1";
		$reco = mysqli_query($dbc, $sql1) or die ("database error: ".mysql_error($dbc));
		if(mysqli_num_rows($reco) > 0){ 
			while ($rowres = mysqli_fetch_assoc($reco)) {
			$lastdatepaid=$rowres['dateofpayment']; 
			$arrretrieve[$z] = $lastdatepaid;
			}
  		}
		  echo json_encode($arrretrieve);
	}else{
		$queryretrieving="SELECT dateofpayment FROM tblpayment WHERE payerid='".$uid."' AND typeofpayment = '1' ORDER by id DESC ";
		$resultretrieving = mysqli_query($dbc,$queryretrieving);
		
		// if(mysqli_num_rows($resultretrieving) > 0){ 
		// 	while ($rowresieving = mysqli_fetch_assoc($resultretrieving)) {
		// 	$userlastdatepaid=$rowresieving['dateofpayment']; 
		// 	//$arrretrieve[$z] = $lastdatepaid;
		// 	echo $userlastdatepaid;
		// 	}
  		// }
		while($rowretrieving = mysqli_fetch_assoc($resultretrieving))
		{ 
		$arrretrieve[$z] = $rowretrieving;
		$z++;
		}
		$arrretrieve[$z]="reset";
		echo json_encode($arrretrieve);
		//echo "yes";
		
	}
	
 }else if($tag=="countrecords"){
	$uid=$_POST['id'];
	$sqlss = "SELECT count(*) FROM tblpayment WHERE payerid='".$uid."' AND resetStats = '0' AND typeofpayment ='1'";
	$result = mysqli_query($dbc,$sqlss);
	  while ($row = mysqli_fetch_assoc($result)) {
		$recordscounts=$row['count(*)']; 
		echo $recordscounts;
	  }
	
	// $result = $dbc->query($sqlss);
	  // 	while($row = mysqli_fetch_array($result)) {
	  // 		 echo $row['count(*)'];
		  
	  // 	}
  } else if($tag =="retrievelastpayment"){
	$uid=$_POST['id'];

	$yearthisyear= date("Y");
	$date = date("Y/m/d");
	$queryretrieve="SELECT * FROM tblpayment WHERE payerid='".$uid."' AND typeofpayment = '1' AND resetStats='0' ORDER by id DESC LIMIT 1";
	$resultretrieve = mysqli_query($dbc,$queryretrieve);


	if(mysqli_num_rows($resultretrieve) > 0){
		while($rowretrieve = mysqli_fetch_assoc($resultretrieve))
		{ 
		$arrretrieve[$z] = $rowretrieve;
		$z++;
		}

		echo json_encode($arrretrieve);

	}


 } else if($tag == "retrievemembercounts"){
	if($_SESSION['level'] == "super admin"){
		$sql = "SELECT * from tblregistration";
			if ($result = mysqli_query($dbc, $sql)) {
				$rowcount = mysqli_num_rows( $result );
				printf($rowcount);
			}
	}else if($_SESSION['level']=="coordinator"){
		$coorid=$_SESSION['usersId'];
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND personnel_id='".$coorid."'";
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
	}else if($_SESSION['level']== "coordinator"){
		$coorid=$_SESSION['usersId'];
		$sqlss = "SELECT count(*) FROM tblregistration WHERE member_status='1' AND personnel_id='".$coorid."' ";
		$result = $dbc->query($sqlss);
		while($row = mysqli_fetch_array($result)) {
			 echo $row['count(*)'];
		
		}
	}
 }else if($tag == "retrieveoverdue"){
	if($_SESSION['level'] == "super admin"){
		$month = date('m');
		$yearthisyear=date('Y');
		echo $year;
		$count = 0;
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1'";
		$queryres = mysqli_query($dbc, $sql);
		while($rowres = mysqli_fetch_array($queryres)) {		
		$sqlss = "SELECT * FROM tblpayment WHERE payerid='".$rowres['uid']."' AND typeofpayment='1' ORDER BY id DESC LIMIT 1";
			$result = $dbc->query($sqlss);
			
				while($row = mysqli_fetch_array($result)) {
					
					 (int)$getPayment =  date("m", strtotime($row['dateofpayment']));
					 (int)$getPaymentyear = date("Y", strtotime($row['dateofpayment']));
					 $gaptoyearend = 0;
					 $currentyeargap=0;
						$totalgaps=0;

					 if((int)$getPaymentyear == $yearthisyear){
						$getPandingMonth =  $month -  (int)$getPayment;
							if($getPandingMonth > 2 && $getPandingMonth <= 3){

								$stmt = "UPDATE tblregistration SET `member_status`='2' WHERE uid='".$rowres['uid']."'";
								$resultUpdate=mysqli_query($dbc,$stmt);
								if($resultUpdate){
									echo "success";
								}

							}else if($getPandingMonth > 3){
								$stmt = "UPDATE tblregistration SET `member_status`='4' WHERE uid='".$rowres['uid']."' AND `member_status` != '3' ";
								$resultUpdate=mysqli_query($dbc,$stmt);
								if($resultUpdate){
									echo "success";
								}
							}
					 }else if(((int)$getPaymentyear < $yearthisyear)){
						$gaptoyearend = 12 - (int)$getPayment;
						$currentyeargap=$month - 1;
						$totalgaps=$gaptoyearend + $currentyeargap;

						if($totalgaps < 2 && $totalgaps <=3){
							$stmt = "UPDATE tblregistration SET `member_status`='2' WHERE uid='".$rowres['uid']."'";
							$resultUpdate=mysqli_query($dbc,$stmt);
							if($resultUpdate){
								echo "success";
							}
						}else if($totalgaps > 3){
							$stmt = "UPDATE tblregistration SET `member_status`='4' WHERE uid='".$rowres['uid']."' AND `member_status` != '3' ";
							$resultUpdate=mysqli_query($dbc,$stmt);
							if($resultUpdate){
								echo "success";
							}
						}
						

					 }
					
				}
		}	
	}else if($_SESSION['coordinator']){
		$coorid=$_SESSION['usersId'];
		$month = date('m');
		$count = 0;
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND personnel_id='".$coorid."'";
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
							$stmt = "UPDATE tblregistration SET `member_status`='4' WHERE uid='".$rowres['uid']."' AND `member_status` != '3' ";
							$resultUpdate=mysqli_query($dbc,$stmt);
							if($resultUpdate){
								echo "success";
							}
						}				
				}
		}
	}

 }else if($tag == "retrieveAllDue"){
	$level=$_SESSION['level'];
	$coorid=$_SESSION['usersId'];

	if($level == "super admin"){
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='2'";
	}else{
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='2' AND personnel_id='".$coorid."'";
	}
	
		$queryres = mysqli_query($dbc, $sql);
		echo $rowcount = mysqli_num_rows( $queryres );
	
 }else if($tag == "retrieveAllDeceased"){
	$level=$_SESSION['level'];
	$coorid=$_SESSION['usersId'];	
	if($level == "super admin"){
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='3'";
	}else{
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='3' AND personnel_id='".$coorid."'";
	}
	
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
 }else if($tag == "retrieveCoordinator"){

	$coorId=$_POST['coorId'];
	
	$sql="SELECT first_name,last_name FROM tblregistration WHERE uid='".$coorId."' LIMIT 1";
	$queryres = mysqli_query($dbc, $sql);
	$arrretrieve =[];
	$z=0;

	while($rowretrieve = mysqli_fetch_assoc($queryres))
	{ 
	   $arrretrieve[$z] = $rowretrieve;
	   $z++;
	 }
	 echo json_encode($arrretrieve);
 }else if($tag == "retrievetransaction"){
	$id=$_POST['retrieveid'];
	
	$sql="SELECT tblpayment.*,tblregistration.* FROM tblpayment INNER JOIN tblregistration ON tblpayment.coorid=tblregistration.uid WHERE payerid='".$id."'";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));

	echo "<table>";
        echo "<thead>";
			echo "<tr>";
				echo "<th>Date of payment</th>";
				echo "<th>Type of payment</th>";
				echo "<th>Amount</th>";
				echo "<th>Received By</th>";
			echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($rec)) {
            echo "<tr>";
				echo "<td>".$row['dateofpayment']." </td>";
				if($row['typeofpayment']=='1'){
					echo "<td> Monthly </td>";
					echo "<td> 20.00 </td>";
				}else if($row['typeofpayment']=='2'){
					echo "<td> Yearly </td>";
					echo "<td> 100.00 </td>";
				}
				echo "<td>".$row['first_name']." </td>";				
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
 }else if($tag == "retrievethismemberslastpayment"){
	$profileid = $_POST['profileid'];
	$sql="SELECT dateofpayment FROM tblpayment WHERE payerid = '".$profileid."' AND typeofpayment='1' ORDER BY id DESC LIMIT 1 ";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	while ($row = mysqli_fetch_assoc($rec)) {
		echo $row['dateofpayment'];
	}
 }else if($tag == "verifycashassistance"){
	$memberid = $_POST['memberid'];
	$sql="SELECT end_of_availment FROM tblavailedbenefits WHERE memberid = '".$memberid."' AND benefitsavailed = '1' ORDER BY id DESC LIMIT 1";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	$date = date("Y-m-d");
	if(mysqli_num_rows($rec) > 0){
		while ($row = mysqli_fetch_assoc($rec)) {

			$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				if($row['end_of_availment'] == $date){
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
						echo "<div class='columns' id='cashassistance' data-id='1'>Cash Assistance <span>&#8369<span> 10,000.00 (Accident/Natural Death)</div>";
					}
				}
			}	
		}
	
	}else{
		$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
							echo "<div class='columns' id='cashassistance' data-id='1'>Cash Assistance <span>&#8369<span> 10,000.00 (Accident/Natural Death)</div>";
					}
				
			}
	}
	

}else if($tag == "verifylegalassistance"){
	
	$memberid = $_POST['memberid'];
	$sql="SELECT end_of_availment FROM tblavailedbenefits WHERE memberid = '".$memberid."' AND benefitsavailed = '3' ORDER BY id DESC LIMIT 1";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	$date = date("Y-m-d");
	if(mysqli_num_rows($rec) > 0){
		while ($row = mysqli_fetch_assoc($rec)) {


		$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				if($row['end_of_availment'] == $date){
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
						echo "<div class='columns' id='LegalAssistance' data-id='3'>Legal Assistance (Personal Case)<span>&#8369<span> 10,000.00</div>";
					}
				}
			}	
		}
	}else{
		$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
						echo "<div class='columns' id='LegalAssistance' data-id='3'>Legal Assistance (Personal Case)<span>&#8369<span> 10,000.00</div>";
					}
				
			}
	}
	
}else if($tag == "verifyHospitalization"){
	$memberid = $_POST['memberid'];
	$sql="SELECT end_of_availment FROM tblavailedbenefits WHERE memberid = '".$memberid."' AND benefitsavailed = '4' ORDER BY id DESC LIMIT 1";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	$date = date("Y-m-d");
	if(mysqli_num_rows($rec) > 0){
		while ($row = mysqli_fetch_assoc($rec)) {

			$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				if($row['end_of_availment'] == $date){
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
						echo "<div class='columns' id='Hospitalization' data-id='4'>Hospitalization Allowance <span>&#8369<span>500.00 per day for three (3) days if admitted (Can be used only once</div>";
					}					
				}	
			}
		}
	}else{
		$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
		$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
		while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
			if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
				echo "<div class='columns' id='Hospitalization' data-id='4'>Hospitalization Allowance <span>&#8369<span>500.00 per day for three (3) days if admitted (Can be used only once</div>";
			}
			 
		}
		
	}
	
}else if($tag == "verifyBurial"){
	$memberid = $_POST['memberid'];
	$sql="SELECT end_of_availment FROM tblavailedbenefits WHERE memberid = '".$memberid."' AND benefitsavailed = '2' ORDER BY id DESC LIMIT 1";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	
	if(mysqli_num_rows($rec) == 0){
		$sqltwo="SELECT member_status FROM tblregistration WHERE uid='".$memberid."'";
			$rectwo = mysqli_query($dbc, $sqltwo) or die ("database error: ".mysql_error($dbc));
			while ($rowtwo = mysqli_fetch_assoc($rectwo)) {
				
					if($rowtwo['member_status'] != 3 && $rowtwo['member_status'] != 4 ){
						echo "<div class='columns' id='deceased' data-id='2'>Free Burial Servies(Embalming and Coffin)</div>";
					}
				
			}
		
	}
}else if($tag =="getlastid"){
	$sql="SELECT uid FROM tblregistration ORDER BY uid DESC LIMIT 1";
	$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));
	while ($row = mysqli_fetch_assoc($rec)) {
		echo $row['uid'];
	}
}else if($tag == "updateburial"){
	$memberid = $_POST['memberid'];
	
	$sql="DELETE FROM tblavailedbenefits WHERE memberid = '".$memberid."' AND benefitsavailed = '2'";
	mysqli_query($dbc, $sql);
}else if($tag == "retrieveAllTerminated"){
	$level=$_SESSION['level'];
	$coorid=$_SESSION['usersId'];
	if($level == "super admin"){
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='4'";
	}else{
		
		$sql = "SELECT * from tblregistration WHERE level_status='member' AND status='1' AND member_status='4' AND personnel_id = '".$coorid."'";
	}
	
	$queryres = mysqli_query($dbc, $sql);
	echo $rowcount = mysqli_num_rows( $queryres );
}else if($tag == "retrieveadminimages"){
	$adminid = $_POST['adminid'];

	$query = "SELECT * FROM tblregistration WHERE uid ='".$adminid."'" ;
	 $result = mysqli_query($dbc,$query);
	
	 $arr =[];
	 $i=0;
	 while($row = mysqli_fetch_assoc($result))
	 {	
		
	   $arr[$i] = $row;
		$i++;
	  }
	echo json_encode($arr);
}else if($tag == "retrieveallrecentadded"){
	$coorid = $_SESSION['usersId'];
	$level=$_SESSION['level'];
	echo "<header class='page-header flex sp'>";
	echo "<h2>Recently Added Members</h2>";
	echo "</header>";

	if($level == "super admin"){
		$query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name
		,barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id ORDER BY uid DESC LIMIT 14";
	}else{
		$query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name
		,barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' ORDER BY uid DESC LIMIT 14";
	}
  
	$rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));

if(mysqli_num_rows($rec) > 0){

		echo "<table class='tbl-members recently'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Name </th>";
					echo "<th>Address</th>";
					if($level=="super admin"){
						echo "<th>Added By</th>";
					}					
					echo "<th>Date Registered</th>";
					echo "<th></th>";
				echo "</tr>";
			echo "</thead>";
		echo "<tbody>";

		while ($row = mysqli_fetch_assoc($rec)) {
			$id=$row['uid'];	
			echo "<tr id =".$row['uid'].">";       
			echo "<td class='viewprofile' data-id=".$id." style='pointer-events:auto;cursor:pointer;' >".ucwords($row['last_name']).",  ".ucwords($row['first_name'])." ".strtoupper($row['middle_name'][0]).". </td>";
			echo "<td>".$row['street']." ".$row['barangay_name']." </td>";
			if($level == "super admin"){
				$sqlgetname="SELECT first_name AS adminfname ,last_name AS adminlname FROM tblregistration WHERE uid = ".$row['personnel_id']."";
				$rec2=mysqli_query($dbc, $sqlgetname) or die ("database error: ".mysql_error($dbc));
				$row2 = mysqli_fetch_assoc($rec2);
					echo "<td>".$row2['adminfname']."</td>";
			}
			echo "<td>".$row['date_of_registration']."</td>";
			if($level ==="super admin"){
				echo "<td><span title='Delete member' style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary deletemember' data-id=".$id." ></span></td>";
			}
			echo "</tr>";
		}
			echo "</tbody>";
			echo "</table>";

	
}else{
	echo "<img class='nr' src='images/norecord.svg'>";
}

}

 
 
    
	
	?>