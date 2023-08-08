<?php 
//session_start();
include 'server.php';
if(!isset($_SESSION['username'])){
	header('location: index.php');
}

$page_title= "Dashboard";
$page_ID= "home";
$page_class= "frontpage";

include('header.php');
include('topbar.php'); 
?>

<section id="main" class="container">
		<div class="sidebar card left"><?php include('sidebar-left.php'); ?></div>
		<div class="content">

			<div class="dynamic-content dashboard">
    			<div class="card left">
					<?php include('includes/announcement.php'); ?>
					<?php include ('add-member.php');?>
					<?php include ('all-members-view.php');?>
					<?php include ('addAnnouncements.php')?>
					<?php include ('view-profile.php')?>
				</div>	
			</div>
			<?php include 'footer.php';?>
		</div>
	</section>


	<!-- mmodal for announcements view -->
	<div  class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
      
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
        			<?php  include('ReadAnnouncements.php'); ?>
      			</div>
      			<div class="modal-footer">
					<?php if($_SESSION['level'] === "super admin")
					{
					?>
      				<button type="button" class="btn btn-primary editbtn">Edit</button>
					<?php } ?>
       				<button id="closemod" type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
        
      			</div>
    		</div>
  		</div>
	</div>

<!-- modal for payment transaction success -->
<div class="modal fade" id="launchModal2" tabindex="-1" aria-labelledby="launchModalLabel" aria-hidden="true">
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
									
								</div>
								</div>
							</div>
						</div>



<!-- ------------------------------------- -->

	<!-- modal for payment -->
	<div  class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
      
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">

				 

					<div id= "makePayment" class="payment">
							<div>
								<h3>Member Name:</h3>
								<div id="nameholder">
									<p id="firstname"></p>
									<p id="middlename"></p>
									<p id="lastname"></p>
								</div>
								
						
								<h2>Monthly Due</h2>
								<input type="text" name="" value="&#8369; 20.00" disabled />
							</div>

			
							<div>
								<div class="months">
									
									<a id="January" class="paymentmonths">Jan <p class="paidindicator">paid</p></a>
									<a id="February" class="paymentmonths"  >Feb  <p class="paidindicator">paid</p></a>
									<a id="March" class="paymentmonths"  >Mar  <p class="paidindicator">paid</p></a>
									<a id="April" class="paymentmonths"  >Apr  <p class="paidindicator">paid</p></a>
									<a  id="May" class="paymentmonths"  >May  <p class="paidindicator">paid</p></a>
									<a  id="June" class="paymentmonths"  >Jun  <p class="paidindicator">paid</p></a>
									<a id="July" class="paymentmonths"   >Jul  <p class="paidindicator">paid</p></a>
									<a id="August" class="paymentmonths"  >Aug <p class="paidindicator">paid</p>	</a>
									<a id="September" class="paymentmonths" >Sep  <p class="paidindicator">paid</p></a>
									<a id="October" class="paymentmonths"  >Oct <p class="paidindicator">paid</p></a>
									<a id="November" class="paymentmonths">Nov <p class="paidindicator">paid</p></a>
									<a id="December" class="paymentmonths" >Dec <p class="paidindicator">paid</p></a>
								</div>
							</div>
							<div class="buttons">
							
							<div id="submitpayment" name="submit" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#launchModal2">
									<p id="pay">PAY</p>
									<a><span>&#8369;</span> <span id="totalamount">0</span><span>.00</span></a>
							</div>		
								<!-- <div id="subcontainer" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#launchModal2">
									<input id="submitpayment" type="button" name="submit" class="btn btn-orange" value="PAY">
									<a><span>&#8369;</span> <span id="totalamount">0</span><span>.00</span></a>
								</div>		 -->
							</div>

							
				 	</div>

				
      			</div>
      			<div class="modal-footer">	
       			<button id="closemod" type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
        
      			</div>
    		</div>
  		</div>
	</div>
	
<script>
	$(document).ready(function() {
			


		retrieveallmemberscount();
		retrieveActiveMembers();
		getAllOverDue()
		retrieveoverdue();
		getAllDeceased();

		function retrieveallmemberscount(){
			let tag="retrievemembercounts";
			$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data: {
					tag: tag,
				},
				success: function(html) { 			
					$("#total-members").text(html); 		
				}
			})
		}
		function retrieveActiveMembers(){
			let tag="retrieveactivemembers";
			$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data: {
					tag: tag,
				},
				success: function(html) { 	
				
					$("#total-active").text(html); 		
				}
			})
		}

		function retrieveoverdue(){
			let tag="retrieveoverdue";
			$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data: {
					tag: tag,
				},
				success: function(html) { 	
					if(html == "success"){
						getAllOverDue();
					}		
				}
			})
		}
		function getAllOverDue(){
			let tag="retrieveAllDue";
				$.ajax({
					type: "POST",
					url: "view_ajax.php",
					data: {
						tag: tag,
					},
					success: function(html) { 	
						$("#total-overdue").text(html);
					}
				})
		}
		function getAllDeceased(){
			let tag="retrieveAllDeceased";
				$.ajax({
					type: "POST",
					url: "view_ajax.php",
					data: {
						tag: tag,
					},
					success: function(html) { 	
						$("#deceased-area").text(html);
					}
				})
		}
		let usersid="";
		function retrievepayments(uid){

			$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data: {
					tag: "retrievepayments",
					id: uid
				},
				success: function(html) { 
						
					var jsondata = JSON.parse(html);	
					var classlists = document.querySelectorAll('.modal-content .months > .paymentmonths');				
					let longMonth =[];
					var getCurrentMonth = new Date().getMonth();
					var counting = 0;
					var	firstPayment = getCurrentMonth;
					var month;
					
	
					 jsondata.forEach((items , index)=>{	
						var dateOfPayment = items['dateofpayment'];				
						if(counting == 0){
							firstPayment= new Date(dateOfPayment).getMonth();		
						}		
						console.log(items);			
						counting++;
						 dates=new Date(items['dateofpayment']);
						longMonth.push(dates.toLocaleString('en-us', { month: 'long' }));
						month = document.querySelectorAll('.modal-content .months')[0];									
					})
					//console.log(longMonth);
						var counter= 0;
						classlists[firstPayment].classList.add("StartingMonth");
						 for(var x=0;x < classlists.length ;x++){
							if(longMonth.includes(classlists[x].getAttribute('id')))
							{	
								classlists[x].classList.add('disabled');  
								classlists[x].classList.remove('selected'); 
								$("#totalamount").text("0"); 
								classlists[x].querySelectorAll('.paidindicator')[0].style.display="block";									
							}													
						}				
					for(var y=firstPayment;y <= getCurrentMonth;y++){
							if(!classlists[y].classList.contains("disabled")){
								classlists[y].classList.add('pending');  
								classlists[y].querySelectorAll('.paidindicator')[0].style.display="block";	
								classlists[y].querySelectorAll('.paidindicator')[0].innerHTML="UNPAID";
								classlists[y].classList.remove('selected'); 
							}						
					}
			 countDisabled(uid);

				}
			});
		
		}

		$('body').on('click', '#submitpayment', function (e) {
			
			 var selectedclasslist = document.querySelectorAll('.months > .paymentmonths.selected').length;
	
			$.ajax({	
				
				
                   type: "POST",
                    url: "store.php",
					data:{
						tag:"submitpayment",
						id: usersid,
						classesslist:selectedclasslist
						},
 					
                    success: function(results) {	
						
							$('#staticBackdrop3').modal('hide');	
						
							
												
                     }
               })              
		})

		$('body').on('click', '.makepayments', function (e) {
			var uid=$(this).attr('data-id');	
			usersid=uid;
			retrievepayername(uid);
			resetClasses();
			
					
			setMonths(uid);	
			retrievepayments(uid);
			
			
			
		})
		function retrievepayername(uid){
		
		let tag="retrievepayername";

			$.ajax({	
				type: "POST",
				 url: "view_ajax.php",
				 data:{
					tag: tag,
					 id: uid
					 },
				 success: function(html) {	
				
					var jsondata = JSON.parse(html);	
					
					jsondata.forEach((items)=>{	
						$("#firstname").text(items['first_name']); 
						$("#middlename").text(items['middle_name']); 
						$("#lastname").text(items['last_name']); 

					})
					
											 
				  }
			})

		}

		function resetPaidPrompt(){
		
			var startingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths');
			for (var i = 0; i < startingMonth.length; i++) {
				startingMonth[i].querySelectorAll('.paidindicator')[0].style.display="none";
			}
		}
		function countDisabled(uid){
		
			var daterenewal=new Date().getMonth() + 1;
			// var dateconverted=daterenewal.toLocaleString('en-US', { timeZone: 'Asia/Kuala_Lumpur' });
			// var classlistdisabled = document.querySelectorAll('.modal-content .months > .disabled').length;
			 var classlistdisabled = document.querySelectorAll('.modal-content .months > .disabled').length;
			 var startingMonth = parseInt(document.querySelectorAll('.modal-content .months > .StartingMonth')[0].getAttribute("data-id") );
			 var getStartingMonth = startingMonth + 1;
			
			//alert(getStartingMonth);
			
			if(classlistdisabled == 12 && getStartingMonth == daterenewal){
				var startingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths');
				var getstartingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths.StartingMonth')[0];
				getstartingMonth.classList.add("pending");
				
				for (var i = 0; i < startingMonth.length; i++) {
					startingMonth[i].classList.remove("disabled");
				}
				$.ajax({	
				type: "POST",
				 url: "reset.php",
				 data:{
					 id: uid,
					 },
				 success: function(results) {	
					resetPaidPrompt();
					getstartingMonth.querySelectorAll('.paidindicator')[0].style.display="block";
				    getstartingMonth.querySelectorAll('.paidindicator')[0].innerHTML="UNPAID";
											 
				  }
			})
			}
		
		}


		function resetClasses(){
			var classlist = document.querySelectorAll('.modal-content .months > .paymentmonths');
			for (var i = 0; i < classlist.length; i++) {
				classlist[i].classList.remove("selected");
				classlist[i].classList.remove("disabled");
				classlist[i].classList.remove("StartingMonth");
			}
		}
 		function setMonths(id){	



			let currentMonth = 0;
			$.ajax({	
				type: "POST",
				 url: "retrieved-latest-date.php",
				 data:{
					 id: id,
					 },
				 success: function(results) {
					var dates = [];
					var jsondata = JSON.parse(results);	
					jsondata.forEach((items, index)=>{	
						dates.push(items);
					})

					firstPayment= new Date(dates[1]).getMonth() + 1;					
					var month = document.querySelectorAll('.modal-content .months')[0];	
					currentMonth = new Date(dates[0]).getMonth() + 1;		
					
					
					var classlist = document.querySelectorAll('.modal-content .months > .paymentmonths');
					for (var i = firstPayment; i < currentMonth; i++) {
		
						var child = month.children[i];
						if (classlist) {      
							child.classList.add('disabled');                             
						} else {
							child.className += 'disabled';
						}
					}

					for(var x=0;x < classlist.length;x++){
						if(!classlist[x].classList.contains("disabled")){
							classlist[x].setAttribute("data-id",x);	
						}
					}
					calculate();

				  }
			})
			
		
			
		}
		$('body').on('click', '.modal-content .months > .paymentmonths', function (e) {
			//alert("test");
			ClearSelectedMonth();
			var monthselected =$(this);
			var currentMonthActive = parseInt(monthselected.attr("data-id"));
		
			var classlist = document.querySelectorAll('.modal-content .months > .paymentmonths');
			var  getStartedMonth = parseInt(document.querySelectorAll('.modal-content .months > .paymentmonths.StartingMonth')[0].getAttribute("data-id"));
		 	for(var x=getStartedMonth; x <= currentMonthActive;x++){
				if(!classlist[x].classList.contains("disabled")){
					classlist[x].classList.add('selected');
				}		
		 	}

			if(currentMonthActive < getStartedMonth){
			
				for(var xy=getStartedMonth; xy < classlist.length;xy++){
					if(!classlist[xy].classList.contains("disabled")){

						classlist[xy].classList.add('selected');
					}		
				}

				for(var xyz=0; xyz <= currentMonthActive;xyz++){
					
					if(!classlist[xyz].classList.contains("disabled")){
					
						classlist[xyz].classList.add('selected');
					}
					
				}
			}
			calculate();
		})
		
		function ClearSelectedMonth(){
			var classlist = document.querySelectorAll('.modal-content .months > .paymentmonths');
			for(var x=0;x < classlist.length;x++){		
					classlist[x].classList.remove('selected');		
			}
		}
		function calculate(){	
		
			var classlistings = document.querySelectorAll('.modal-content .months > .paymentmonths.selected');
			var total=0;
			
		
			if(classlistings.length == 0){
				$("#totalamount").text("0");
				
			}
			else{
			
			
				for (var i = 0; i < classlistings.length; i++) {
				total +=20;
				if(classlistings[i].classList.contains("StartingMonth")){
					total += 100;
				}
				$("#totalamount").text(total);
			
				}  
			}
			
		}
	
})
</script>


	<script type="text/javascript">
		function openTab(tabName){
			
			var i;
			var x =  document.getElementsByClassName("tabs");
			for (i = 0; i < x.length; i++){
				x[i].style.display = "none";
			}
			document.getElementById(tabName).style.display = "flex";
			
			
			
		}
	</script>
	<script type="text/javascript">
		
		$(document).ready(function() {
			
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
			$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 				$(this).prop("disabled",true);
				 $(this).css("border","none");
			});
				$("#editmemberbtn").text("EDIT PROFILE");


			let tag ="barangaylist"; 
       		let select_menu= $('#barangay2')[0]; 
			$.ajax({
					url:"ajax.php",
					dataType:"json",
					method:"POST",
					data:{tag:tag},
					success:function(response){      
						//console.log($.isArray(response)); 
						response.forEach((item,index)=>{
							//console.log(index,item);
							var option = document.createElement("option");
							option.value = item['id'];
							option.text = item['barangay_name'];
							select_menu.appendChild(option);

						
							
						})
					
					}		
				})



			
			$("#search").keyup(function() {
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
							$("#containers-members").html(html).show();		
						}
						});
				}
				else {
						$.ajax({
						type: "POST",
						url: "ajax2.php",
						data: {
							search: name
						},
						success: function(html) { 
							$("#containers-members").html(html).show();
						}
						});   
				}
			});

			retrieveallannouncements();
			function retrieveallannouncements(){
			
			$.ajax({
			type: "POST",
			url: "viewannouncementsajax.php",	
			success: function(html) { 
				$("#announcements-containers").html(html);				
								
				}
				
			})   	
			}
			
		

			


			var recordid= 0;
			$('body').on('click', '.editbtn', function (e) {
				var el = this;	
				var title=$("#announcement-title").val();
				var desc=$("#announcement-description").val();
				var btntext=$(".editbtn").text();
				let tag="updateannouncements";
				if(btntext == "Update"){
					$.ajax({ 
					url: 'updates.php', 
					type: 'POST',
					data: {
						tag:tag,
						recordid:recordid ,
						title:title,
						desc:desc	
					},
					success: function(response){		
							
						retrieveallannouncements();
					}
				});
				
				}else{
					$("#announcement-title").css("border", "0.3px solid black");
					$("#announcement-title").css("pointer-events", "auto");
					$("#announcement-description").css("border", "0.3px solid black");
					$("#announcement-description").css("pointer-events", "auto");
					$(".editbtn").text("Update");
				}							
			})
			$('body').on('click', '.closebtn', function (e) {
					$("#announcement-title").css("border", "none");
					$("#announcement-title").css("pointer-events", "none");
					$("#announcement-description").css("border", "none");
					$("#announcement-description").css("pointer-events", "none");
					$(".editbtn").text("Edit");
			})
			//---------------------------------------------------
			$('body').on('click', '#canceledit', function (e) {

				$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 				$(this).prop("disabled",true);	
				$(this).css("border","none");
				});
				$("#viewprofile #editmemberbtn").text("EDIT PROFILE");	
				$("#viewprofile #canceledit").css("display", "none");
			})
			var memberid=0;
			
			$('body').on('click', '#editmemberbtn', function (e) {

				var el = this;	
				var img = $("#viewprofile #file")[0].files;
				var lname=$("#viewprofile #lname").val();
				var fname=$("#viewprofile #fname").val();
				var mname=$("#viewprofile #mname").val();
				var suffix=$("#viewprofile #suffix").val();
				var barangay=$("#viewprofile #barangay2").val();
				var zone=$("#viewprofile #zoneModaltwo").val();
				var address=$("#viewprofile #saddress").val();
				var birthdate=$("#viewprofile #birthdate").val();
				var age=$("#viewprofile #age").val();
				var cs=$("#viewprofile #cs").val();
				var gender=$("#viewprofile #gender").val();
				var voter=$("#viewprofile #voter").val();
				var phone=$("#viewprofile #phone").val();
				var email=$("#viewprofile #email").val();
				var work=$("#viewprofile #work").val();

				var repnamesidone="";
				var repnamesidtwo="";
				var repnamesidthree="";
				var repnameone="";
				var reprelone="";
				var repnametwo="";
				var repreltwo="";
				var repnamethree="";
				var reprelthree="";

				var classlistings = document.querySelectorAll('#viewprofile #famrep .representative').length;
				repnamesidone=document.querySelectorAll('#viewprofile #famrep .representative')[0].id;
				repnameone=$("#viewprofile .representative #rep-name-one").val();
				reprelone=$("#viewprofile .representative #rep-relation-one").val();

				
				if(classlistings  > 1){		
					repnamesidtwo= document.querySelectorAll('#viewprofile #famrep .representative')[1].id;		
					repnametwo=$("#viewprofile .representative #rep-name-two").val();
					repreltwo=$("#viewprofile .representative #rep-relation-two").val();	
									
				}
				 if(classlistings > 2 ){
					repnamesidthree= document.querySelectorAll('#viewprofile #famrep .representative')[2].id;		
					repnamethree=$("#viewprofile .representative #rep-name-three").val();
					reprelthree=$("#viewprofile .representative #rep-relation-three").val();
					
				}
				
				var btntext=$("#viewprofile #editmemberbtn").text();
				let tag="updateprofile";
				
				if(btntext == "SAVE CHANGES"){		
				var formdata = new FormData();	
				
				formdata.append("tag",tag)
				formdata.append("recordid",memberid)
				formdata.append("profile_img", img[0] )
				formdata.append("fname",fname)
				formdata.append("mname",mname)
				formdata.append("lname",lname)
				formdata.append("suffix",suffix)
				formdata.append("barangay",barangay)
				formdata.append("zone",zone)
				formdata.append("saddress",address)
				formdata.append("birthdate",birthdate)
				formdata.append("age",age)
				formdata.append("status",cs)
				formdata.append("gender",gender)
				formdata.append("voter",voter)
				formdata.append("phone",phone)
				formdata.append("email",email)
				formdata.append("work",work)
				formdata.append("repnamesidone",repnamesidone)
				formdata.append("repnamesidtwo",repnamesidtwo)
				formdata.append("repnamesidthree",repnamesidthree)
				formdata.append("repnameone",repnameone)
				formdata.append("reprelone",reprelone)
				formdata.append("repnametwo",repnametwo)
				formdata.append("repreltwo",repreltwo)
				formdata.append("repnamethree",repnamethree)
				formdata.append("reprelthree",reprelthree)
				

				$.ajax({					
					type: "POST",
						url: "updates.php",
						data: formdata,
						cache:false,
						contentType: false,
						processData: false,
						success: function(results) {					
							
							$( "#viewprofile input,#viewprofile select").each(function( index ) {
 								$(this).prop("disabled",true);	
								$(this).css("border","none");
							});
						
							$("#viewprofile #editmemberbtn").text("EDIT PROFILE");	
							$("#viewprofile #canceledit").css("display", "none");
							alert("Updated Successfully");							 	
							retrieveallmember();
							retrieveAllFamRep(memberid);
							
						}
				});  
				
				}else{
				
					$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 						$(this).prop("disabled", false);
						 $("#viewprofile #age").prop("disabled",true);
				 		$(this).css("border", "0.3px solid black");
						 $("#viewprofile #age").css("border", "none");
						$("#viewprofile #editmemberbtn").text("SAVE CHANGES");
						$("#viewprofile #canceledit").css("display", "block");
					});
					
					
				}							
			})

			
			//---------------------------------------------------

			$('body').on('click', '.deletebutton', function (e) {
                var el = this;
                var deleteid = $(this).data("id");
				
                var confirmalert = confirm("Are you sure you want to delete this record ?");
                if (confirmalert == true) {
                  $.ajax({ 
                   
					url: 'delete_ajax.php', 
					type: 'POST',
                    data: {deleteid:deleteid },
                    success: function(response){
						
                      if(response=="yes"){	
					 	
                         $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){$(this).remove();});
                	   }else{
					 	//console.log(response);
                         alert('Invalid ID.');
                	  }
            		}
            	});
              }
          	});

			  $('body').on('click', '.delete-announcements', function (e) {
                var el = this;
                var deleteid = $(this).data("id");
				
                var confirmalert = confirm("Are you sure you want to delete this announcement from the record?");
                if (confirmalert == true) {
                  $.ajax({ 
                   
					url: 'announcements_delete_ajax.php', 
					type: 'POST',
                    data: {deleteid:deleteid },
                    success: function(response){
						
                      if(response=="yes"){	
					 	
                        $(el).closest('article').css('background','tomato');
                        $(el).closest('article').fadeOut(800,function(){$(this).remove();});
                	   }else{
					 
                         alert('Invalid ID.');
                	  }
            		}
            	});
              }
          	});

			 var zoneName = "";
		var memberid=0;
		  $('body').on('click', '.viewprofile', function (e) {

				openTab('viewprofile');
				var el = this;
                var profileid = $(this).data("id");
				memberid=profileid;
			

				let tag="vp"


				$.ajax({
				url:"view_ajax.php",
				dataType:"json",
				method:"POST",
				data:{retrieveid:profileid,tag:tag},


				success:function(response){	
					response.forEach((item,index)=>{
						var profid=item['uid'];
						memberid=profid;
						var img=item['img'];

						
						if(img === ''){
							$('#viewprofile #img').attr('src', 'profileimages/camera-icon.jpg').width(150);
						}else{
							$('#viewprofile #img').attr('src', 'profileimages/' + img).width(150);
						}
						$("#viewprofile #userid").text(item['userid']);
						$("#viewprofile #lname").val(item['last_name']);
						$("#viewprofile #fname").val(item['first_name']);
						$("#viewprofile #mname").val(item['middle_name']);
						$("#viewprofile #suffix").val(item['suffix']);
						$("#viewprofile #saddress").val(item['street']);
						$("#viewprofile #birthdate").val(item['b_date']);
						$("#viewprofile #age").val(item['age']);
						$("#viewprofile #cs").val(item['civil_status']);
						$("#viewprofile #gender").val(item['gender']);
						$("#viewprofile #voter").val(item['voter']);
						$("#viewprofile #phone").val(item['phone']);	
						$("#viewprofile #email").val(item['email']);						
						$("#viewprofile #work").val(item['occupation']);
						
						$("#viewprofile #barangay2").val(item['baranggay']);
						$("#viewprofile #barangay2").trigger("change");	
						zoneName = item['street_name'];
						retrieveAllFamRep(profileid);
						
					
						if(item['member_status'] == 3){
							$("#deceased").css("display", "none");
						}else{
							$("#deceased").css("display", "inline-block");
						}
						
						
					})
            }
        })

	})
	$('body').on('click', '#deceased', function (e) {
				
            let tag="updatedeceasedperson";
                var confirmalert = confirm("Are you sure you this person is deceased?");
                if (confirmalert == true) {
                  $.ajax({ 
                   
					url: 'updates.php', 
					type: 'POST',
                    data: {tag: tag,
							memberid:memberid },
                    success: function(response){
						
						if(response=="yes"){
							alert("The status of this user has been successfully updated");
						}else{
							alert("Failed to update user status");
						}
						openTab('containers-members');
            		}
            	});
              }
	})

	$('body').on('click', '#add', function (e) {
		
		let p = document.querySelector('#viewprofile .representative');
		var famrepclasslist = document.querySelectorAll('#viewprofile .representative').length;
	
		
			if(famrepclasslist < 3){
				if(famrepclasslist == 1){
					let p_prime = p.cloneNode(true);							
					p_prime.classList += ' added';
					p_prime.querySelectorAll('input')[0].value='';
					p_prime.querySelectorAll('input')[1].value='';	
					p_prime.querySelectorAll('input')[0].id='rep-name-two';
					p_prime.querySelectorAll('input')[1].id='rep-relation-two';		
					p_prime.querySelectorAll('input')[0].name='repname-two';
					p_prime.querySelectorAll('input')[1].name='reprel-two';				
					p.parentNode.appendChild(p_prime);
					p_prime.id='';
				}else if(famrepclasslist == 2){
					let p_prime = p.cloneNode(true);							
					p_prime.classList += ' added';
					p_prime.querySelectorAll('input')[0].value='';
					p_prime.querySelectorAll('input')[1].value='';	
					p_prime.querySelectorAll('input')[0].id='rep-name-three';
					p_prime.querySelectorAll('input')[1].id='rep-relation-three';	
					p_prime.querySelectorAll('input')[0].name='repname-three';
					p_prime.querySelectorAll('input')[1].name='reprel-three';								
					p.parentNode.appendChild(p_prime);
					p_prime.id='';
				}
			}		
	})

		
	function retrieveAllFamRep(uid){
		$.ajax({					
			type: "POST",
				url: "view_ajax.php",
				data:{
					id: uid,
					tag:  "FamRep"
				},
				success: function(results) {					
					$("#viewprofile #famrep").html(results);
					$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
						$(this).prop("disabled",true);	
						$(this).css("border","none");
					});
						
				}
		});
	}

		  $('body').on('change', '#viewprofile #barangay2', function (e) {
			var barangay_id = $(this).val();
			let tag = "zonelist";
			let itemMenu = $('#viewprofile #zoneModaltwo')[0];
			$('#viewprofile #zoneModaltwo').empty().append('<option>Zone (Purok)</option>');
		
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
						$('#viewprofile #zoneModaltwo option:contains("'+zoneName+'")').prop('selected',true);
					})
				}
			})
		})
		  
		  

		$('body').on('click', '.viewannouncement', function (e) {
		var ann_id = $(this).data("id");
		$.ajax({
            url:"announcements-readmore-ajax.php",
            dataType:"json",
            method:"post",
            data:{retrieveid:ann_id},

            success:function(response){	
			
                response.forEach((item,index)=>{
					var annrecordid=item['id'];
					recordid=annrecordid;			
                   $("#modalareaannouncements #author").text(item['first_name']);
				   $("#modalareaannouncements #date").text(item['createdDate']);
				   $("#modalareaannouncements #time").text(item['createdTime']);
				   $("#modalareaannouncements #announcement-title").val(item['Title']);
				   $("#modalareaannouncements #announcement-description").val(item['Description']);
                })				
            }
        })
		})

		

	});
    </script>