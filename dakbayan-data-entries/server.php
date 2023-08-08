<?php
include('conn.php');



   
    $lastid=0;
    
   

    $barangay = $_POST['barangay'];  
    
        // $barangay=mysqli_real_escape_string($dbc,$_POST['barangay']);

        $user_check_query = "SELECT * FROM barangay WHERE barangay_name='$barangay' LIMIT 1";
        $result = mysqli_query($dbc, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user > 1){         
           echo "barangay already exists";
        }else{
           
          
            $sql = "INSERT INTO barangay(city_municipality_id,barangay_name)VALUES('1','$barangay')";
            if(mysqli_query($dbc,$sql) == TRUE ){
                $lastid = mysqli_insert_id($dbc);       
             
                    $query1 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 1','$lastid')";
                    mysqli_query($dbc, $query1);
                    $query2 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 2','$lastid')";
                    mysqli_query($dbc, $query2);
                    $query3 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 3','$lastid')";
                    mysqli_query($dbc, $query3);
                    $query4 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 4','$lastid')";
                    mysqli_query($dbc, $query4);
                    $query5 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 5','$lastid')";
                    mysqli_query($dbc, $query5);
                    $query6 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 6','$lastid')";
                    mysqli_query($dbc, $query6);
                    $query7 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 7','$lastid')";
                    mysqli_query($dbc, $query7);
                    $query8 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 8','$lastid')";
                    mysqli_query($dbc, $query8);
                    $query9 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 9','$lastid')";
                    mysqli_query($dbc, $query9);
                    $query10 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 10','$lastid')";
                    mysqli_query($dbc, $query10);
                    $query11 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 11','$lastid')";
                    mysqli_query($dbc, $query11);
                    $query12 = "INSERT INTO tbl_zones(zone_name,baranggay)VALUES('ZONE 12','$lastid')";
                    mysqli_query($dbc, $query12);
                
              echo "successfully added to the database";
            }else{
                echo "errors";
            }

        }
        
    


?>
