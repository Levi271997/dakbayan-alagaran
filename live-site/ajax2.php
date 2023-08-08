<?php 
include 'conn/config.php';
include 'server.php';

$query = null;
$coorid = $_SESSION['usersId'];
$level=$_SESSION['level'];

  if(isset($_POST['search'])){


	$name=$_POST['search'];

    
    if(!($name) == "" ){ 

        if($level === "super admin"){
            if(strlen($name) > 1){
                $query = null;
                $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '%{$name}%' AND level_status = 'member' AND status ='1' OR last_name LIKE '%{$name}%' AND level_status = 'member' AND status ='1'";
            }else { 
                $query= null;
                $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '{$name}%' AND level_status = 'member' AND status ='1' OR last_name LIKE '{$name}%' AND level_status = 'member' AND status ='1'  ";     
            }  
            if($name !== str_replace(' ','',$name)){
                $query = null;
                $query = "SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE (CONCAT(first_name,' ',last_name)) LIKE '%{$name}%' AND level_status = 'member' AND status ='1' OR (CONCAT(last_name,' ',first_name)) LIKE '%{$name}%' AND level_status = 'member' AND status ='1'  ";    
            }
            $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc)); 

        }else{

            if(strlen($name) > 1){
              
                $query = null;
                $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND first_name LIKE '%{$name}%' AND status = '1' OR last_name LIKE '%{$name}%' AND personnel_id = '$coorid' AND status ='1' AND level_status = 'member'  ";
            }else { 
              
                $query =null;
                $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '{$name}%' AND  personnel_id = '$coorid' AND status ='1' OR last_name LIKE '{$name}%' AND personnel_id = '$coorid' AND status ='1'  ";     
            }  
            if($name !== str_replace(' ','',$name)){
                $query = null;
                $query = "SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND (CONCAT(first_name,' ',last_name)) LIKE '%{$name}%' AND status ='1' OR personnel_id = '$coorid' AND (CONCAT(last_name,' ',first_name)) LIKE '%{$name}%' AND level_status = 'member' AND status ='1'";    
            }
            $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc)); 
        }
    
    }else{
        if($level == "super admin"){
            $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE level_status = 'member' AND level_status = 'member' AND status ='1'";
        }else{
            $query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND level_status = 'member' AND status ='1' ";
        }
      
        $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));
      
    }
        echo "<h2>All members</h2>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>User ID</th>";
        echo "<th>Full Name </th>";
        echo "<th>Address</th>";
        echo "<th>Contact Number</th>";
        echo "<th>Status</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($rec)) {
            $id=$row['uid'];
            // $mname=substr()
            echo "<tr id =".$row['uid'].">";
            echo "<td>".$row['userid']." </td>";
            echo "<td class='viewprofile' data-id=".$id." style='pointer-events:auto;cursor:pointer;' >".ucwords($row['last_name']).",  ".ucwords($row['first_name'])." ".strtoupper($row['middle_name'][0]).". </td>";
            echo "<td>".$row['street']." ".$row['barangay_name']." </td>";
            echo "<td>".$row['phone']." </td>";
            
            if($row['member_status'] === '1'){
                echo "<td> <span class='active-indicator'>Active</span> </td>";
            }else if($row['member_status'] === '2'){
                echo "<td> <span class='overdue-indicator'>Overdue</span> </td>";
            }else if($row['member_status'] === '3'){
                echo "<td> <span class='deceased-indicator'>Deceased</span> </td>";
            }else if($row['member_status'] === '4'){
                echo "<td> <span class='terminated-indicator'>Terminated</span> </td>";
            }
                echo "<td><span class='tablebuttons primary view viewprofile' data-id=".$id." style='display:none;' >View</span>";
                if($level === "super admin"){
                echo "<span class='tablebuttons primary delete deletebutton' data-id=".$id." style='display:none;'>Delete</span>";
                }

            if($row['member_status'] == '3' || $row['member_status'] == '4'){
                echo "<span style='pointer-events:auto;cursor:pointer;pointer-events:none;background-color:gray;' class='tablebuttons primary mp makepayments' data-bs-toggle='modal' data-bs-target='#staticBackdrop3' data-id=".$id."><span>&#8369;</span></span></td>";
            }else{
                echo "<span style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary mp makepayments' data-bs-toggle='modal' data-bs-target='#staticBackdrop3' data-id=".$id." ><span>&#8369;</span></span></td>";
            }  
         
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
	
}


  ?>