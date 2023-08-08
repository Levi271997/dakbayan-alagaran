

<div id="viewprofile" class="tabs" style="display:none">
	<form name ="viewprof" id="update-form" action="" method="POST" enctype="multipart/form-data">
		<div id="mod">
		
				<h3 class="heading">Information Update</h3>
                <div class="photo">
					<div class="avatar"><img id="img" src="images/camera-icon.jpg" /></div>
						<label class="file">
						<input type="file" id="file" name="file" onchange="readURLimage(this);" aria-label="File browser example">
						<span class="file-custom"></span>
						</label>
				</div>
				<p>User ID</p>
				<p id="userid"></p>
				<div class="info">
					<div class="complete-name">
						<label class="required"><input id="lname" type="text" name="lname" class="" placeholder="Last Name" autocomplete="off" ></label>
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

					<div class="complete-address">
						<label class="required">	
							<select onchange="getZoneList(this.value)" id="barangay2" name="barangay2" >
							
								<option>Barangay</option>
							</select>
						</label>
						<label class="required">
							<select id="zoneModaltwo" name="zone" >
								<option >Zone (Purok)</option>	
							</select>	
						</label>
						<label><input id="saddress" type="text" name="saddress" placeholder="Street / Block / Building / Apartment"></label>
					</div>

					<small>Petsa Sa Pagkatawo (Birthdate)</small>
					<div class="birthdate">
						<label class="calendar">
						<span class="required"><input type="date" id="birthdate" name="birthdate" ></span>
						<p id="ageres"></p>
						<input type="text" id="age" name="age" class="" placeholder="Age:" disabled>
						</label>		
						<label class="civil required">
									<select name="cs" id="cs">
										<option value="" disabled selected>Kahimtang Sibil (Civil Status)</option>
										<option value="Single">Single</option>
										<option value="Live-in">Live-in</option>
										<option value="Married">Married</option>
										<option value="Annulled">Annulled</option>
										<option value="Widowed">Widowed</option>
									</select>
									</label>
									<label class="sex required">
									<select name="gender" id="gender">
										<option value="" disabled selected>Sekso (Gender)</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									</label>
									<label class="voter required">
									<select name="voter" id="voter">
										<option value="" disabled selected>Voter</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										<option value="Undecided">Not sure</option>
									</select>
									</label>
								</div>

								<div class="other-info">
									<label class="required">
									<input type="number" id="phone" name="phone"  placeholder="Phone Number">
										<!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"> -->
									</label>
									<label><input type="email" id="email" name="email"  placeholder="Email Address"><!-- <input type="email" id="email" pattern=".+@globex\.com" placeholder="Email Address"> --></label>
									<label><input id="work" type="text" name="work"  placeholder="Trabaho (Occupation)"></label>
								</div>

					</div>
				</div>
					<div id="famrepcontain">

					</div>
				<h3 class="heading">Representante Sa Pamilya (Family Representative)</h3>
				<div id="famrep">
				</div>
						

				<button id="editmemberbtn" type="button" class="btn btn-primary">EDIT PROFILE</button>
				<button id="canceledit" type="button" class="btn btn-secondary" onclick="openTab('containers-members')" style="display:none">CANCEL</button>
				<div class="btn btn-secondary" onclick="openTab('containers-members')" >Back</div>
				<div id="deceased" class="btn"><button id="deceasedbtn">Deceased</button></div>
				
       			



</div>
<script>

$(document).ready(function() {
	agefindings();
	$('body').on('change', '#birthdate', function (e) {
		agefindings();
	})
	
function agefindings()
	{
		var dateinput =  $("#viewprofile #birthdate").val();
		var dob = new Date(dateinput);
		var today = new Date();
		var age = new Date(today - dob).getFullYear() - 1970;
		document.querySelector('#viewprofile input[name="age"]').value = age;
	}
	function readURLimage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
				
                reader.onload = function (e) {
						$('#viewprofile #img').attr('src', e.target.result).width(150);           
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
});
</script>

