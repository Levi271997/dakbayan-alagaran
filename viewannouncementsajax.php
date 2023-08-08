<?php
require('conn/config.php') ;
include("server.php");
$userlevel= $_SESSION['level'];

$sql="SELECT tblannouncements.*, tblregistration.* FROM tblannouncements INNER JOIN tblregistration ON tblannouncements.createdBy = tblregistration.uid ORDER BY id DESC";
$rec = mysqli_query($dbc, $sql) or die ("database error: ".mysql_error($dbc));

while ($row = mysqli_fetch_assoc($rec)) {
    $time = $row['createdTime'];
    $timeposted = date('g:i A', strtotime($time));

    echo "<article class='card'>";
    echo "<h3 class='title viewannouncement' data-bs-toggle='modal' data-bs-target='#staticBackdrop2' data-id=".$row['id']." >".$row['Title']." </h3>";
    echo "<div class='meta'>".$row['first_name']." | ".$row['createdDate']." @ " .$timeposted."</div>";
    echo "<div class='excerpt-contain'>";
    echo "<p>".$row['Description']."</p>";
    echo "</div>";
    echo "<div class='button-holder'>";
    if($userlevel === "super admin"){
        echo "<span class='primary delete delete-announcements' data-id=".$row['id']."></span> ";
    }
    echo "<span class='primary view read-more viewannouncement' data-bs-toggle='modal' data-bs-target='#staticBackdrop2' data-id=".$row['id']." >Read More</span>";
    echo "</div>";
    echo "</article>";
}
?>