<?php


session_start();

 $errors = array(); 

 require("conn/config.php");

if(isset($_POST['login'])){
    
    $userid = mysqli_real_escape_string($dbc, $_POST['username']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);

    if(!empty($userid) AND !empty($password)){
        $query = "SELECT * FROM tblregistration WHERE userid='$userid' AND b_date='$password' LIMIT 1";
        $results = mysqli_query($dbc, $query);

        if (mysqli_num_rows($results) == 1) { 
            $logged_in_user = mysqli_fetch_assoc($results);
        
            $_SESSION['usersId']=$logged_in_user['uid'];
            $_SESSION['username']=$userid;
           $_SESSION['firstname']=$logged_in_user['first_name'];
            $_SESSION['lastname']=$logged_in_user['last_name'];
            $_SESSION['level']=$logged_in_user['level_status'];
            $_SESSION['image']= $logged_in_user['img'];
            
         
                header('location: adminDashboard.php');
           


        }else{
            array_push($errors, "Wrong username/password combination");
            //header('location: index.php');
        }
    }


}


?>
