<?php 
$page_title="Member Details";
$page_ID="member-details";
$page_class="page";

include('header.php');
if(!$_SESSION['userId'] > 0 ) { header("Location: login.php"); }
include('sidebar.php');
?>
<input id="memberId" type="hidden" value="<?php echo $_POST['contain-getID'] ?>" class="type">

<section id="main" class="home-section">
	<?php include('topbar.php'); ?>
		
	<div class="page-content">
		<h1>Member Details</h1>
		
		<?php $sql = "select *,(SELECT province_name from province where province.id=tblmember.province_id) as provName,(SELECT city_name from city where city.id=tblmember.city_municipality_id) as cityName,(SELECT barangay_name from barangay where barangay.id=tblmember.barangay) as brgyName from tblmember where id='".$_POST['contain-getID']."' limit 1";	
		$dt = mysqli_query($dbc, $sql);
        while ($result = mysqli_fetch_array($dt)) {
			
		?>
		<div id="allforms" >
		<div class="contain-name">
			<label> <p>Last Name</p><input id="LName" value="<?Php echo $result['last_name'] ?>" type="text" name="memberLN"  class="type name searchMemberDatas" required></label>
			<label> <p>First Name</p><input id="FName" value="<?Php echo $result['first_name'] ?>" type="text" name="memberFN" class="type name searchMemberDatas"></label>
			<label> <p>Middle Name</p><input id="MName" value="<?Php echo $result['mid_name'] ?>" type="text" name="memberMN" class="type name searchMemberDatas"></label>
		</div>
				
				<!--<label id="ErrorName"> Naa na ang </label><br>-->
			<div class="contain-address">
				<label> Street/BLock/Lot<input id="block" type="text" value="<?Php echo $result['zone'] ?>" name="street" class="type searchMemberDatas"></label>
				<label> Sitio/Zone<input id="zone" type="text" value=" <?Php echo $result['street'] ?>" name="zone" class="type searchMemberDatas"> </label>
				<label> <p>Province</p>
					<select type="text"  onclick ="getProvince(this)" name="province"id="province" class="searchMemberDatas">
						<option value="<?Php echo $result['province_id']?>"><?Php echo $result['provName']?></option>
					</select>
				</label>
				<label> <p>City</p>
					<select type="text" name="city" id="city" class="searchMemberDatas">
						<option value="<?Php echo $result['city_municipality_id']?>"><?Php echo $result['cityName']?></option>
					</select>
				</label>
				<label> <p>Barangay</p>
					<select type="text" name="barangay" id="barangay" class="searchMemberDatas">
						<option value="<?php echo $result['barangay'] ?>"><?Php echo $result['brgyName']?></option>
					</select>
				</label>
			</div>
			<div class="contain-more-data">
				<label> Date of Birth<input  id="date" type="date" value="<?Php echo $result['birthdate'] ?>" name="birth" class="type searchMemberDatas"></label>
				<label> Age<input id="age" type="text" value=" <?Php echo $result['age'] ?>" name="age" class="type searchMemberDatas"></label>

				<label> Religion<input id="religion" value="<?Php echo $result['religion'] ?>" type="text" name="religion" class="type searchMemberDatas"></label>
				<label> Contact Number<input id="contact" value="<?Php echo $result['Contact_Number'] ?>" type="number" name="CN" class="type searchMemberDatas"></label>
				<label> Occupation<input id="occupation" value="<?Php echo $result['occupation'] ?>" type="text" name="occupation" class="type searchMemberDatas"></label>
				<label> Civil Status<input id="civilStatus" value="<?Php echo $result['civil_status'] ?>" type="text" name="CS" class="type searchMemberDatas"></label>
				<!--<label> Gender
					<span class="contain-gender">
					<span class="contain-male">
						<input id="genderMale" type="radio" value="male" name="gender" class="gender type"> Male</input>
					</span>
					<span class="contain-female">
						<input id="genderFemale" type="radio" value="female" name="gender" class="gender type"> Female</input>
					</span>
				</span>
				</label>
-->
				</div>
			<?php }	?>
			<h2>Transaction History:</h2>
			<table class="tbl">
			  <tr>
				<th>Type of Payment</th>
				<th>Date of Payment</th>
				<th>Amount</th>
			  </tr>
				<?php $sql = "select * from tblpayment where payee_Id='".$_POST['contain-getID']."'";	
					$dt = mysqli_query($dbc, $sql);

					while ($result = mysqli_fetch_array($dt)) {
			
						if($result['paymentType']==1){
							$payment="Annual Payment";
						}else{
							$payment="Monthly Payment";
						}
					
					?>
				
						<tr>
							<td><?php echo $payment?></td>
							<td><?php echo $result['dateOfPayment'] ?></td>
							<td><?php echo $result['Amount'] ?></td>
						  </tr>
					<?php }
					?>
			 
			</table>

		<button id="forEdit" onclick="forEdit()" class="btn forEdit">Edit Profile</button>
		<button id="forUpdate" onclick="forupdate()" class="btn forEdit">Save Changes</button>
		</div>
		
	</div>	
</section>
		
<?php include('footer.php'); ?>


<script type="text/javascript">
	$(document).ready(function() {
		$('#province').change(function() {
			loadCity($(this).find(':selected').val());

		});
		  $('#city').change(function() {
				loadBarrangay($(this).find(':selected').val());
			});
	});
	function loadCountry() {

			$.ajax({
				type: "POST",
				url: "ajax.php",
				data: "get=country"
			}).done(function(result) {
				$("#province").html($(result));
				/*$('#province').val($('#provId').val());*/
		/*		$('#province').change();*/
				
				
				
			});

		}
	
		function disableInput() {
			var disableDatas=document.getElementsByClassName("searchMemberDatas");
			for (let i = 0; i < disableDatas.length; i++) {
			  disableDatas[i].disabled = true;

			}
		}
	function forEdit(){
		var disableDatas=document.getElementsByClassName("searchMemberDatas");
			for (let i = 0; i < disableDatas.length; i++) {
			  disableDatas[i].disabled = false;

			}
		}
	
	function loadCity(countryId) {

                $("#city").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=city&provinceId=" + countryId
                }).done(function(result) {

                    $("#city").append($(result));
				/*	$('#city').val($('#cityID').val());*/

                });
            }
	function loadBarrangay(stateId) {
                $("#barangay").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=barangay&stateId=" + stateId
                }).done(function(result) {

                    $("#barangay").append($(result));
			/*		$('#barangay').val($('#brgyID').val());*/

                });
            }
	
	function forupdate(){
		var lname=  $("#LName").val(),
			FName=  $("#FName").val(),
			MName=  $("#MName").val(),
			block=  $("#block").val(),
			zone=  $("#zone").val(),
			province=  $("#province").val(),
			city=  $("#city").val(),
			barangay=  $("#barangay").val(),
			date=  $("#date").val(),
			age=  $("#age").val(),
			religion=  $("#religion").val(),
			contact=  $("#contact").val(),
			occupation=  $("#occupation").val(),
			civilStatus=  $("#civilStatus").val(),
			id=$("#memberId").val();
		
				$.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=updateMember&lname=" + lname+"&FName="+FName+"&MName="+MName+"&block="+block+"&zone="+zone+"&province="+province+"&city="+city+"&barangay="+barangay+"&date="+date+"&age="+age+"&religion="+religion+"&contact="+contact+"&occupation="+occupation+"&civilStatus="+civilStatus+"&id="+id
                }).done(function(result) {

                   var jsonData = JSON.parse(result);
					if(jsonData.success=="1"){
						alert("Successfully Update");
						disableInput();
					}
                });
	}
	
/*	loadCountry();*/
	function getProvince(me){
		
		if(me.classList.contains("Dropdown")){
			me.classList.remove("Dropdown");
			
		}else{
			me.classList.add("Dropdown");
			loadCountry();
		}
		
	}
	
	/*loadCountry();*/
	
	disableInput();
	
	
</script>