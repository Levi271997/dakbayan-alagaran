<?php 

include 'conn/config.php';
include 'server.php';

$query = null;
$coorid = $_SESSION['usersId'];
$level=$_SESSION['level'];
$name = "";

$limit = 14;  

if (isset($_GET["page"]))
 { 
    $page  = $_GET["page"];
 } else {
     $page=1; 
}  
$start_from = ($page-1) * $limit;  

?>

<header class="page-header flex sp">
    <h2>Members</h2>
    <ul class="legends flex">
        <li class="active">On-time</li>
        <li class="due">Over-due</li>
        <li class="terminated">Terminated</li>
        <li class="deceased">Deceased</li>
    </ul>
</header>

<?php
if(isset($_POST['search'])){
	$name=$_POST['search'];

    if(!($name) == "" ){ 
        if($level === "super admin"){
            if(strlen($name) > 1){
                $query = null;
                $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '%{$name}%' AND status ='1' OR last_name LIKE '%{$name}%' AND status ='1' ";
            }else { 
                $query= null;
                $query="SELECT tblregistration.*, (SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '{$name}%' AND status ='1' OR last_name LIKE '{$name}%' AND status ='1' ";     
            }  
            if($name !== str_replace(' ','',$name)){
                $query = null;
                $query = "SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name,  barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE (CONCAT(first_name,' ',last_name)) LIKE '%{$name}%' AND status ='1' OR (CONCAT(last_name,' ',first_name)) LIKE '%{$name}%' AND status ='1' ";    
            }
            $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc)); 

        }else{

            if(strlen($name) > 1){
              
                $query = null;
                $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND first_name LIKE '%{$name}%' AND status = '1' OR last_name LIKE '%{$name}%' AND personnel_id = '$coorid' AND status ='1' LIMIT $start_from, $limit";
            }else { 
              
                $query =null;
                $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE first_name LIKE '{$name}%' AND  personnel_id = '$coorid' AND status ='1' OR last_name LIKE '{$name}%' AND personnel_id = '$coorid' AND status ='1' LIMIT $start_from, $limit";     
            }  
            if($name !== str_replace(' ','',$name)){
                $query = null;
                $query = "SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND (CONCAT(first_name,' ',last_name)) LIKE '%{$name}%' AND status ='1' OR personnel_id = '$coorid' AND (CONCAT(last_name,' ',first_name)) LIKE '%{$name}%' AND status ='1' LIMIT $start_from, $limit";    
            }
            $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc)); 
        }
    
    }else{
        if($level == "super admin"){
            $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name,  barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE status ='1' LIMIT $start_from, $limit";
        }else{
            $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND status ='1' LIMIT $start_from, $limit";
        }
      
       $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));
      
    }
 //$query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE status ='1' LIMIT $start_from, $limit";
    // $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));
    if(mysqli_num_rows($rec) > 0){

        echo "<table class='tbl-members all'>";
        echo "<thead>";
        echo "<tr>";
        //echo "<th>User ID</th>";
        echo "<th>&nbsp;</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th class='phone'>Number</th>";    
        echo "<th></th>";
        echo "<th class='payment'>Pay</th>";
        echo "<th></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($rec)) {
            $id=$row['uid'];
           
            // echo "<tr id =".$row['uid'].">";
            // if($row['level_status']=='coordinator' || $row['level_status']=='super admin'){
            //     echo "<td style='color:#77aae4'>".$row['userid']." </td>";
            // }else{
            //     echo "<td>".$row['userid']." </td>";
            // }
            
            if($row['member_status'] === '1'){
                echo "<td><span class='indicator active'>&nbsp;</span> </td>";
            }else if($row['member_status'] === '2'){
                echo "<td> <span class='indicator overdue'>&nbsp;</span> </td>";
            }else if($row['member_status'] === '3'){
                echo "<td> <span class='indicator deceased'>&nbsp;</span> </td>";
            }else if($row['member_status'] === '4'){
                echo "<td> <span class='indicator terminated'>&nbsp;</span> </td>";
            }
            
            echo "<td class='viewprofile' data-id=".$id." style='pointer-events:auto;cursor:pointer;' >".ucwords($row['last_name']).",  ".ucwords($row['first_name'])." ".strtoupper($row['middle_name'][0]).". </td>";
           
            if( $row['zone'] !='0'){
                echo "<td class='address'>".$row['street']." ".$row['street_name']." ".$row['barangay_name']." </td>";
            }else{
                echo "<td class='address'>".$row['street']." ".$row['barangay_name']." </td>";
            }
            
            echo "<td>".$row['phone']."</td>";
           
            echo "<td><a data-id=".$row['phone']." class='tablebuttons primary callicon'></a></td>";

            echo "<td class='btns'>";
          
            if($row['member_status'] == '3' || ($row['member_status'] == '4' && $level==="coordinator")){
                echo "<span style='pointer-events:auto;cursor:pointer;pointer-events:none;background-color:#ccc;' class='tablebuttons primary makepayments'></span>";            
            }else{
                echo "<span title='Make Payment' style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary makepayments' data-bs-toggle='modal' data-bs-target='#staticBackdrop3' data-id=".$id." ></span>";        
            }  
           
            echo "</td>";  
            if($level ==="super admin"){
                echo "<td><span title='Delete member' style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary deletemember' data-id=".$id." ></span></td>";
            }
            
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

    }else{
        // echo "<p class='nrindicator'>No records found</p>";
        echo "<img class='nr' src='images/norecord.svg'>";
     }
 

	
} else {


    if($level == "super admin"){
        $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name,  barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE status ='1' LIMIT $start_from, $limit";
    }else{
        $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name,  barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE personnel_id = '$coorid' AND status ='1' LIMIT $start_from, $limit";
    }
    //$query="SELECT tblregistration.*, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE status ='1' LIMIT $start_from, $limit";
     $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));

     if(mysqli_num_rows($rec) > 0){
    
    echo "<table class='tbl-members all'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>&nbsp;</th>";
    //echo "<th>User ID</th>";
    echo "<th>Name</th>";
    echo "<th>Address</th>";
    echo "<th class='phone'>Number</th>";    
    echo "<th></th>";
    echo "<th class='payment'>Pay</th>";
    echo "<th></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($rec)) {
        $id=$row['uid'];
       
        // echo "<tr id =".$row['uid'].">";
        // if($row['level_status']=='coordinator' || $row['level_status']=='super admin'){
        //     echo "<td style='color:#77aae4'>".$row['userid']." </td>";
        // }else{
        //     echo "<td>".$row['userid']." </td>";
        // }

        if($row['member_status'] === '1'){
            echo "<td><span class='indicator active'>&nbsp;</span> </td>";
        }else if($row['member_status'] === '2'){
            echo "<td> <span class='indicator overdue'>&nbsp;</span> </td>";
        }else if($row['member_status'] === '3'){
            echo "<td> <span class='indicator deceased'>&nbsp;</span> </td>";
        }else if($row['member_status'] === '4'){
            echo "<td> <span class='indicator terminated'>&nbsp;</span> </td>";
        }
        
        echo "<td class='viewprofile' data-id=".$id." style='pointer-events:auto;cursor:pointer;' >".ucwords($row['last_name']).",  ".ucwords($row['first_name'])." ".strtoupper($row['middle_name'][0]).". </td>";
        
        if( $row['zone'] !='0'){
            echo "<td class='address'>".$row['street']." ".$row['street_name']." ".$row['barangay_name']." </td>";
        }else{
            echo "<td class='address'>".$row['street']." ".$row['barangay_name']." </td>";
        }

        echo "<td>".$row['phone']." </td>";
       
        echo "<td><a data-id=".$row['phone']." class='tablebuttons primary callicon'></a></td>";
        echo "<td>";
        if($row['member_status'] == '3' || ($row['member_status'] == '4' && $level==="coordinator")){
            echo "<span style='pointer-events:auto;cursor:pointer;pointer-events:none;background-color:#ccc;' class='tablebuttons primary makepayments' ></span>";
        }else{
            echo "<span style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary makepayments' data-bs-toggle='modal' data-bs-target='#staticBackdrop3' data-id=".$id."></span>";
        }  
        echo "</td>";
       
     
        if($level ==="super admin"){
            echo "<td><span title='Delete member' style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary deletemember' data-id=".$id." ></span></td>";
        }


        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";


}else{
    // echo "<p class='nrindicator'>No records found</p>";
    echo "<img class='nr' src='images/norecord.svg'>";
 }


}
  ?>
  <?php 
  
$limit = 14;
if($level == "super admin"){ 
    $sql = "SELECT COUNT(uid) FROM tblregistration";  
} else {
    $sql = "SELECT COUNT(uid) FROM tblregistration WHERE personnel_id = '".$coorid."'";  
}
$rs_result = mysqli_query($dbc, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
?>

<?php if($name == "") { ?>
<div class="clearfix">     
    <ul class="pagination">
    <?php 
    if(!empty($total_pages)){
        for($i=1; $i<=$total_pages; $i++){
            if($i == 1){ ?>
                <li class="pageitem active" id="<?php echo $i;?>"><a data-id="<?php echo $i;?>" class="page-link"><?php echo $i;?></a></li>
            <?php } else { ?>
                <li class="pageitem" id="<?php echo $i;?>"><a class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php }
        }
    }
    ?>     
    </ul>
</div>
<?php } ?>

  