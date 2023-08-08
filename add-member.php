

<div id="addmember" class="tabs" style="display:none">
	<form id="reg-form" action="" method="POST" enctype="multipart/form-data">
		<div id="addmembers">
			<header>
				<h1 class="text-center">Porma Sa Pagpamembro</h1>
				<h3 class="text-center">(Membership Form)</h3>
			</header>
				<h3 class="heading">Impormasyon Sa Aplikante (Applicant's Information)</h3>
			<div class="applicants-info">
				<div class="photo" style="display:none">
					<div class="avatar"><img id="img" src="images/camera-icon.jpg" /></div>
						<label class="file">
						<input type="file" id="file" name="file" onchange="readURL(this);" aria-label="File browser example">
						<span class="file-custom"></span>
						</label>
				</div>
				<div class="info">
					<div class="complete-name">
						<label class="required"><input id="lname" type="text" name="lname" class="" placeholder="Last Name" autocomplete="off"></label>
						<label class="required"><input id="fname" type="text" name="fname" class="" placeholder="First Name" autocomplete="off"></label>
						<label ><input id="mname" type="text" name="mname" class="" placeholder="Middle Name" autocomplete="off"></label>
						<label>
						<select name="suffix" id="suffix">
							<option value="" disabled selected>Suffix</option>
							<option value="">None</option>
							<option value="Jr.">Jr.</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
							</select>
						</label>
					</div>

					<div class="complete-address">
						<label class="required">	
							<select onchange="getZoneList(this.value)" id="barangay" name="barangay" >
								<option>Barangay</option>
							</select>
						</label>
						<label>
							<select  id="zone" name="zone" >
								<option >Zone/Purok</option>	
							</select>	
						</label>
						<label><input id="saddress" type="text" name="saddress" class="" placeholder="Street / Block / Building / Apartment" autocomplete="off"></label>
					</div>

					<small>Date of Birth</small>
					<div class="birthdate">
						<label class="calendar">
						<span class="required"><input type="date" id="birthdate" name="birthdate" onchange="agefinding()"></span>
						<p id="ageres"></p>
						<input type="text" id="age" name="age" class="" placeholder="Age:" disabled>
						</label>		
						<label class="civil">
									<select name="cs" id="cs">
										<option value="" disabled selected>Civil Status</option>
										<option value="Single">Single</option>
										<option value="Live-in">Live-in</option>
										<option value="Married">Married</option>
										<option value="Annulled">Annulled</option>
										<option value="Widowed">Widowed</option>
									</select>
									</label>
									<label class="sex">
									<select name="gender" id="gender">
										<option value="" disabled selected>Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									</label>
									<label class="voter required">
									<select name="voter" id="voter">
										<option value="" disabled selected>Voter?</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										<option value="Undecided">Not sure</option>
									</select>
									</label>
								</div>

								<div class="other-info">
									<label>
									<input type="number" id="phone" name="phone"  placeholder="Phone Number" autocomplete="off">
										<!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"> -->
									</label>
									<label><input type="email" id="email" name="email"  placeholder="Email Address" autocomplete="off"><!-- <input type="email" id="email" pattern=".+@globex\.com" placeholder="Email Address"> --></label>
									<label><input id="work" type="text" name="work"  placeholder="Trabaho (Occupation)" autocomplete="off"></label>
								</div>

					</div>
				</div>

						<h3 class="heading">Representante Sa Pamilya (Family Representative)</h3>
						<div class="representative">
							<div>
								<label><input id="rep-name-one" type="text" name="repname-one" class="" placeholder="Pangalan (Full Name)" autocomplete="off"></label>
								<label>
								<select id="rep-relation-one" name="reprel-one" style="text-transform:capitalize">
									<option value="" disabled selected>relationship</option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Brother">Brother</option>
									<option value="Sister">Sister</option>
									<option value="Husband">Husband</option>
									<option value="Wife">Wife</option>
									<option value="Live in Partner">Live-in Partner</option>
									<option value="Child">Child</option>
									<option value="Son">Son</option>
									<option value="Daughter">Daughter</option>
									<option value="Uncle">Uncle</option>
									<option value="Aunt">Aunt</option>
									<option value="Grandfather">Grandfather</option>
									<option value="Grandmother">Grandmother</option>
									<option value="Grand-son">Grandson</option>
									<option value="Granddaughter">Granddaughter</option>
									<option value="Cousin">Cousin</option>
									<option value="Nephew">Nephew</option>
									<option value="Niece">Niece</option>
									<option value="Great grandfather">Great Grandfather</option>
									<option value="Great grandmother">Great Grandmother</option>
									<option value="Father-in-law">Father-in-law</option>
									<option value="Mother-in-law">Mother-in-law</option>
									<option value="Brother-in-law">Brother-in-law</option>
									<option value="Sister-in-law">Sister-in-law</option>
									<option value="Son-in-law">Son-in-law</option>
									<option value="Daughter-in-law">Daughter-in-law</option>
									<option value="Half-brother">Half-brother</option>
									<option value="Half-sister">Half-sister</option>
									<option value="Step-mother">Step-mother</option>
									<option value="Step-father">Step-father</option>
									<option value="Step-son">Step-son</option>
									<option value="Step-daughter">Step-daughter</option>
								</select>	
								</label>		
								<!-- <label><input id="rep-relation-one" type="text" name="reprel-one" class="" placeholder="Relasyon (Relationship)" autocomplete="off"></label> -->
								<a href="#" style="display:none">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#3468a2" class="bi bi-plus-circle" viewBox="0 0 16 16">
								  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
								</a>
							</div>
							<div>
								<label><input id="rep-name-two" type="text" name="repname-two" class="" placeholder="Pangalan (Full Name)" autocomplete="off"></label>
								<label>
								<select id="rep-relation-two" name="reprel-two" style="text-transform:capitalize">
									<option value="" disabled selected>relationship</option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Brother">Brother</option>
									<option value="Sister">Sister</option>
									<option value="Husband">Husband</option>
									<option value="Wife">Wife</option>
									<option value="Live in Partner">Live-in Partner</option>
									<option value="Child">Child</option>
									<option value="Son">Son</option>
									<option value="Daughter">Daughter</option>
									<option value="Uncle">Uncle</option>
									<option value="Aunt">Aunt</option>
									<option value="Grandfather">Grandfather</option>
									<option value="Grandmother">Grandmother</option>
									<option value="Grand-son">Grandson</option>
									<option value="Granddaughter">Granddaughter</option>
									<option value="Cousin">Cousin</option>
									<option value="Nephew">Nephew</option>
									<option value="Niece">Niece</option>
									<option value="Great grandfather">Great Grandfather</option>
									<option value="Great grandmother">Great Grandmother</option>
									<option value="Father-in-law">Father-in-law</option>
									<option value="Mother-in-law">Mother-in-law</option>
									<option value="Brother-in-law">Brother-in-law</option>
									<option value="Sister-in-law">Sister-in-law</option>
									<option value="Son-in-law">Son-in-law</option>
									<option value="Daughter-in-law">Daughter-in-law</option>
									<option value="Half-brother">Half-brother</option>
									<option value="Half-sister">Half-sister</option>
									<option value="Step-mother">Step-mother</option>
									<option value="Step-father">Step-father</option>
									<option value="Step-son">Step-son</option>
									<option value="Step-daughter">Step-daughter</option>
								</select>	
									<!-- <input id="rep-relation-two" type="text" name="reprel-two" class="" placeholder="Relasyon (Relationship)" autocomplete="off"> -->
								</label>
								<a href="#" style="display:none">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-dash-circle" viewBox="0 0 16 16">
								  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
								</svg>
								</a>
							</div>
							<div>
								<label><input id="rep-name-three" type="text" name="repname-three" class="" placeholder="Pangalan (Full Name)" autocomplete="off"></label>
								<label>
									<!-- <input id="rep-relation-three" type="text" name="reprel-three" class="" placeholder="Relasyon (Relationship)" autocomplete="off"> -->
									<select id="rep-relation-three" name="reprel-three" style="text-transform:capitalize">
									<option value="" disabled selected>relationship</option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Brother">Brother</option>
									<option value="Sister">Sister</option>
									<option value="Husband">Husband</option>
									<option value="Wife">Wife</option>
									<option value="Live in Partner">Live-in Partner</option>
									<option value="Child">Child</option>
									<option value="Son">Son</option>
									<option value="Daughter">Daughter</option>
									<option value="Uncle">Uncle</option>
									<option value="Aunt">Aunt</option>
									<option value="Grandfather">Grandfather</option>
									<option value="Grandmother">Grandmother</option>
									<option value="Grand-son">Grandson</option>
									<option value="Granddaughter">Granddaughter</option>
									<option value="Cousin">Cousin</option>
									<option value="Nephew">Nephew</option>
									<option value="Niece">Niece</option>
									<option value="Great grandfather">Great Grandfather</option>
									<option value="Great grandmother">Great Grandmother</option>
									<option value="Father-in-law">Father-in-law</option>
									<option value="Mother-in-law">Mother-in-law</option>
									<option value="Brother-in-law">Brother-in-law</option>
									<option value="Sister-in-law">Sister-in-law</option>
									<option value="Son-in-law">Son-in-law</option>
									<option value="Daughter-in-law">Daughter-in-law</option>
									<option value="Half-brother">Half-brother</option>
									<option value="Half-sister">Half-sister</option>
									<option value="Step-mother">Step-mother</option>
									<option value="Step-father">Step-father</option>
									<option value="Step-son">Step-son</option>
									<option value="Step-daughter">Step-daughter</option>
									</select>	
								</label>
								<a href="#" style="display:none">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-dash-circle" viewBox="0 0 16 16">
								  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
								</svg>
								</a>
							</div>
						</div>

						<div class="buttons">
						<div id="clearall" class="btn btn-orange">Clear All</div>
							<div id="btn_add_member_next" class="btn btn-orange" onclick="addmembernext()">Next</div>
							<!-- <input id="submit" type="submit" name="submit" class="btn btn-orange" value="Next"> -->
						</div>
	</div>
						<!-- This part is for the add member 2 form-->
						
	<div id="terms" style="display:none">
		
		<header>

			<h1 class="text-center">Porma Sa Pagpamembro</h1>
			<h3 class="text-center">(Membership Form)</h3>
		</header>
		<h3 class="heading">Mga Patakaran, Benepisyo ug Pribilehiyo (Policies, Benefits and Priviledges)</h3>

		<ol>
			<li>Cash Assitance <strong>&#8369;10,000.00</strong> (Accident/Natural Death).</li>
			<li>Free Burial Services (Embalming and Coffin). Just present the <strong>Death Certificate</strong>.</li>
			<li>Hospitalization allowance <strong>&#8369;500.00</strong> per day for three (3) days if admitted. Just present the <strong>Medical Certificate. (Can be used only once)</strong></li>
			<li>Legal assistance. <strong>(Personal case)</strong></li>
		</ol>

		<h3 class="heading">Kasabutan sa Miyembro (Membership Agreement)</h3>

		<ol>
			<li>Registration fee of <strong>&#8369;100.00</strong></li>
			<li>Membership valid only for one year. <strong>(Renewable)</strong></li>
			<li>Have <strong>&#8369;20.00</strong> monthly due.</li>
			<li>Non transferable.</li>
			<li>Three (3) months contestability.</li>
			<li>Membership but <strong>not in good standing are not entitled to benefits</strong>.</li>
			<li>Three (3) months consecutive laps of monthly due payments are ground for <strong>termination of membership.</strong></li>
		</ol>

		<h3 class="heading">Konpormasyon (Confirmation)</h3>

		<label class="custom-checkbox"> I, <em id="fn"> </em> <em id="mn"> </em> <em id="ln"> </em> have read and understood the Policies, Benefits, Privilidges and Membership Agreement.<input type="checkbox" id="termscheck"><span class="checkmark"></span></label>

		<div class="buttons">
			<!-- <button href="" class="btn back" onclick="window.location='add-member.php';return false;"><span>&larr;</span> Back</button> -->
			<div id="btn_terms_back" class="btn back" onclick="termsback()"><span>&larr;</span> Back</div>
			<div  id="btn_terms_next" class="btn btn-orange" onclick="termsnext()">Next</div>
		</div>

	
	</div>

				<!-- ------------------------------------------------------------------------------- -->

				<!-- THIS PART RIGHT HERE IS FOR THE PAYMENT AREA -->
						<div id= "makePayment" class="payment" style="display:none">
							<div>
								<h2>Registration Fee</h2>
								<input type="text" name="" value="&#8369; 100.00" disabled />

								<h2>Monthly Due</h2>
								<input type="text" name="" value="&#8369; 20.00" disabled />
							</div>
							<div>
								<div class="months">	
									<a id="jan" class="paymentmonth" onclick="setMonthButton('jan',this)">Jan</a>
									<a id="feb" class="paymentmonth" onclick="setMonthButton('feb',this)">Feb</a>
									<a id="mar" class="paymentmonth" onclick="setMonthButton('mar',this)">Mar</a>
									<a id="apr" class="paymentmonth" onclick="setMonthButton('apr',this)">Apr</a>
									<a id="may" class="paymentmonth" onclick="setMonthButton('may',this)">May</a>
									<a id="jun" class="paymentmonth" onclick="setMonthButton('jun',this)">Jun</a>
									<a id="jul" class="paymentmonth" onclick="setMonthButton('jul',this)">Jul</a>
									<a id="aug" class="paymentmonth" onclick="setMonthButton('aug',this)">Aug</a>
									<a id="sep" class="paymentmonth" onclick="setMonthButton('sep',this)">Sep</a>
									<a id="oct" class="paymentmonth" onclick="setMonthButton('oct',this)">Oct</a>
									<a id="nov" class="paymentmonth" onclick="setMonthButton('nov',this)">Nov</a>
									<a id="dec" class="paymentmonth" onclick="setMonthButton('dec',this)">Dec</a>
								</div>
							</div>
							<div class="buttons">
							
								<div id="btn_payment_back" class="btn back" onclick="paymentback()"><span>&larr;</span> Back</div>

								<div id="submitregistration"  name="submit" class="btn btn-orange" >
									<p id="pay">PAY</p>
									<a><span>&#8369;</span> <span id="total">0</span><span>.00</span></a>
								</div>
								<!-- <div id="subcontainer" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#launchModal">
									<input id="submit" type="submit" name="submit" class="btn btn-orange" value="PAY">
									<a><span>&#8369;</span> <span id="total">0</span><span>.00</span></a>
								</div>		 -->
							</div>
						</div>


			</form>

					<div class="modal fade" id="launchModal" tabindex="-1" aria-labelledby="launchModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#2ddb87" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</svg>
									<h5 class="modal-title" id="launchModalLabel">Transaction Complete!</h5>
								</div>
								<div class="modal-body">
									<p></p>
								</div>
								<div class="modal-footer">
									<!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
									<button class="btn btn-secondary" data-bs-dismiss="modal" onclick="openTab('announcements')">Go to Dashboard</button>
									<button id="viewnewuserprofile" data-bs-dismiss="modal" type="button" class="btn btn-orange">View Member Profile</button>
								</div>
								</div>
							</div>
						</div>		
</div>

<script>
	
 function setMonths(){
		var currentMonth = new Date().getMonth();

		var month = document.getElementsByClassName('months')[0];
		var classlist = document.querySelectorAll('.months > .paymentmonth');
		// for (var i = 0; i < currentMonth; i++) {	
		// 	var child = month.children[i];
		// 	if (classlist) {      
		// 		child.classList.add('disabled');                             
		// 	} else {
		// 		child.className += 'disabled';
		// 	}
		
		// }

		for(var x=0;x < classlist.length;x++){
			if(!classlist[x].classList.contains("disabled")){
				classlist[x].setAttribute("data-id",x);	
			}
		}


		document.getElementsByClassName("paymentmonth")[currentMonth].classList.add('selected');
		calculate();
	
	}
	function setMonthButton(monthname,thisMotnh){
		var monthselected = document.getElementById(monthname);
		var currentMonthActive = thisMotnh.getAttribute("data-id");
			var currentMonthActive = thisMotnh.getAttribute("data-id");
			var currentMonth = new Date().getMonth();
			var classlist = document.querySelectorAll('.months > .paymentmonth');
		ClearSelectedMonth(currentMonthActive,currentMonth);
		
			if(currentMonthActive > currentMonth){
				for(var x=currentMonth;x <= currentMonthActive;x++){
					classlist[x].classList.add('selected');
				}
			}
			if(currentMonthActive < currentMonth){
				for(var x=currentMonth;x < classlist.length;x++){
					classlist[x].classList.add('selected');
				}
				for(var y=0;y <= currentMonthActive;y++){
					classlist[y].classList.add('selected');
				}
			}
			


		calculate();
	}
	function ClearSelectedMonth(currentMonthActive,currentMonth){
		var classlist = document.querySelectorAll('.months > .paymentmonth');

		if(currentMonthActive > currentMonth){
			for(var x=currentMonth;x < classlist.length;x++){		
				classlist[x].classList.remove('selected');		
			}
			for(var y=0;y < currentMonth;y++){
				classlist[y].classList.remove('selected');	
			}
		}
		if(currentMonthActive < currentMonth){
				
				for(var y=0;y <= currentMonth;y++){
					classlist[y].classList.remove('selected');
				}
		}
		

	}
	function calculate(){
		
		var classlist = document.querySelectorAll('.months > .paymentmonth.selected');
		var total=0;
		
		if(classlist.length == 0){
			$("#total").text("0");
		}else{
			for (var i = 0; i < classlist.length; i++) {
			total = (classlist.length * 20) + 100;
			$("#total").text(total);
		
			}  
		}
		
	}
</script>

	<script type="text/javascript">
        $(document).ready(function() {
			var newid=0;
			retrieveallmember();	
			function retrieveallmember(){
				var name = $('#search').val();
				var emp = "";
				if (name === "") {
						$.ajax({
						type: "POST",
						url: "ajax2.php",
						data: {
							search: emp
						},
						success: function(html) { 
							$("#containers-members").html(html);
								
						}
						});
				}else {
						$.ajax({
						type: "POST",
						url: "ajax2.php",
						data: {
							search: name
						},
						success: function(html) { 
							$("#containers-members").html(html);
						}
						});   
				}
			}
			
			
		




        });
    </script>
	<script>
			var addmemberdiv = document.getElementById("addmembers");
			var terms = document.getElementById("terms");
			var paymentdiv = document.getElementById("makePayment");

			function addmembernext(){
				validate();
				 if(validate()){
					addmemberdiv.style.display = "none";
					terms.style.display = "block";
					var fname=document.getElementById("fname").value
					var mname=document.getElementById("mname").value;
					var lname=document.getElementById("lname").value;
					document.getElementById('fn').innerHTML = fname;
					document.getElementById('mn').innerHTML = mname;
					document.getElementById('ln').innerHTML = lname;	

				}else{
					Swal.fire('Please make sure that all required inputs are filled and valid',)
				}	
			}
				function validate() {
				var $valid = true;
				
				document.getElementById("fname").style.outline = "none";
				document.getElementById("lname").style.outline = "none";
				
				document.getElementById("barangay").style.outline = "none";
				document.getElementById("zone").style.outline = "none";
				document.getElementById("birthdate").style.outline = "none";
			
				document.getElementById("voter").style.outline = "none";
				
				document.getElementById("rep-name-one").style.outline = "none";
				document.getElementById("rep-relation-one").style.outline = "none";

				
				var fname  = document.getElementById("fname").value;
				var lname = document.getElementById("lname").value;
				
				var barangay = document.getElementById("barangay").value;
				var zone = document.getElementById("zone").value;
				var birthdate  = document.getElementById("birthdate").value;
				
				var voter = document.getElementById("voter").value;
				
				var repname = document.getElementById("rep-name-one").value;
				var reprel = document.getElementById("rep-relation-one").value;
				
			
				var regex = /^[a-zA-Z\s]+$/;
				var numericregex = /^\d*[.]?\d*$/;

				if( fname == "" || !regex.test($("#fname").val())) 
				{
					document.getElementById("fname").style.outline = "1px solid red"; 
					$valid = false;
				}
				
				if( lname== "" && !regex.test($("#lname").val())) 
				{
					document.getElementById("lname").style.outline = "1px solid red"; 
					$valid = false;
				}
				
				if(barangay == "Barangay") 
				{
					document.getElementById("barangay").style.outline = "1px solid red"; 
					$valid = false;
				}
				if( zone == "") 
				{
					document.getElementById("zone").style.outline = "1px solid red"; 
					$valid = false;
				}
				if( birthdate == "") 
				{
					document.getElementById("birthdate").style.outline = "1px solid red"; 
					$valid = false;
				}
				
				if( voter == "") 
				{
					document.getElementById("voter").style.outline = "1px solid red"; 
					$valid = false;
				}
			
			
				if( repname == "" || !regex.test($("#rep-name-one").val())) 
				{
					document.getElementById("rep-name-one").style.outline = "1px solid red"; 
					$valid = false;
				}
				if( reprel== "" || !regex.test($("#rep-relation-one").val())) 
				{
					document.getElementById("rep-relation-one").style.outline = "1px solid red"; 
					$valid = false;
				}
				return $valid;
		}
			function termsback(){		
					terms.style.display = "none";
					addmemberdiv.style.display = "block";			
			}
			function termsnext(){				
				if(document.getElementById("termscheck").checked){
					terms.style.display = "none";
					paymentdiv.style.display = "block";
				}else{
					Swal.fire('Please make you have read and understand the terms and policies',)
					
				}
				 setMonths();			
			}
			function paymentback(){			
				paymentdiv.style.display = "none";
				terms.style.display = "block";						
			}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
       
       let tag ="barangaylist"; 
       let select_menu= $('#barangay')[0]; 
       $.ajax({
            url:"ajax.php",
            dataType:"json",
            method:"POST",
            data:{tag:tag},
            success:function(response){      
                console.log($.isArray(response)); 
                response.forEach((item,index)=>{
                    console.log(index,item);
                    var option = document.createElement("option");
                    option.value = item['id'];
                    option.text = item['barangay_name'];
                    select_menu.appendChild(option);
                })
            }		
        })
	});
    
    function getZoneList(barangay_id)
    {
		console.log(barangay_id);
        let tag = "zonelist";
        let itemMenu = $('#zone')[0];
 
        $('#zone').empty().append('<option>Zone (Purok)</option>');
    
        $.ajax({
            url:"ajax.php",
            dataType:"json",
            method:"post",
            data:{tag:tag,barangay_id:barangay_id},

            success:function(response){	
                response.forEach((item,index)=>{
                    var option = document.createElement("option");
                    option.value = item['zone_id'];
                    option.text = item['zone_name'];
                    itemMenu.appendChild(option);
                })
            }
        })
    }

	function agefinding()
    {
		 var dateinput =  document.getElementById("birthdate").value;
		 var dob = new Date(dateinput);
		 var today = new Date();
		 var age = new Date(today - dob).getFullYear() - 1970;
		 document.querySelector('input[name="age"]').value = age;
	}

    

</script>



<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
				
                reader.onload = function (e) {
						$('#img').attr('src', e.target.result).width(150);           
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

