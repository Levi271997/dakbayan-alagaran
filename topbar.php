<?php

	  if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['level']) && isset($_SESSION['image'])) {
		$userid =  $_SESSION['usersId'];
		$username =  $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		 $lastname = $_SESSION['lastname'];
		 $level = $_SESSION['level'];
		 $image = $_SESSION['image'];
		 $level_stats = $_SESSION['level'];
	  }
      $date = date("F j, Y");
	  $day = date ("D");
	  //$time = date("g:i a");		  
?>
<header class="main-topbar">
	<div   class="container">
    <div class="logo"><a onclick="openTab('announcements')"><img src="images/da-logo.png" alt="Dakbayan Alagaran" /></a></div>

    <div id="adminpic">
    <div class="user">
	    <?php 
      if($_SESSION['image'] == ""){
        echo "<img class='image' src='images/user-placeholder.png'/ >";	
      }else{
        echo "<img class='image' src='profileimages/".$image."'/ >";
      }	
      ?>   
    </div>
    </div>
<!--	
	<div class="current-date">
		<div class="date-time"><span class="date">November 29, 2022</span><span class="time">4:35 PM</span></div>
		<div class="day">wed</div>
	</div>-->
	
	<div class="main-search card"><?php include('search.php'); ?></div>

  <div class="menu-container" id="burger-menu">
        <div id="line-one"></div>
        <div id="line-two"></div>
        <div id="line-three"></div>
    </div>
  <!-- <div id="burger-menu"> -->
  <!-- <img class="burger" src="images/burger-menu.png" alt=""> -->
    <!-- </div> -->
  
  

 
	
    <div class="right">
     
		<a onclick="openTab('addmember')" class="btn btn-orange">
			
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
		  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
		</svg>	
		</a>
		
        <div class="notif" style="display:none">
            <a href="#" class="btn">
                <span>&nbsp;</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
            </a>
        </div>

        <a href="logout.php" class="btn logout">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
            LOGOUT
        </a>
        <a href="logout.php" class="btn logout-two">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
            
        </a>
    </div>
	</div>
</header>