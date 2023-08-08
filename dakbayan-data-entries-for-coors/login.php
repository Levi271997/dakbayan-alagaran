<?php
session_start();
 //$errors = array(); 
 require("config.php");

    if(isset($_POST['username'])){
        $userid =  $_POST['username'];
    }
    if(isset($_POST['password'])){
        $password =  $_POST['password'];
    }
    $hashpassword = hash("sha256",$password);
   
    if(!empty($userid) AND !empty($password)){
        $query = "SELECT * FROM tblregistration WHERE userid='$userid' AND password='$hashpassword' LIMIT 1";
        $results = mysqli_query($dbc, $query);

        if (mysqli_num_rows($results) == 1) { 
            $logged_in_user = mysqli_fetch_assoc($results);
        
            $_SESSION['usersId']=$logged_in_user['uid'];
            $_SESSION['username']=$userid;
            $_SESSION['firstname']=$logged_in_user['first_name'];
            $_SESSION['lastname']=$logged_in_user['last_name'];
            $_SESSION['level']=$logged_in_user['level_status'];
            $_SESSION['image']= $logged_in_user['img'];

         echo "success";
        

        }else{
            echo "Wrong username or password combination" ;
          
  
        }
    }
?>
