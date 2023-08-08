
<div id="viewcoorprofile" style="display:none">
	<div class="profileview">
	<form name ="viewprof" id="update-form" action="" method="POST" enctype="multipart/form-data">
		<div id="mod">
		
				<h3 class="heading">Information Update</h3>
				<div class="nameholder">
					<div class="photo">
						<div class="avatar">
							<img id="img" src="images/camera-icon.jpg" />
							<!-- <label class="file">
								<input type="file" id="file" name="file"  aria-label="File browser example">
								<span class="file-custom"></span>
							</label> -->
						</div>
							
					<div>
					<div class="statusholder">
						<div class="userholder">
							<p>User ID</p>
							<p id="userid"></p>
							<span id="statusindicator"></span>
						</div>
						<label class="required"><input id="lname" type="text" name="lname" class="" placeholder="Last Name" autocomplete="off" ></label>
						<div class="firstandmidname">
							<label class="required"><input id="fname" type="text" name="fname" class="" placeholder="First Name" autocomplete="off"  ></label>
							<label class="required"><input id="mname" type="text" name="mname" class="" placeholder="Middle Name" autocomplete="off" ></label>
							<label>
								<select name="suffix" id="suffix" >
									<option value="" disabled selected>Suffix</option>
									<option value="Jr.">Jr.</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
								</select>
						</label>
						</div>
						<div id="adminindicator" style="display:flex" class="admin-indicator">Coordinator</div>
						<div id="membersince"><p>Member Since:</p> <p id="membersincedate"></p></div>
						<div id="lastpayment"><p>Last Payment: </p> <p id="lastpaymentdate"></p></div>
						<!-- <a id="transactionhistory">View transaction history</a> -->
					</div>
				</div>
				<div class="rightbtns">
					<div id="backviewmember" class="btn">Back</div>
				</div>	
		</div>

			<div class="rowone">
				<label class="sex required">
					<small>Gender</small>
					<select name="gender" id="gender">
						<option value="" disabled selected>Sekso (Gender)</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</label>

				<label class="calendar">
					<small>Date of Birth</small>
						<span class="required"><input type="date" id="birthdate" name="birthdate" ></span>
						<!-- <p id="ageres"></p> -->
						
				</label>	

				<label>
					<small>Age</small>
				<input type="text" id="age" name="age" class="" placeholder="Age:" disabled>
				</label>

				<label class="required">	
					<small>Barangay</small>
							<select onchange="getZoneList(this.value)" id="barangay2" name="barangay2" >						
								<option>Barangay</option>
							</select>
				</label>

				<label class="required">
					<small>Zone</small>
							<select id="zoneModaltwo" name="zone" >
								<option >Zone (Purok)</option>	
							</select>	
						</label>

				<label>
					<small>Address</small>
					<input id="saddress" type="text" name="saddress" placeholder="Street / Block / Building / Apartment">
				</label>
			</div>

			<div class="rowtwo">
				<label class="civil required">
					<small>Civil Status</small>
									<select name="cs" id="cs">
										<option value="" disabled selected>Kahimtang Sibil (Civil Status)</option>
										<option value="Single">Single</option>
										<option value="Live-in">Live-in</option>
										<option value="Married">Married</option>
										<option value="Annulled">Annulled</option>
										<option value="Widowed">Widowed</option>
									</select>
				</label>

				<label>
					<small>Occupation</small>
					<input id="work" type="text" name="work"  placeholder="Trabaho (Occupation)">
				</label>
						
				<label class="voter required">
					<small>Voter</small>
									<select name="voter" id="voter">
										<option value="" disabled selected>Voter</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										<option value="Undecided">Not sure</option>
									</select>
				</label>

				<label>
					<small>Email</small>
					<input type="email" id="email" name="email"  placeholder="Email Address"><!-- <input type="email" id="email" pattern=".+@globex\.com" placeholder="Email Address"> -->
				</label>

				<label class="required">
					<small>Contact Number</small>
							<input type="number" id="phone" name="phone"  placeholder="Phone Number">
										<!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"> -->
				</label>

			</div>
					
		</div>
				<!-- <div class="coornameholder">
				<p>Coordinator:</p>
				<p id="coorname"></p>
				</div> -->
				
				
				
	
				</div>
					
				<h3 class="heading">Family Representatives</h3>
				<div id="famrep">
				</div>
						

				<!-- <button id="editmemberbtn" type="button" class="btn btn-primary">EDIT PROFILE</button>
				<button id="canceledit" type="button" class="btn btn-secondary" onclick="openTab('containers-members')" style="display:none">CANCEL</button> -->
				
				<!-- <div class="buttons-container">
					<div class="colone"><button>Cash Assistance <span>&#8369<span> 10,000.00</button>
					</div>
				<div class="coltwo">
					<button id="deceased">Free Burial Servies(Embalming and Coffin)</button>
					<button>Legal Assistance (Personal Case)</button>
				</div>
				<div class="colthree">
					<button>Hospitalization Allowance <span>&#8369<span>500.00 per day for three (3) days if admitted (Can be used only once</button>
				</div>
					
				
				</div> -->
				
		</div>

	<div class="transaction-history" style="display:none;">
		<div class="container-history">
		<h2>Transaction History</h2>
		<div id="backviewprofile">Back</div>
		</div>
		<p>Member Name:</p>
		<p id="membername"></p>
		<div id="transactionhistorycontainer"></div>
		
	</div>			
       			



</div>
<script>

$(document).ready(function() {
	agefindings();
	$('body').on('change', '#birthdate', function (e) {
		agefindings();
	})
	
	
function agefindings()
	{
		var dateinput =  $("#viewcoorprofile #birthdate").val();
		var dob = new Date(dateinput);
		var today = new Date();
		var age = new Date(today - dob).getFullYear() - 1970;
		document.querySelector('#viewcoorprofile input[name="age"]').value = age;
	}
	
	$('#viewcoorprofile input[type="file"]').change(function(e) {
	
            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
				
                reader.onload = function (e) {
						$('#viewprofile #img').attr('src', e.target.result).width(150);           
                };

                reader.readAsDataURL(e.target.files[0]);
            }
       })
});
</script>

