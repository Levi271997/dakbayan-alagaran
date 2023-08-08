<?php 

include 'conn/config.php';
include 'server.php';

$query = null;
$coorid = $_SESSION['usersId'];
$level=$_SESSION['level'];
$limit = 14;  

?>

<header class="page-header flex sp">
    <h2>Terminated Members</h2>
</header>

<?php

if (isset($_GET["page"]))
 { 
    $page  = $_GET["page"];
 } else {
     $page=1; 
}  
$start_from = ($page-1) * $limit;  

        if($level == "super admin"){
            $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE member_status ='4' LIMIT $start_from, $limit";
        }else{
            $query="SELECT tblregistration.*,(SELECT zone_name from tbl_zones where tbl_zones.zone_id=tblregistration.zone) as street_name, barangay.* FROM tblregistration INNER JOIN barangay ON tblregistration.baranggay = barangay.id WHERE member_status ='4' AND personnel_id = '$coorid' LIMIT $start_from, $limit";
        }
      
        $rec = mysqli_query($dbc, $query) or die ("database error: ".mysql_error($dbc));
      
    if(mysqli_num_rows($rec) > 0){
        
        echo "<table class='tbl-members'>";
        echo "<thead>";
        echo "<tr>";
        // echo "<th>User ID</th>";
        echo "<th>Name </th>";
        echo "<th>Address</th>";
        echo "<th class='phone'>Number</th>"; 
        echo "<th></th>";   
        // echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($rec)) {
            $id=$row['uid'];
        
            echo "<tr id =".$row['uid'].">";       
            // echo "<td>".$row['userid']." </td>";
            echo "<td class='viewprofile' data-id=".$id." style='pointer-events:auto;cursor:pointer;' >".ucwords($row['last_name']).",  ".ucwords($row['first_name'])." ".strtoupper($row['middle_name'][0]).". </td>";
            echo "<td>".$row['street']." ".$row['barangay_name']." </td>";
            echo "<td>".$row['phone']." </td>";
            echo "<td><a data-id=".$row['phone']." class='tablebuttons primary callicon'></a></td>";
            if($level ==="super admin"){
                echo "<td><span title='Delete member' style='pointer-events:auto;cursor:pointer;' class='tablebuttons primary deletemember' data-id=".$id." ></span></td>";
            }
            echo "</tr>";
        }
            echo "</tbody>";
            echo "</table>";
	
    }else{
        echo "<p class='nrindicator'>No records found</p>";
        echo "<img class='nr' src='images/emptyfolder.png'>";
        
    }
  ?>
  <?php 
  
  $limit = 14;
  if($level == "super admin"){
    $sql = "SELECT COUNT(uid) FROM tblregistration WHERE member_status='4'"; 
  }else{
    $sql = "SELECT COUNT(uid) FROM tblregistration WHERE member_status='4' AND personnel_id='$coorid'"; 
  }
   
  $rs_result = mysqli_query($dbc, $sql);  
  $row = mysqli_fetch_row($rs_result);  
  $total_records = $row[0];  
  $total_pages = ceil($total_records / $limit);  
  ?>
 
 <div class="clearfix">     
    <ul class="pagination">
    <?php 
    if(!empty($total_pages)){
        for($i=1; $i<=$total_pages; $i++){
            if($i == 1){ ?>
                <li class="pageitem active" id="<?php echo $i;?>"><a  data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
            <?php } else { ?>
                <li class="pageitem" id="<?php echo $i;?>"><a class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php }
        }
    }
    ?>     
    </ul>
</div>