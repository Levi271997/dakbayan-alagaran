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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<div id="firstnav">
<div class="user">
	
	<?php 
	if($_SESSION['image'] == ""){
		echo "<img class='image' src='images/user-placeholder.png'/ >";	
	}else{
		echo "<img class='image' src='profileimages/".$image."'/ >";
	}	
	?>
	<div class="nameholder">
	<h2 id="adminname"><?php echo $firstname ?> <?php echo $lastname?> </h2>
        <span><?php echo $level ?></span>	
		<span id="cp" data-bs-toggle='modal' data-bs-target='#changepasswordmodal'>change password</span>
	</div>
       
		
	
</div>
<nav>
 
	 <a id="dashboard" onclick="openTab('announcements')">
        <img src="images/dashboard-icon.jpg" alt="Dashboard" />
        Dashboard
	</a>
	<a data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        Members
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
    </a>
		<div class="collapse multi-collapse" id="multiCollapseExample1">
		 <a id="membersview" onclick="openTab('containers-members')">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
			  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
			  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
			</svg>
			All
		</a>
		<a id="add-member" onclick="openTab('addmember')">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg>	
			Add New
		</a>
		<?php 
			if($level_stats === "super admin"){
			echo "<a id='coorsview'>";
			echo "<img src='images/coordinator-icon.png' alt='Coordinators' />";
			echo "Coordinators";
			echo "</a>";
			}
		?>	
		<a href="#" style="display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
			  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
			Leaders
		</a>
		
		<a id="overdue-member" onclick="openTab('containers-overdue')">
			<img src="images/sand-clock.png" alt="Overdue Member" />
			Overdue
		</a>
		<a id="terminated-member" onclick="openTab('containers-terminated')">
			<img src="images/terminated-icon.png" alt="Terminated Member" />
			Terminated
		</a>
		
		
		<a id="deceased-member" onclick="openTab('containers-deceased')">
			<img src="images/death-icon.png" alt="Deceased Member" />
			Deceased
		</a>
		
		<a id="add-member" href="dakbayan-data-entries-for-coors/dashboard.php" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg>	
			Manually add members
		</a>

		<a  id="retrieverecent" class="bottomButtons" onclick="openTab('containers-recently')">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
			  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
			  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
			</svg>
			Recently Added
		</a>
		
		
		
		<!-- <a href="add-member.php">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg>	
			Add Member
		</a> -->
    	</div>
	
</nav>

<div class="advanced">
    <nav>
<?php 
if($level_stats === "super admin"){?>
<a data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
	<img src="images/megaphone.png" alt="Announcements" />
        Announcements
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
    </a>
		<div class="collapse multi-collapse" id="multiCollapseExample2">
		 <a id="viewannouncements" onclick="openTab('announcements')" >
		 	<img src="images/all-announcements.png" alt="All Announcements" />
			All
		</a>
		<a id="add-announcements" onclick="openTab('addannouncements')">
			<img src="images/new-announcement.png" alt="New Announcements" />
			Add New
		</a>
		
    	</div>
	<?php } ?>
	
        <a href="#" style="display:none">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
			  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
			</svg>
            Help
        </a>
        <a href="#" style="display:none">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
			  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
			</svg>
            Settings
        </a>
    </nav>
</div>
<div class="current-date">
	<div class="day"><?php echo $day ?></div>
	<div class="date-time"><span class="date"><?php echo $date ?></span><!--<span class="time">4:35 PM</span>--></div>	
</div>


<div  class="modal fade" id="changepasswordmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
      
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
						<h2>Change password</h2>
						<p>Old password</p>
						<div id="op">
						<input type="password" id="oldpass" place holder>
						<i id="showoldPass" class="bx bx-hide" title="Show password" onclick="myFunction('oldpass','showoldPass')"></i>
						</div>
						
						<p>New password</p>
						<div id="np">
							<input type="password" id="newpass">
							<i id="shownewPass" class="bx bx-hide" title="Show password" onclick="myFunction('newpass','shownewPass')"></i>
						</div>
						<p>Confirm New password</p>
						<div id="cnp">
							<input type="password" id="confirmnewpass">
							<i id="showconfirmnewPass" class="bx bx-hide" title="Show password" onclick="myFunction('confirmnewpass','showconfirmnewPass')"></i>
						</div>
						
      			</div>
      			<div class="modal-footer">
				
      				<button type="button" class="btn btn-primary savepassword">Save</button>
					
       				<button id="closemod" type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
        
      			</div>
    		</div>
  		</div>
	</div>
	</div>



	<!-- this is for the second navigation for mobile -->
	



	
	<div id="secondnav">
		<div id="close-menu">
			<a>&times;</a>
		</div>
		
<div class="user">
	
	<?php 
	if($_SESSION['image'] == ""){
		echo "<img class='image' src='images/user-placeholder.png'/ >";	
	}else{
		echo "<img class='image' src='profileimages/".$image."'/ >";
	}	
	?>
	<div class="nameholder">
	<h2 id="adminname"><?php echo $firstname ?> <?php echo $lastname?> </h2>
        <span><?php echo $level ?></span>	
		<span id="cp" data-bs-toggle='modal' data-bs-target='#changepasswordmodal'>change password</span>
	</div>
       
		
	
</div>
<nav>
 
<a id="dashboard" onclick="openTab('announcements')">
        <img src="images/dashboard-icon.jpg" alt="Dashboard" />
        Dashboard
	</a>
	<a data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        Members
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
    </a>
		<div class="collapse multi-collapse" id="multiCollapseExample1">
		 <a id="membersview" onclick="openTab('containers-members')">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
			  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
			  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
			</svg>
			All
		</a>
		<a id="add-member" onclick="openTab('addmember')">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg>	
			Add New
		</a>
		<?php 
			if($level_stats === "super admin"){
			echo "<a id='coorsview'>";
			echo "<svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>";
			echo "<path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>";
			echo "</svg>";
			echo "Coordinators";
			echo "</a>";
			}
		?>	
		<a href="#" style="display:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
			  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
			Leaders
		</a>
		
		<a id="overdue-member" onclick="openTab('containers-overdue')">
			<img src="images/sand-clock.png" alt="Overdue Member" />
			Overdue
		</a>
		<a id="terminated-member" onclick="openTab('containers-terminated')">
			<img src="images/terminated-icon.png" alt="Terminated Member" />
			Terminated
		</a>
		
		
		<a id="deceased-member" onclick="openTab('containers-deceased')">
			<img src="images/death-icon.png" alt="Deceased Member" />
			Deceased
		</a>
		

		<a id="add-member" href="dakbayan-data-entries-for-coors/dashboard.php" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg>	
			Manually add members
		</a>
		
    	</div>
</nav>

<div class="advanced">
    <nav>
<?php 
if($level_stats === "super admin"){?>
<a data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
	<img src="images/megaphone.png" alt="Announcements" />
        Announcements
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
    </a>
		<div class="collapse multi-collapse" id="multiCollapseExample2">
		 <a id="viewannouncements" onclick="openTab('announcements')" >
		 	<img src="images/all-announcements.png" alt="All Announcements" />
			All
		</a>
		<a id="add-announcements" onclick="openTab('addannouncements')">
			<img src="images/new-announcement.png" alt="New Announcements" />
			Add New
		</a>
		
    	</div>
	<?php } ?>
	
        <a href="#" style="display:none">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
			  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
			</svg>
            Help
        </a>
        <a href="#" style="display:none">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
			  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
			</svg>
            Settings
        </a>

		<a href="logout.php" class="btn logout">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
            LOGOUT
        </a>
    </nav>
</div>


<!-- 
<div  class="modal fade" id="changepasswordmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
      
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
						<h2>Change password</h2>
						<p>Old password</p>
						<div id="op">
						<input type="password" id="oldpass" place holder>
						<i id="showoldPass" class="bx bx-hide" title="Show password" onclick="myFunction('oldpass','showoldPass')"></i>
						</div>
						
						<p>New password</p>
						<div id="np">
							<input type="password" id="newpass">
							<i id="shownewPass" class="bx bx-hide" title="Show password" onclick="myFunction('newpass','shownewPass')"></i>
						</div>
						
      			</div>
      			<div class="modal-footer">
				
      				<button type="button" class="btn btn-primary savepassword">Save</button>
					
       				<button id="closemod" type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
        
      			</div>
    		</div>
  		</div>
	</div> -->
	</div>









	<!-- ------------------------------------------------------------------- -->
	<script>
		function myFunction($field,$btn) {
		var x = document.getElementById($field);
		var y = document.getElementById($btn);
		
		y.classList.toggle("bx-show");
		
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	</script>

<!-- <script type="text/javascript">
$(document).ready(function() {
 setInterval(runningTime, 1000);
});
function runningTime() {
  $.ajax({
    url: 'timescript.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script> -->
