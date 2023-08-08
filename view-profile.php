
<div id="viewprofile" class="tabs" style="display:none">
	<div id="pv" class="profileview">
		<form name="viewprof" id="update-form" action="" method="POST" enctype="multipart/form-data">
			<div id="mod">

				<header class="flex sb">
					<h3 class="heading">Information Update</h3>

					<div class="buttonsholder flex wrap">
						<div id="backtomembers" class="btn" onclick="openTab('containers-members')" >Back</div>
						<div id="editmemberbtn" class="btn">
							<a id="btntext">Edit Profile</a> 
						</div>
						<div id="canceledit" class="btn" style="display:none">CANCEL</div>
						
						
					</div>

				</header>

				<div class="photoandnameholder">
					<div class="photo">

						<div class="imageholder flex flex-row">

							<div class="avatar flex flex-column">
								<img  id="img" src="images/camera-icon.jpg" />
								<label class="file">
									<input type="file" id="file" name="file">
								</label>
								<span class="file-custom"></span>
								<div id="adminindicator" style="display:none">Coordinator</div>
								<a id="setcoordinatorbtn">Set as Coordinator</a>
								<div class="coornameholder">
									<p id="coorname"></p>
									<em>Coordinator</em>
								</div>
							</div>

							<div id="basicinformationholder">
								<div class="userholder">
									<p>User ID:</p>
									<p id="userid"></p>
									<span id="statusindicator"></span>
								</div>
								<div class="complete-name-holder">
									<label class="required flex flex-column">
										<input id="lname" type="text" name="lname" class="" placeholder="Last Name" autocomplete="off">
										<em>Lastname</em>
									</label>
									<div class="firstandmidname flex">
										<label class="required">
											<input id="fname" type="text" name="fname" class="profilevalues" placeholder="First Name" autocomplete="off">
											<em>Firstname</em>
										</label>
										<label class="required">
											<input id="mname" type="text" name="mname" class="profilevalues" placeholder="Middle Name" autocomplete="off">
											<em>Middlename</em>
										</label>
										<label class="flex flex-column">
											<select name="suffix" id="suffix" class="profilevalues">
											<!-- <option value="" disabled selected>None</option> -->
											<option value=""></option>
											<option value="Jr.">Jr.</option>
											<option value="III">III</option>
											<option value="IV">IV</option>
											</select>
											<em>Suffix</em>
										</label>
									</div>
								</div>
								
								<div id="membersince"><p>Member Since:</p> <p id="membersincedate"></p></div>
								<div id="lastpayment"><p>Last Payment: </p> <p id="lastpaymentdate"></p></div>
								<div id="transactionhistory" class="transactionbutton">
							<a >View transaction history</a>
						</div>

							</div>

						</div>

					</div>
				</div>

				<div class="complete-address">						
					<label class="required">	
						<select onchange="getZoneList(this.value)" id="barangay2" name="barangay2" >						
							<option>Barangay</option>
						</select>
						<em>Barangay</em>
					</label>
					<label class="required">
						<select id="zoneModaltwo" name="zone" >
							<option >Zone (Purok)</option>	
						</select>	
						<em>Zone</em>
					</label>
					<label>
						<input id="saddress" type="text" name="saddress" placeholder="Street / Block / Building / Apartment">
						<em>Street Address</em>
					</label>
				</div>

				<div class="personal-info">	

					<label class="sex required">
						<select name="gender" id="gender">
						<option value="" disabled selected>Sekso (Gender)</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select>
						<em>Gender</em>
					</label>

					<label class="calendar">		
						<span class="required"><input type="date" id="birthdate" name="birthdate"></span>	
						<em>Date of Birth</em>												
					</label>	

					<label class="age">
						<input type="text" id="age" name="age" class="" placeholder="Age" disabled>
						<em>Age</em>
					</label>

					<label class="voter required">
						<select name="voter" id="voter">
						<option value="" disabled selected></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Undecided">Not sure</option>
						</select>
						<em>Voter</em>
					</label>

					<label class="civil required">
						<select name="cs" id="cs">
						<option value="" disabled selected></option>
						<option value="Single">Single</option>
						<option value="Live-in">Live-in</option>
						<option value="Married">Married</option>
						<option value="Annulled">Annulled</option>
						<option value="Widowed">Widowed</option>
						</select>
						<em>Civil Status</em>
					</label>
				</div>

				<div class="profession">
					<label>
						<input id="work" type="text" name="work" placeholder="Trabaho (Occupation)">
						<em>Occupation</em>
					</label>
					<label class="email">
						<input type="email" id="email" name="email" placeholder="Email Address">
						<em>Email Address</em>
					</label>
					<label class="number">
						<input type="number" id="phone" name="phone" placeholder="Phone Number">
						<em>Contact Number</em>
					</label>
				</div>

			</div>
		</form>

		<div id="famrepcontain"></div>
		<h3 id="famrepheading" class="heading">Family Representatives</h3>
		<div id="famrep"></div>
		<p id="benefitsheading" class="heading">Benefits Available</p>
		
		<div class="buttons-container">
			<div class="colone"></div>
		<div class="coltwocontainer">
			<div id="coltwo" class="coltwo"></div>
			<div class="colburial"></div>
		</div>
			<div class="colthree"></div>
		</div>

	</div>

	<div class="transaction-history" style="display:none;">
		<div class="container-history">
			<h3 class="heading">Transaction History</h3>
			<div id="backviewprofile" class="btn">Back</div>
		</div>
		<!-- <p>Member Name:</p> -->
		<p id="membername"></p>
		<div id="transactionhistorycontainer"></div>
	</div>	

	<?php include('view_coor_profile.php')?>		
       			
	
		<div class="loader loadingflexbox">
			<img style="width: 8%" src="./images/da-logo.png" alt="">
			<p>Retrieving Members Information... Please wait...</p>
		</div>
	

</div>

<script>
$(document).ready(function() {
	agefindings();
	$('body').on('change', '#birthdate', function (e) {
		agefindings();
	})

	$('body').on('click', '#viewprofile #img', function (e) {
	
				$(' #viewprofile #file').trigger('click'); 

			})

	function agefindings()
	{
		var dateinput =  $("#viewprofile #birthdate").val();
		var dob = new Date(dateinput);
		var today = new Date();
		var age = new Date(today - dob).getFullYear() - 1970;
		document.querySelector('#viewprofile input[name="age"]').value = age;
	}
	

	$('#viewprofile input[type="file"]').change(function(e) {
		

            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
				
                reader.onload = function (e) {
						$('#viewprofile #img').attr('src', e.target.result).width(150);    
						$('#viewprofile #img').attr('src', e.target.result).height(150);         
                };

                reader.readAsDataURL(e.target.files[0]);
            }
      })
});
</script>