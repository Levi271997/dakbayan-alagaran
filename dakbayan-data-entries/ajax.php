
<?php
include('conn.php');



        if($_POST['tag'] == 'barangaylist')
        {
          $query = "SELECT * FROM barangay";
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
       
        if($_POST['tag'] == 'zonelist')
        {
          $barangay_id = $_POST['barangay_id'];
       
          $query = "SELECT * FROM tbl_zones WHERE baranggay = '".$barangay_id."'" ;
      
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
        ?>