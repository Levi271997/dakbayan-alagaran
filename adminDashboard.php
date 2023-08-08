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

<section id="main" class="container" >
		
			<div class="sidebar card left"><?php include('sidebar-left.php'); ?></div>
			<div class="sidebartwo"></div>
		
		<div class="content">

			<div class="dynamic-content dashboard">
    			<div class="card left">
					<?php include('includes/announcement.php')?>
					<?php //include('sidebar-right.php'); ?>
					<?php include ('add-member.php')?>
					<?php include ('all-members-view.php')?>
					<?php include ('all-coordinators-view.php')?>
					<?php include ('addAnnouncements.php')?>
					<?php include ('view-profile.php')?>
					<?php include ('all-deceased-members.php')?>
					<?php include ('all-overdue-members.php')?>
					<?php include ('all-terminated-members.php')?>
					<div id ="containers-recently" class="tabs" style="display:none;"></div>
					
				</div>
				<div class="sidebar card right"><?php include('sidebar-right.php'); ?></div>
			</div>
			<?php include 'footer.php';?>
		</div>

	
	</section>
	<section id ="bottom-menu" >

		<div class="all-container">
			<div id="bottom-menu-container">
				<a href="#" id="dashboard" onclick="openTab('announcements')" class="bottomButtons">
				<svg fill="#434343" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="20px" height="20px"><path d="M 32 3 L 1 28 L 1.4921875 28.654297 C 2.8591875 30.477297 5.4694688 30.791703 7.2304688 29.345703 L 32 9 L 56.769531 29.345703 C 58.530531 30.791703 61.140812 30.477297 62.507812 28.654297 L 63 28 L 54 20.742188 L 54 8 L 45 8 L 45 13.484375 L 32 3 z M 32 13 L 8 32 L 8 56 L 56 56 L 56 35 L 32 13 z M 26 34 L 38 34 L 38 52 L 26 52 L 26 34 z"/></svg>
					<p>Home</p> 
				</a>

					<a href="#" id="overdue-member" class="bottomButtons" onclick="openTab('containers-overdue')"  style="position:relative;">
						<img src="images/sand-clock.png" alt="Overdue Member" />
						<!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
						 <path id="icons8_sand_clock" d="M7.984,2.986A1.2,1.2,0,0,0,7.84,3H6A.928.928,0,0,0,5,3.83a.928.928,0,0,0,1,.832H7V6.327c0,3.839,3.112,5.871,4.465,6.659C10.112,13.774,7,15.807,7,19.646V21.31H6a.846.846,0,1,0,0,1.665H7.832a1.2,1.2,0,0,0,.326,0H21.832a1.2,1.2,0,0,0,.326,0H24a.846.846,0,1,0,0-1.665H23V19.646c0-3.839-3.112-5.871-4.465-6.659C19.888,12.2,23,10.166,23,6.327V4.662h1a.928.928,0,0,0,1-.832A.928.928,0,0,0,24,3H22.154a1.085,1.085,0,0,0-.315,0H8.154a1.2,1.2,0,0,0-.17-.011ZM9.09,7.16H20.91c-.608,3.129-4.424,5.113-4.424,5.113a.767.767,0,0,0,0,1.427s3.816,1.984,4.424,5.113H9.09C9.7,15.685,13.514,13.7,13.514,13.7a.767.767,0,0,0,0-1.427S9.7,10.288,9.09,7.16Z" transform="translate(-5 -2.986)" fill="#434343"/>
						<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>	 -->
					
						
					</svg>
						<p >Overdue</p>
						<span id="countsoverdue"></span>
					</a>

				
				<a id="addm" onclick="openTab('addmember')" class="btn btn-orange bottomButtons">	
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
					<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
					</svg>	
				</a>

					
				
			
					<!-- <div id="backg"></div> -->
		
					<a href="#" id="retrieverecent" class="bottomButtons">
						
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
						<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
						</svg>
						<p>Added</p>
					</a>
				

				<a href="#" class="bottomButtons">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
				<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
				</svg>
				<p>Settings</p>
			</a>

			</div>

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


						<!-- this modal is for change password -->
						 <!-- <div class="modal fade" id="changepasswordmodal" tabindex="-1" aria-labelledby="launchModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-body">
									<p>Old password</p>
									<input type="text" placeholder="Old password">	
									<p>New password</p>
									<input type="text" placeholder="new password">
									<p>confirm new password</p>
									<input type="text" placeholder="confirm new password">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button class="btn btn-secondary" data-bs-dismiss="modal" onclick="openTab('announcements')">Go to Dashboard</button>
									
								</div>
								</div>
							</div>
						</div> -->

<!-- ------------------------------------------------------------------ -->

<!-- ------------------------------------- -->

	<!-- modal for payment -->
	<div class="modal fade popup-payment" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">

					<div id= "makePayment" class="payment">
							<div>
								<!-- <h3>Member Name:</h3> -->
								<div id="nameholder">
									<p id="firstname"></p>
									<p id="middlename"></p>
									<p id="lastname"></p>
								</div>
								<p style="margin: 0;">Monthly Due</p>
								<div id="price"><span>&#8369</span><p>20.00 </p> </div>
								
							</div>

			
							<div id="monthsholder">
								<div class="months">
									<p class="yearindicator"></p>
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
							
							<div id="submitpayment" name="submit" class="btn btn-orange" >
									<p id="pay">PAY</p>
									<a><span>&#8369;</span> <span id="totalamount">0</span><span>.00</span></a>
							</div>		
								<!-- <div id="subcontainer" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#launchModal2">
									<input id="submitpayment" type="button" name="submit" class="btn btn-orange" value="PAY">
									<a><span>&#8369;</span> <span id="totalamount">0</span><span>.00</span></a>
								</div>		 -->
							</div>


							
							
				 	</div>
					 <div class="loader loadingflex">
						<img style="width: 15%" src="./images/da-logo.png" alt="">
						<p>Loading... Please wait...</p>
					 </div>
				
      			</div>
      			<div class="modal-footer">	
       				<!-- <button id="closemod" type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button> -->
      			</div>
    		</div>
  		</div>
	</div>
	
<script>
				$(document).ready(function() {
					
					

					
				
					// $.fn.scrollEnd = function(callback, timeout) {          
					// $(this).scroll(function(){
					// 	var x = $(this);
					// 	if (x.data('scrollTimeout')) {
					// 	clearTimeout(x.data('scrollTimeout'));
					// 	}
					// 	x.data('scrollTimeout', setTimeout(callback,timeout));
						
					// });
					// };

					// $(window).scroll(function(){
					// 	$('#bottom-menu').fadeOut();
					// 	$('.main-topbar').fadeOut();
					// });

					// $(window).scrollEnd(function(){
					// 	$('#bottom-menu').fadeIn();
					// 	$('.main-topbar').fadeIn();

					// }, 500);
					
					// $('body').on('click', '.callicon', function (e) {	
					// 	var PhoneNumber = $(this).attr("data-id");
					// 	PhoneNumber = PhoneNumber.replace('Phone:', '');
					// 	window.location.href = 'tel://' + PhoneNumber;
					// })
		
					
		$("#search").val('');
				
				// $(window).resize(function() {
				// 	var windowWidth = $(window).width();
				// 	if(windowWidth >= 768)
				// 	{					
				// 		$("#main .sidebar.card.left").css("display","block");

				// 	}else{
				// 		$("#main .sidebar.card.left").css("display","none");
						
				// 	}
				// 	if(windowWidth <= 1400){
				// 		$("#main").removeClass("container");
				// 		$("#main").addClass("container-fluid");
						
				// 	}else{
				// 		$("#main").removeClass("container-fluid");
				// 		$("#main").addClass("container");
						
						
				// 	}
					
					
				// });
				let burgerMenu = document.getElementById("burger-menu");
        let pathOne = document.getElementById("line-one");
        let pathTwo = document.getElementById("line-two");
        let pathThree = document.getElementById("line-three");

        // burgerMenu.onclick = function() {
        //     burgerMenu.classList.toggle("close-icon");
        // }

		$('body').on('click', '#burger-menu', function (e) {	
			burgerMenu.classList.toggle("close-icon");
                var classlists = document.querySelector('#burger-menu');	
                if(classlists.classList.contains("opened"))	{	
					$(".sidebartwo").css("display","none");
                  
					$("#burger-menu").removeClass("opened");
					$("#main .sidebar.card.left").css("position","fixed");
					$("#main .sidebar.card.left").css("left","-240px");   
					
                }
				else{
					$(".sidebartwo").css("display","block");
					$("#main .sidebartwo").css("width","100%");				
                    
					$("#main .sidebar.card.left").css("position","fixed");
					$("#main .sidebar.card.left").css("left","0");
					$("#main .sidebar.card.left").css("z-index","99");					
                    $("#burger-menu").addClass("opened");         
                }               
            })
			$('body').on('click', '#secondnav #close-menu a,.sidebartwo,#secondnav .image,#secondnav #adminname', function (e) {	
				burgerMenu.classList.toggle("close-icon");
				$("#burger-menu").removeClass("opened");				
				$(".sidebartwo").css("display","none");
                   
					$("#burger-menu").removeClass("opened");
					$("#main .sidebar.card.left").css("position","fixed");
					$("#main .sidebar.card.left").css("left","-240px");   
				
			})
			$('body').on('click', '#secondnav #close-menu a', function (e) {		
				burgerMenu.classList.toggle("close-icon");
			})
			$('body').on('click', '#secondnav a:not([data-bs-toggle])', function (e) {	
				burgerMenu.classList.toggle("close-icon");
				$("#burger-menu").removeClass("opened");
				$(".sidebartwo").css("display","none");
                  
					$("#burger-menu").removeClass("opened");
					$("#main .sidebar.card.left").css("position","fixed");
					$("#main .sidebar.card.left").css("left","-240px");   
			})
			

			
		$('body').on('click', '#dashboard', function (e) {
			$(".loader").delay(1).fadeIn("fast");
			retrieveallmemberscount();
			retrieveActiveMembers();
			getAllOverDue()
			retrieveoverdue();
			getAllDeceased();
			getAllTerminated();
		})

		retrieveallmemberscount();
		retrieveActiveMembers();
		getAllOverDue()
		retrieveoverdue();
		getAllDeceased();
		getAllTerminated();

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
						$("#countsoverdue").text(html);
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
		function getAllTerminated(){
			let tag="retrieveAllTerminated";
				$.ajax({
					type: "POST",
					url: "view_ajax.php",
					data: {
						tag: tag,
					},
					success: function(html) { 	
						$("#terminated-area").text(html);
					}
				})
		}
		

		 var lastmonthofpayment = 0;
		function getlastmonthpaid(uid){
			var res;
			$.ajax({	
				type: "POST",
				 url: "retrieved-latest-date.php",
				 data:{
					 id: uid
					 },
				 success: function(results) {	
					 lastmonthofpayment  = new Date(results).getMonth()+1;
					
				 }
				})
				
		}

		

		let usersid="";
		let reset=0;
		function retrievepayments(uid){
			
			//var classesformonths=document.querySelectorAll('#staticBackdrop3 #monthsholder .months').length;
			//$('#staticBackdrop3 .modal-content::after').css("display","none");		
			$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data: {
					tag: "retrievepayments",
					id: uid
				},
				success: function(html) { 
					var jsondata = JSON.parse(html);
					if(jsondata.includes("reset")){
						reset = 1;
						
						var todaysdate=new Date().getMonth()+1;			
							let longMonth =[];
							var getCurrentMonth = new Date().getMonth();
							var counting = 0;
							var	firstPayment = getCurrentMonth;
							var month;
							var last = $(jsondata)[Object.keys(jsondata).sort().pop()];
							var afterlastdatepaid=new Date(last).getMonth()+1;
						 	var dateOfPayment;

							// jsondata.pop();
							 
							jsondata.forEach((items , index)=>{
								if(items != "reset"){
									if(index ==0){
										dateOfPayment=items['dateofpayment'];
									}
									firstPayment= new Date(dateOfPayment).getMonth();	
									//  if(counting == 0){
									// 	firstPayment= new Date(dateOfPayment).getMonth();		
								 	// }	
								}
								
								
								
									counting++;
									dates=new Date(items['dateofpayment']);
									longMonth.push(dates.toLocaleString('en-us', { month: 'long' }));
									month = document.querySelectorAll('.modal-content .months')[0];	
									
									
							})
							var classlists = document.querySelectorAll('.modal-content #monthsholder >* .paymentmonths');		
						 if(todaysdate < firstPayment + 1){
							
							$('#staticBackdrop3 .modal-dialog .modal-content .modal-body').addClass("hidden-overlay");
						 	$('#staticBackdrop3 .modal-dialog .modal-content .modal-body').css("pointer-events","none");						 	
						 	 resetClasses();
							
						 }else{
						
						 		var counter= 0;
								
						 		classlists[firstPayment].classList.add("StartingMonth");							
								if(firstPayment > 6){
									
								for(var x=firstPayment;x < 12 ;x++){
									if(longMonth.includes(classlists[x].getAttribute('id')))
									{	
										if(!classlists[x].classList.contains("pending")){
											classlists[x].classList.add('disabled'); 	
										}										
										classlists[x].classList.remove('selected'); 
										$("#totalamount").text("0"); 
										classlists[x].querySelectorAll('.paidindicator')[0].style.display="block";	
										classlists[x].querySelectorAll('.paidindicator')[0].innerHTML="PAID";							
									}													
								}	
								}else{
									for(var xy=0;xy <= 6 ;xy++){
										if(longMonth.includes(classlists[xy].getAttribute('id')))
										{	
											if(!classlists[xy].classList.contains("pending")){
											classlists[xy].classList.add('disabled'); 
											} 
											classlists[xy].classList.remove('selected'); 
											$("#totalamount").text("0"); 
											classlists[xy].querySelectorAll('.paidindicator')[0].style.display="block";									
										}																			
									}
								}							
								for(var z=firstPayment; z < classlists.length;z++){
									if(!classlists[z].classList.contains("disabled")){
										classlists[z].setAttribute("data-id",z);		
									}
								}
								var secondmonthscontainer=document.querySelectorAll('#staticBackdrop3 #monthsholder .months.addedchild .paymentmonths');
								for(var v=0;v <= secondmonthscontainer.length;v++){
									if(v == firstPayment + 1){
										for(var w=v;w <secondmonthscontainer.length;w++){
											secondmonthscontainer[w].classList.add("disabled");
										}
									}
								}


						 	}
			//---------------------- -------------------------------------------------------------
						
						 
					}else{
						
						reset = 0;
						$('#staticBackdrop3 .modal-dialog .modal-content .modal-body').removeClass("hidden-overlay");
						$('#staticBackdrop3 .modal-dialog .modal-content .modal-body').css("pointer-events","auto");	
						
						// -------------------------------------------------------------
							var classlists = document.querySelectorAll('.modal-content #monthsholder >* .paymentmonths');										
							let longMonth =[];
							var getCurrentMonth = new Date().getMonth();
							var counting = 0;
							var	firstPayment = getCurrentMonth;
							var month;
							var last = $(jsondata)[Object.keys(jsondata).sort().pop()];
							var afterlastdatepaid=new Date(last).getMonth()+1;
							jsondata.forEach((items , index)=>{	
								var dateOfPayment = items['dateofpayment'];				
								if(counting == 0){
									firstPayment= new Date(dateOfPayment).getMonth();		
								}				
								counting++;
								dates=new Date(items['dateofpayment']);
								longMonth.push(dates.toLocaleString('en-us', { month: 'long' }));
								month = document.querySelectorAll('.modal-content .months')[0];									
							})
								var counter= 0;
								classlists[firstPayment].classList.add("StartingMonth");							
								if(firstPayment > 6){
								for(var x=firstPayment;x < 12 ;x++){
									if(longMonth.includes(classlists[x].getAttribute('id')))
									{	
										if(!classlists[x].classList.contains("pending")){
											classlists[x].classList.add('disabled'); 	
										}										
										classlists[x].classList.remove('selected'); 
										$("#totalamount").text("0"); 
										classlists[x].querySelectorAll('.paidindicator')[0].style.display="block";	
										classlists[x].querySelectorAll('.paidindicator')[0].innerHTML="PAID";							
									}													
								}
								
								}else{
									for(var xy=0;xy <= 6 ;xy++){
										if(longMonth.includes(classlists[xy].getAttribute('id')))
										{	
											if(!classlists[xy].classList.contains("pending")){
											classlists[xy].classList.add('disabled'); 
											} 
											classlists[xy].classList.remove('selected'); 
											$("#totalamount").text("0"); 
											classlists[xy].querySelectorAll('.paidindicator')[0].style.display="block";									
										}																			
									}
								}		
												
								for(var z=firstPayment; z < classlists.length;z++){
									if(!classlists[z].classList.contains("disabled")){
										classlists[z].setAttribute("data-id",z);		
									}
								}
								var secondmonthscontainer=document.querySelectorAll('#staticBackdrop3 #monthsholder .months.addedchild .paymentmonths');
								for(var v=0;v <= secondmonthscontainer.length;v++){
									if(v == firstPayment){
										for(var w=v;w <secondmonthscontainer.length;w++){
											secondmonthscontainer[w].classList.add("disabled");
										}
									}
								}
			//---------------------- -------------------------------------------------------------
					}
				}			
			});

		}
		$('body').on('click', '#submitpayment', function (e) {
			
			 var selectedclasslist = document.querySelectorAll('#staticBackdrop3 #monthsholder .months > .paymentmonths.selected').length;
			
	
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
							$('#launchModal2').modal('show');		
			
						
							
												
                     }
               })              
		})

		$('body').on('click', '.makepayments', function (e) {

			$(".loader").delay(1500).fadeOut("slow");
			
			var uid=$(this).attr('data-id');	
			usersid=uid;
			//countrecords(uid);o
			
			setMonths(uid);	
			countrecords(uid);
			retrievepayername(uid);								
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
				console.log(html);
					var jsondata = JSON.parse(html);	
					
					jsondata.forEach((items)=>{	
						$("#firstname").text(items['first_name']); 
						$("#middlename").text(items['middle_name']); 
						$("#lastname").text(items['last_name']); 

					})
					
											 
				  }
			})

		}

		// function resetPaidPrompt(){
		
		// 	var startingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths');
		// 	for (var i = 0; i < startingMonth.length; i++) {
		// 		startingMonth[i].querySelectorAll('.paidindicator')[0].style.display="none";
		// 	}
		// }
		// function countDisabled(uid){
		
		// 	var daterenewal=new Date().getMonth() + 1;
			
		// 	 var classlistdisabled = document.querySelectorAll('.modal-content .months > .disabled').length;
		// 	 var startingMonth = parseInt(document.querySelectorAll('.modal-content .months > .StartingMonth')[0].getAttribute("data-id") );
		// 	 var getStartingMonth = startingMonth + 1;
			 
			 
			
		// 	//  if(classlistdisabled == 12 && getStartingMonth == daterenewal){
		// 	if(classlistdisabled == 12 && getStartingMonth <= daterenewal){
				
		// 		var startingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths');
		// 		var getstartingMonth = document.querySelectorAll('.modal-content .months > .paymentmonths.StartingMonth')[0];
		// 		getstartingMonth.classList.add("pending");
				
		// 		for (var i = 0; i < startingMonth.length; i++) {
		// 			startingMonth[i].classList.remove("disabled");
					
		// 		}
		// 		$.ajax({	
		// 		type: "POST",
		// 		 url: "reset.php",
		// 		 data:{
		// 			 id: uid,
		// 			 },
		// 		 success: function(results) {	
		// 			resetPaidPrompt();
		// 			getstartingMonth.querySelectorAll('.paidindicator')[0].style.display="block";
		// 		    getstartingMonth.querySelectorAll('.paidindicator')[0].innerHTML="UNPAID";
											 
		// 		  }
		// 	})
		// 	}
		
		// }


		function resetClasses(){
			
			var classlist = document.querySelectorAll('.modal-content .months > .paymentmonths');
			
			for (var i = 0; i < classlist.length; i++) {
				classlist[i].classList.remove("selected");
				classlist[i].classList.remove("disabled");
				classlist[i].classList.remove("lastmonthofpayment");
				classlist[i].classList.remove("StartingMonth");
				classlist[i].classList.remove("pending");
				classlist[i].querySelector('.paidindicator').innerHTML="PAID";		
				classlist[i].querySelector('.paidindicator').style.display="none";		
				
			}
		}
		$('body').on('click', '#staticBackdrop3 #closemod,#staticBackdrop3 .btn-close', function (e) {
			var classlist=document.querySelectorAll("#staticBackdrop3 #monthsholder .months").length;
			if(classlist > 1){
				$("#staticBackdrop3 #makePayment #monthsholder .months")[1].remove();
				//$("#staticBackdrop3 .modal-content").css("width","unset");
			}
			$(".loader").delay(1).fadeIn("fast");

			resetClasses();
			
		})
		
			
		
		
		function countrecords(id){
			let tag="countrecords";
			
			$.ajax({	
				type: "POST",
				 url: "view_ajax.php",
				 data:{
					 id: id,
					 tag:tag
					 },
				 success: function(results) {
					if(results > 5 ){
						
						 $('.months.addedchild').css("display","none");
					}
					
					
				 }
				
				});
				
		}
	
		var startingpoint;
 		function setMonths(id){	


			$.ajax({	
				type: "POST",
				 url: "retrieved-latest-date.php",
				 data:{
					 id: id,
					 },
				 success: function(results) {
					
					var lastmonthofpayment = new Date(results).getMonth()+1;
					startingpoint=lastmonthofpayment;

					var lastyearofpayment=new Date(results).getFullYear();
					
					//console.log("the last month of payment " + lastmonthofpayment);
					var c= document.querySelectorAll('#staticBackdrop3 #makePayment #monthsholder .months .paymentmonths');
					for(var x=0;x<=12 ;x++){
						if(x == lastmonthofpayment-1){
							c[x].classList.add("lastmonthofpayment");
						}
					}
					var classlist= document.querySelectorAll('#staticBackdrop3 #makePayment #monthsholder .months');
					let p = document.querySelector('#staticBackdrop3 #makePayment .months');
					let currentMonth = 0;
					//var currentyear=new Date().getFullYear();				
					$("#monthsholder .yearindicator").html(lastyearofpayment);
					if(classlist.length < 2){
						//if(lastmonthofpayment > 6) {
							let p_prime = p.cloneNode(true);
							p.parentNode.appendChild(p_prime);
							p_prime.classList += " addedchild";
							$("#staticBackdrop3 .modal-content").css("width","760px");
							p_prime.css="border-left","2px solid red";
							var newyear=lastyearofpayment + 1;
							$("#monthsholder .months.addedchild .yearindicator").html(newyear);

							if(lastmonthofpayment < 6 ){
								$('.months.addedchild').css("display","none");
							}
						//}		
					}					
					for(var z=0;z <lastmonthofpayment;z++){
							c[z].classList.add("disabled");						
					}
					var getcurmonth=new Date().getMonth();
					
					for(var yy=lastmonthofpayment;yy < getcurmonth;yy++){
								if(!c[yy].classList.contains("disabled")){
									c[yy].classList.add('pending');  
									 c[yy].querySelectorAll('.paidindicator')[0].style.display="block";
									c[yy].querySelectorAll('.paidindicator')[0].innerHTML="UNPAID";
									c[yy].classList.remove('selected'); 
			
								}else{
									c[yy].classList.remove('pending');  
									
								}						
					}
					

				  }
			})
					
		}
		
		
		$('body').on('click', '#staticBackdrop3 #monthsholder .paymentmonths', function (e) {
			

			ClearSelectedMonth();
			//var monthselected =$(this);
			var monthselected=$("#staticBackdrop3 #monthsholder .paymentmonths").index(this);
			//alert(zz);

			// var i=$("staticBackdrop3 #monthsholder .paymentmonths").index(this);
			// console.log("this index: "+i);

			//var currentMonthActive = parseInt(monthselected.attr("data-id"));
			
			var classlist = document.querySelectorAll('#staticBackdrop3 #makePayment #monthsholder .paymentmonths');
			
			//console.log("the first month is" + startingpoint);
			// var getStartedMonth = parseInt(document.querySelectorAll('#staticBackdrop3 #makePayment #monthsholder >* .paymentmonths.StartingMonth')[0].getAttribute("data-id"));
			// console.log("getstartedmonth "+getStartedMonth);
			
		 	//for(var x=startingpoint; x <= currentMonthActive;x++){
				for(var x=startingpoint; x <= monthselected;x++){
				if(!classlist[x].classList.contains("disabled")){
					classlist[x].classList.add('selected');
				}		
		 	}

			// if(currentMonthActive < getStartedMonth){
			
			// 	for(var xy=getStartedMonth; xy < classlist.length;xy++){
			// 		if(!classlist[xy].classList.contains("disabled")){

			// 			classlist[xy].classList.add('selected');
			// 		}		
			// 	}

			// 	// for(var xyz=0; xyz <= currentMonthActive;xyz++){
					
			// 	// 	if(!classlist[xyz].classList.contains("disabled")){
					
			// 	// 		classlist[xyz].classList.add('selected');
			// 	// 	}
					
			// 	// }
			// }
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
				
			}else{

				// for (var i = 0; i < classlistings.length; i++) {
				// total +=20;
				if(reset==1){
					total = (20*classlistings.length) + 100;	
				}else{
					total = (20*classlistings.length);
				}
				$("#totalamount").text(total);
			
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
			resetprofileviewing();
			$("#canceledit").click();
			resetviewingofprofiles();						
		}
	
	
		function resetprofileviewing(){
			$("#viewprofile >.profileview").css("display","block");								
			$("#viewprofile > #viewcoorprofile").css("display","none");		
			$("#viewprofile .profileview #add").css("display","none-block");
			$("#viewprofile .transaction-history").css("display","none");
		}
		function resetviewingofprofiles(){
						$("#viewprofile #userid").text('');
						$("#viewprofile #lname").val('');
						$("#viewprofile #fname").val('');
						$("#viewprofile #mname").val('');
						$("#viewprofile #suffix").val('');
						$("#viewprofile #saddress").val('');
						$("#viewprofile #birthdate").val('');
						$("#viewprofile #age").val('');
						$("#viewprofile #cs").val('');
						$("#viewprofile #gender").val('');
						$("#viewprofile #voter").val('');
						$("#viewprofile #phone").val('');	
						$("#viewprofile #email").val('');						
						$("#viewprofile #work").val('');
						$("#viewprofile #barangay2").val('');
						$("#viewprofile #zoneModaltwo").val('');
						$("#viewprofile #rep-name-one").val('');
						$("#viewprofile #rep-name-two").val('');
						$("#viewprofile #rep-name-three").val('');
						$("#viewprofile #rep-relation-one").val('');
						$("#viewprofile #rep-relation-two").val('');
						$("#viewprofile #rep-relation-three").val('');

		}
	</script>
	<script type="text/javascript">
		
		$(document).ready(function() {
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
						$("#countsoverdue").text(html);
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
		function getAllTerminated(){
			let tag="retrieveAllTerminated";
				$.ajax({
					type: "POST",
					url: "view_ajax.php",
					data: {
						tag: tag,
					},
					success: function(html) { 	
						$("#terminated-area").text(html);
					}
				})
		}


										
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
			$('body').on('click', '.page-link', function (e) {
				
				var id = $(this).attr("data-id");
				var select_id = $(this).parent().attr("id");
				$.ajax({
					url: "ajax2.php",
					type: "GET",
					data: {
						page : id
					},
					//cache: false,
					success: function(dataResult){
						$("#containers-members").html(dataResult);
						$(".pageitem").removeClass("active-tab");
						$("#"+select_id).addClass("active-tab");			
					}
				});
			});
			$('body').on('click', '#containers-coordinators .page-link', function (e) {
				
				var id = $(this).attr("data-id");
				var select_id = $(this).parent().attr("id");
				$.ajax({
					url: "coordinators_fetch_ajax.php",
					type: "GET",
					data: {
						page : id
					},
					
					success: function(dataResult){
						$("#containers-coordinators").html(dataResult);
						$(".pageitem").removeClass("active-tab");
						$("#"+select_id).addClass("active-tab");			
					}
				});
			});
			$('body').on('click', '#containers-overdue .page-link', function (e) {
				
				var id = $(this).attr("data-id");
				var select_id = $(this).parent().attr("id");
				$.ajax({
					url: "overdue_fetch_ajax.php",
					type: "GET",
					data: {
						page : id
					},
					
					success: function(dataResult){
						$("#containers-overdue").html(dataResult);
						$(".pageitem").removeClass("active-tab");
						$("#"+select_id).addClass("active-tab");			
					}
				});
			});
			$('body').on('click', '#containers-deceased .page-link', function (e) {
				
				var id = $(this).attr("data-id");
				var select_id = $(this).parent().attr("id");
				$.ajax({
					url: "deceased_fetch_ajax.php",
					type: "GET",
					data: {
						page : id
					},
					
					success: function(dataResult){
						$("#containers-deceased").html(dataResult);
						$(".pageitem").removeClass("active-tab");
						$("#"+select_id).addClass("active-tab");			
					}
				});
			});
			$('body').on('click', '#containers-terminated .page-link', function (e) {
				
				var id = $(this).attr("data-id");
				var select_id = $(this).parent().attr("id");
				$.ajax({
					url: "terminated_fetch_ajax.php",
					type: "GET",
					data: {
						page : id
					},
					
					success: function(dataResult){
						$("#containers-terminated").html(dataResult);
						$(".pageitem").removeClass("active-tab");
						$("#"+select_id).addClass("active-tab");			
					}
				});
			});
			
			
			function retrieveallcoordinators(){
				var name = $('#search').val();
				var emp = "";
				if (name === "") {
						$.ajax({
						type: "POST",
						url: "coordinators_fetch_ajax.php",
						data: {
							search: emp
						},
						success: function(html) { 
							$("#containers-coordinators").html(html);		
						}
						});
				}else {
						$.ajax({
						type: "POST",
						url: "coordinators_fetch_ajax.php",
						data: {
							search: name
						},
						success: function(html) { 
							$("#containers-coordinators").html(html);
						}
						});   
				}
			}
			function retrievealldeceased(){
				
				
						$.ajax({
						type: "POST",
						url: "deceased_fetch_ajax.php",
						success: function(html) { 

						$("#containers-deceased").html(html);		
						}
						});
				
			}
			function retrieveAllTerminated(){
				
				
				$.ajax({
				type: "POST",
				url: "terminated_fetch_ajax.php",
				success: function(html) { 

				$("#containers-terminated").html(html);		
				}
				});
		
	}
			function retrieveoverduemembers(){			
				$.ajax({
				type: "POST",
				url: "overdue_fetch_ajax.php",
				success: function(html) { 
				$("#containers-overdue").html(html);		
				}
				});
		
			}
			function retrieveallrecentaddition(){
				let tag="retrieveallrecentadded";
				$.ajax({
				type: "POST",
				url: "view_ajax.php",
				data:{tag:tag},
				success: function(html) { 
				$("#containers-recently").html(html);		
				}
				});
		
			}
			
			$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 				$(this).prop("disabled",true);
				 $(this).css("border","none");
			});
				$("#btntext").text("EDIT PROFILE");


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
			
			$('body').on('click', '.deceased-members', function (e) {
				openTab('containers-deceased');
				retrievealldeceased();
				
			})
			$('body').on('click', '.terminated-members', function (e) {
				openTab('containers-terminated');
				retrieveAllTerminated();
				
			})


			$('body').on('click', '.overdue-members', function (e) {
				openTab('containers-overdue');
				retrieveoverduemembers();
				
			});
			$('body').on('click', '#retrieverecent', function (e) {
				
				openTab('containers-recently');
				retrieveallrecentaddition();
				
			});
			$('body').on('click', '#membersview', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				retrieveallmember();
				$("#search").val("");
			});
			$('body').on('click', '#viewannouncements', function (e) {
				$(".loader").delay(1).fadeIn("fast");
			})
			$('body').on('click', '#add-announcements', function (e) {
				$(".loader").delay(1).fadeIn("fast");
			})
			$('body').on('click', '#coorsview', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val('');
				openTab('containers-coordinators');
				retrieveallcoordinators();
			});
			$('body').on('click', '#deceased-member', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val("");
				retrievealldeceased();
			});
			$('body').on('click', '#terminated-member', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val("");
				retrieveAllTerminated();
			});
			
			$('body').on('click', '#overdue-member', function (e) {	
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val("");			
				retrieveoverduemembers();
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
						$("#staticBackdrop2").modal('hide');
						Swal.fire('Announcement has been updated',)
						//$("#staticBackdrop2").hide();				
						$("#announcement-title").css("border", "none");
						$("#announcement-title").css("pointer-events", "none");
						$("#announcement-description").css("border", "none");
						$("#announcement-description").css("pointer-events", "none");
						$(".editbtn").text("Edit");				
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
			$('body').on('click', '#add-member', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val('');
			})
			$('body').on('click', '#ad', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$("#search").val('');
			})
			$('body').on('click', '.closebtn', function (e) {
					$("#announcement-title").css("border", "none");
					$("#announcement-title").css("pointer-events", "none");
					$("#announcement-description").css("border", "none");
					$("#announcement-description").css("pointer-events", "none");
					$(".editbtn").text("Edit");
			})
			//---------------------------------------------------
			$('body').on('click', '.shortcuts > a,#bottom-menu-container > a,#secondnav a', function (e) {
				$("#search").val("");
			})
			
			

			
			$('body').on('click', '#backtomembers', function (e) {
				$(".loader").delay(1).fadeIn("fast");
				$( "#viewprofile .profileview input,#viewprofile .profileview select" ).each(function( index ) {
					$(this).prop("disabled",true);	
				
				});
				$("#viewprofile .profileview #btntext").text("EDIT PROFILE");	
				$("#viewprofile .profileview #canceledit").css("display", "none");
			})
			$('body').on('click', '#canceledit', function (e) {
				
					$(".nameholder #cp").css("display","none");
					
				//$('#viewprofile #img').attr('src', 'profileimages/' + imgfile).width(150);
				$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 				$(this).prop("disabled",true);	
				$(this).css("border","none");
				$(this).removeClass("edit-field");	
				});
				$("#viewprofile .profileview #add").css("display","none");
				$("#viewprofile .profileview #removeone").css("display","none");
				$("#viewprofile .profileview #removetwo").css("display","none");
				$("#viewprofile #btntext").text("EDIT PROFILE");	
				$("#viewprofile #canceledit").css("display", "none");
				$('#viewprofile #img').attr('src', 'profileimages/' + imgfile).width(150);
			})
			
			function getloggedincredentials(){
				$('.user .image').attr('src', '').width(35);
				var adid='<?=$_SESSION['usersId']?>';
				let tag="retrieveadminimages";
				$.ajax({					
					type: "POST",
						url: "view_ajax.php",
						data: {adminid:adid,tag:tag},
						
						success: function(results) {	
						var jsondata=JSON.parse(results);				
							jsondata.forEach((item,index)=>{
								var profile=item['img'];
								var pf;
								if(profile === ''){
									$('.user .image').attr('src', 'profileimages/camera-icon.jpg').width(35);
									pf="camera-icon.jpg";
								}else{
									$('.user .image').attr('src', 'profileimages/' + profile).width(35);	
									pf=profile;								
								}	
								$(".user .nameholder #adminname").text(item['first_name'] + " " + item['last_name']);	
								imgfile=pf;		
								
							})
						}
					})
			
		
			}
			$(window).on('load', function(){
				$('.user .image').attr('src', 'profileimages/' + imgfile).width(35);
				getloggedincredentials();
			});
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

				var classlistings = document.querySelectorAll('#viewprofile #pv #famrep .representative').length;
				
				repnamesidone=document.querySelectorAll('#viewprofile #pv #famrep .representative')[0].id;
				repnameone=$("#viewprofile #pv #famrep .representative #rep-name-one").val();
				reprelone=$("#viewprofile #pv #famrep .representative #rep-relation-one").val();

				
				
				if(classlistings  > 1){		
					repnamesidtwo= document.querySelectorAll('#viewprofile #pv #famrep .representative')[1].id;				
						repnametwo=$("#viewprofile #pv #famrep .representative #rep-name-two").val();
						repreltwo=$("#viewprofile #pv #famrep .representative #rep-relation-two").val();			
				}
				 if(classlistings > 2 ){
					repnamesidthree= document.querySelectorAll('#viewprofile #pv #famrep .representative')[2].id;		
						repnamethree=$("#viewprofile #pv #famrep .representative #rep-name-three").val();
					 	reprelthree=$("#viewprofile #pv #famrep .representative #rep-relation-three").val();					
				}
				
				var btntext=$("#viewprofile #btntext").text();
				let tag="updateprofile";
				var aid='<?=$_SESSION['usersId']?>';
				if(btntext == "SAVE CHANGES"){	
					if(memberid==aid){
						$(".nameholder #cp").css("display","none");
					}
					

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
						console.log(results);
						
						if(memberid==aid){
							getloggedincredentials();
						}	
						
							$( "#viewprofile input,#viewprofile select").each(function( index ) {
 								$(this).prop("disabled",true);	
								$(this).css("border","none");
								$(this).removeClass("edit-field");	
							});							
							$(".nameholder #cp").css("display","none");					
							$("#viewprofile #btntext").text("EDIT PROFILE");	
							$("#viewprofile #canceledit").css("display", "none");
							$("#viewprofile #pv #add").css("display","none");
							$("#viewprofile #pv #removeone").css("display","none");
							$("#viewprofile #pv #removetwo").css("display","none");
							Swal.fire('Successfully updated',)
														 	
							retrieveallmember();
							retrieveAllFamRep(memberid);
							
							
						}
				});  
				
				} else {
				
					$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
 						$(this).prop("disabled", false);
						$(this).addClass("edit-field");	
						$("#viewprofile #pv #add").css("display","inline-block");
						$("#viewprofile #pv #removeone").css("display","inline-block");
						$("#viewprofile #pv #removetwo").css("display","inline-block");
						 $("#viewprofile #age").prop("disabled",true);						 
						$("#viewprofile #btntext").text("SAVE CHANGES");
						$("#viewprofile #canceledit").css("display", "block");
						
					});

					if(memberid==aid){
						$(".nameholder #cp").css("display","block");
					}
						
						
					
					
				}							
			})

			
			//---------------------------------------------------
			$('body').on('click', '#cashassistance', function (e) {
				 var selected =  $(this).data("id");
				
				var selected = $(this).data("id");				
				let tag="availbenefits";
				var confirmalert =  Confirm('Avail Benefit', 'Avail this benefit for this member?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
						$.ajax({ 
						
							url: 'store.php', 
							type: 'POST',
							data: {memberid:memberid,
							tag: tag,
							benefitid:selected},
							success: function(response){								
							if(response=="yes"){	
								Swal.fire('Benefit approved',)
								verifycashassitance(memberid);
							}else{							
								Swal.fire('Failed to avail this benefit',)
							}
							}
						});
					})
			})
			$('body').on('click', '#LegalAssistance', function (e) {
				
				
				var selected =  $(this).data("id");
				
			   var selected = $(this).data("id");
			   var thisItem = $(this);				
			   let tag="availbenefits";
			   var confirmalert =  Confirm('Avail Benefit', 'Avail this benefit for this member?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
			   		$.ajax({ 
					   
						url: 'store.php', 
							type: 'POST',
							data: {memberid:memberid,
							tag: tag,
							benefitid:selected},
			   			success: function(response){								
			   			if(response=="yes"){
							Swal.fire('Benefit approved',)
							// verifylegalassistance(memberid);
							thisItem.css("display","none");
			   			}else{							
							Swal.fire('Failed to avail this benefit',)
			   			}
			   			}
			   		});
			   	})
		   })
		   $('body').on('click', '#Hospitalization', function (e) {
				
				
				var selected =  $(this).data("id");
			
			   var selected = $(this).data("id");				
			   let tag="availbenefits";
			   var confirmalert =  Confirm('Avail Benefit', 'Avail this benefit for this member?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
			   		$.ajax({ 
					   
						url: 'store.php', 
							type: 'POST',
							data: {memberid:memberid,
							tag: tag,
							benefitid:selected},
			   			success: function(response){								
			   			if(response=="yes"){	
							Swal.fire('Benefit approved',)
							verifyHospitalization(memberid);
			   			}else{							
							Swal.fire('Failed to avail this benefit',)
			   			}
			   			}
			   		});
			   	})
		   })

		   function Confirm(title, msg, $true, $false) { /*change*/
						var $content =  "<div class='dialog-ovelay'>" +
										"<div class='dialog'><header>" +
										" <h3> " + title + " </h3> " +
										"<i class='fa fa-close'></i>" +
									"</header>" +
									"<div class='dialog-msg'>" +
										" <p> " + msg + " </p> " +
									"</div>" +
									"<footer>" +
										"<div class='controls'>" +
											" <button class='button button-danger doAction'>" + $true + "</button> " +
											" <button class='button button-default cancelAction'>" + $false + "</button> " +
										"</div>" +
									"</footer>" +
								"</div>" +
								"</div>";
						$('body').prepend($content);
					$('.doAction').click(function () {
						//window.open($link, "_blank"); 
						$(this).parents('.dialog-ovelay').fadeOut(500, function () {
						$(this).remove();
						});
					});
				$('.cancelAction, .fa-close').click(function () {
						$(this).parents('.dialog-ovelay').fadeOut(500, function () {
						$(this).remove();
						});
					});    
   			}

			$('body').on('click', '.deletebutton', function (e) {
                var el = this;
                var deleteid = $(this).data("id");
				
				var confirmalert =  Confirm('Delete Record', 'Are you sure you want to delete this record ?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
					
					
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
						 Swal.fire('Invalid ID',)
                	  }
            		}
            	});
              })
          	});
			

			  $('body').on('click', '.delete-announcements', function (e) {
                var el = this;
                var deleteid = $(this).data("id");
				
                var confirmalert =  Confirm('Delete Announcement', 'Are you sure you want to delete this announcement?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
					     $.ajax({ 						
							url: 'announcements_delete_ajax.php', 
							type: 'POST',
							data: {deleteid:deleteid },
							success: function(response){								
							if(response=="yes"){	
								$(el).closest('article').css('background','tomato');
								$(el).closest('article').fadeOut(800,function(){$(this).remove();});
							}else{
								Swal.fire('Invalid ID',)
							}
							}
            		});
				}) ;
				
             
              
          	});

			  $('body').on('click', '#clearall', function (e) {
				$("#reg-form")[0].reset();
			  });
			  var imgfile="";
			 
			  $('body').on('click', '#adminname, #firstnav .user .image, #secondnav .user .image,#adminpic .user .image', function (e) {
				imgfile="";
			
				openTab('viewprofile');
				$(".loader").delay(1).fadeIn("fast");
				$(".loader").delay(2000).fadeOut("slow");
				var adminid = '<?=$_SESSION['usersId']?>';
				
				let tag="vp";
				$.ajax({
				url:"view_ajax.php",
				dataType:"json",
				method:"POST",
				data:{retrieveid:adminid,tag:tag},
				success:function(response){	
					response.forEach((item,index)=>{
						var profid=item['uid'];
						memberid=profid;
						var img=item['img'];

						if(item['member_status']=='1'){
							
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('active');
							$("#viewprofile #statusindicator").text('On-time');
							$("#benefitsheading").css("display","block");
							
						}else if(item['member_status']=='2'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('overdue');
							$("#viewprofile #statusindicator").text('Overdue');
							$("#benefitsheading").css("display","block");
							
							
						}else if(item['member_status']=='3'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('deceased');
							$("#viewprofile #statusindicator").text('Deceased');
							$("#benefitsheading").css("display","none");
							

						}else if(item['member_status']=='4'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('terminate');
							$("#viewprofile #statusindicator").text('Terminated');
							$("#benefitsheading").css("display","none");
						
							

						}


						
					
						if(img === ''){
							$('#viewprofile #img').attr('src', 'profileimages/camera-icon.jpg').width(150);
							imgfile="camera-icon.jpg";
						}else{
							$('#viewprofile #img').attr('src', 'profileimages/' + img).width(150);
							imgfile=img;
						}

						if(item['level_status']=="coordinator" || item['level_status']=="super admin"){
							$('#viewprofile #img').css("border","2px solid blue");
						}else{
							$('#viewprofile #img').css("border","2px solid orange");
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
						retrieveAllFamRep(adminid);

						$("#viewprofile .profileview #transactionhistory").css("display","none");
						$("#adminindicator").removeClass();
						$("#adminindicator").addClass("admin-indicator");
						$("#adminindicator").css("display","block");
						$("#setcoordinatorbtn").css("display","none");
						if(item['level_status']=="member"){
							$(".coornameholder").css("display","flex");
							retreievedCoordinator(item['personnel_id']);
						}else{
							$(".coornameholder").css("display","none");
						}
						verifycashassitance(profileid);
						 verifylegalassistance(profileid);
						 verifyHospitalization(profileid);
						 verifyBurial(profileid);


					
					
					
					})
            }
        })
 })
			 var zoneName = "";
			var memberid=0;
			var imgfile="";
		  $('body').on('click', '.viewprofile', function (e) {

			var userlevel='<?=$_SESSION['level']?>';

			
						

		
			

			$(".loader").delay(1500).fadeOut("slow");
			
				openTab('viewprofile');
				var el = this;
                var profileid = $(this).data("id");
				
			



				memberid=profileid;
				let tag="vp";
				$.ajax({
				url:"view_ajax.php",
				dataType:"json",
				method:"POST",
				data:{retrieveid:profileid,
					tag:tag
				},


				success:function(response){	
					response.forEach((item,index)=>{
					
						var profid=item['uid'];
						memberid=profid;
						var img=item['img'];
						
					
						
						if(img === ''){
							$('#viewprofile #img').attr('src', 'profileimages/camera-icon.jpg').width(150);
							imgfile="camera-icon.jpg";
						}else{
							$('#viewprofile #img').attr('src', 'profileimages/' + img).width(150);
							imgfile=img;
						}
					
						

						if(item['level_status']=="coordinator" || item['level_status']=="super admin"){
							$('#viewprofile #img').css("border","4px solid #c7dcf3");
							$("#adminindicator").css("display","flex");
							$("#adminindicator").addClass("admin-indicator");							
							$("#setcoordinatorbtn").css("display","none");

						}else{
							$('#viewprofile #img').css("border","4px solid #f2bd4e");
							$("#adminindicator").css("display","none");
						
							if(item['member_status'] == '3' || item['member_status'] == '4'){	
								$("#setcoordinatorbtn").css("display","none");
							}else{
								$("#setcoordinatorbtn").css("display","block");
							}

							
							if(userlevel=='coordinator'){
								$("#viewprofile #setcoordinatorbtn").css("display","none");
							}
						
							
						}

					

						if(item['member_status']=='1'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('active');
							$("#viewprofile #statusindicator").text('On-time');
							$("#benefitsheading").css("display","block");
							// $("#viewprofile #statusindicator").css("padding","5px");
							// $("#viewprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='2'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('overdue');
							$("#viewprofile #statusindicator").text('Overdue');
							$("#benefitsheading").css("display","block");
							// $("#viewprofile #statusindicator").css("padding","5px");
							// $("#viewprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='3'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('deceased');
							$("#viewprofile #statusindicator").text('Deceased');
							$("#benefitsheading").css("display","none");

							// $("#viewprofile #statusindicator").css("padding","5px");
							// $("#viewprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='4'){
							$("#viewprofile #statusindicator").removeClass();
							$("#viewprofile #statusindicator").addClass('terminate');
							$("#viewprofile #statusindicator").text('Terminated');
							$("#benefitsheading").css("display","none");
							

							// $("#viewprofile #statusindicator").css("padding","5px");
							// $("#viewprofile #statusindicator").css("max-height","30px");
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
						$("#zone").val(item['zone']);
						 $("#viewprofile #barangay2").trigger("change");	
						 zoneName = item['street_name'];
						retrieveAllFamRep(profileid);
						const d = new Date(item['date_of_registration']);
						const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
						const mo = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
						const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
						 $("#viewprofile #membersincedate").text(`${mo} ${da}, ${ye}`);
						 retrievethismemberslastpayment(profileid);
						 verifycashassitance(profileid);
						 verifylegalassistance(profileid);
						 verifyHospitalization(profileid);
						 verifyBurial(profileid);
					

					

						if(item['level_status']=="member" && userlevel !='coordinator' ){
							$(".coornameholder").css("display","flex");
							retreievedCoordinator(item['personnel_id']);							
						}else{
							$(".coornameholder").css("display","none");
						}
						
						
						if(item['level_status']=='member'){
							$("#viewprofile .profileview #transactionhistory").css("display","inline");
							getmembertransactionhistory();
						}					
						$("#viewprofile #membername").text(item['first_name'] + " " + item['middle_name'] + " " + item['last_name']);											
					})
            }
        })
	})

	var newid=0;
			function getlastid(){
				let tag="getlastid";
				$.ajax({					
                   type: "POST",
                    url: "view_ajax.php",
					data:{tag:tag},
                    success: function(results) {	
						newid = results;	
                    }
               });             
			}
			function resetpaymentarea(){
				var c= $(".months > .paymentmonth");
				for(var x=0;x< c.length;x++){
					if(c[x].classList.contains("selected")){
						c[x].classList.remove("selected");
					}
					
				}
			}
			$(document).on('click','#submitregistration', function(e){
				
				e.preventDefault();			
				var img = $('#file')[0].files;
                var fname = $("#fname").val();
                var lname = $("#lname").val();
				var mname = $("#mname").val();			
				var suffix = $("#suffix").val();
				var status = $("#cs").val();
				var voter = $("#voter").val();
				var gender = $("#gender").val();
				var barangay=$("#barangay").val();
				var zone=$("#zone").val();
				var saddress = $("#saddress").val();
				 var birthdate = $("#birthdate").val();
				var age = $("#age").val();
				var phone = $("#phone").val();
				var email = $("#email").val();
				var work = $("#work").val();
				var rep_name_one = $("#rep-name-one").val();
				var rep_name_two = $("#rep-name-two").val();
				var rep_name_three = $("#rep-name-three").val();
				var rep_rel_one = $("#rep-relation-one").val();
				var rep_rel_two = $("#rep-relation-two").val();
				var rep_rel_three = $("#rep-relation-three").val();
				var total = $("#total").val();
				var classeslist = document.querySelectorAll('.months > .paymentmonth.selected').length;
				var form_data = new FormData();	
		
				form_data.append("tag","addmember")
				form_data.append("profile_img", img[0] )
				form_data.append("fname",fname)
			 	form_data.append("mname",mname)
				form_data.append("lname",lname)
				form_data.append("suffix",suffix)
				form_data.append("barangay",barangay)
				form_data.append("zone",zone)
				form_data.append("saddress",saddress)
				form_data.append("birthdate",birthdate)
				form_data.append("age",age)
				form_data.append("status",status)
				form_data.append("gender",gender)
				form_data.append("voter",voter)
				form_data.append("phone",phone)
				form_data.append("email",email)
				form_data.append("work",work)
				form_data.append("repnameone",rep_name_one)
				form_data.append("repnametwo",rep_name_two)
				form_data.append("repnamethree",rep_name_three)
				form_data.append("reprelone",rep_rel_one)
				form_data.append("repreltwo",rep_rel_two)
				form_data.append("reprelthree",rep_rel_three)
				form_data.append("total",total)
				form_data.append("classeslist",classeslist)

				if(classeslist < 6){
					Swal.fire('Monthly payment minimum of six months',)
				}else{
					resetpaymentarea();
					var currentMonth = new Date().getMonth();
					document.getElementsByClassName("paymentmonth")[currentMonth].classList.add('selected');
				   $.ajax({					
                   type: "POST",
                    url: "store.php",
					data: form_data,
 					cache:false,
					contentType: false,
					processData: false,
                    success: function(results) {	
						$("#reg-form")[0].reset();
						$("#addmembers").css("display","block");
						$("#makePayment").css("display","none");
						retrieveallmember();
						$('#viewprofile #img').attr('src', 'profileimages/camera-icon.jpg').width(150);			
						getlastid();	
						$('#launchModal').modal('show');	

						
						retrieveallmemberscount();
						retrieveActiveMembers();
						getAllOverDue()
						retrieveoverdue();
						getAllDeceased();
						getAllTerminated();
						retrieveallrecentaddition();
						

                    }

				
					
               });             	
				}
				

            
            });	

		

		

	$('body').on('click', '#viewnewuserprofile', function (e) {

		$(".loader").delay(1500).fadeOut("slow");
openTab('viewprofile');

memberid=newid;
let tag="vp";
$.ajax({
url:"view_ajax.php",
dataType:"json",
method:"POST",
data:{retrieveid:newid,
	tag:tag
},


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
		if(item['level_status']=="coordinator" || item['level_status']=="super admin"){
			$('#viewprofile #img').css("border","4px solid #c7dcf3");
			$("#adminindicator").css("display","flex");
			$("#adminindicator").addClass("admin-indicator");							
			$("#setcoordinatorbtn").css("display","none");

		}else{
			$('#viewprofile #img').css("border","4px solid #f2bd4e");
			$("#adminindicator").css("display","none");
			
			if(item['member_status'] == '3' || item['member_status'] == '4'){
								$("#setcoordinatorbtn").css("display","none");
							}else{
								$("#setcoordinatorbtn").css("display","block");
							}
		}


		if(item['member_status']=='1'){
			$("#viewprofile #statusindicator").removeClass();
			$("#viewprofile #statusindicator").addClass('active-indicator');
			$("#viewprofile #statusindicator").text('On-time');
			$("#viewprofile #statusindicator").css("padding","5px");
			$("#viewprofile #statusindicator").css("max-height","30px");
		}else if(item['member_status']=='2'){
			$("#viewprofile #statusindicator").removeClass();
			$("#viewprofile #statusindicator").addClass('overdue-indicator');
			$("#viewprofile #statusindicator").text('Overdue');
			$("#viewprofile #statusindicator").css("padding","5px");
			$("#viewprofile #statusindicator").css("max-height","30px");
		}else if(item['member_status']=='3'){
			$("#viewprofile #statusindicator").removeClass();
			$("#viewprofile #statusindicator").addClass('deceased-indicator');
			$("#viewprofile #statusindicator").text('Deceased');
			$("#viewprofile #statusindicator").css("padding","5px");
			$("#viewprofile #statusindicator").css("max-height","30px");
		}else if(item['member_status']=='4'){
			$("#viewprofile #statusindicator").removeClass();
			$("#viewprofile #statusindicator").addClass('terminated-indicator');
			$("#viewprofile #statusindicator").text('Terminated');
			$("#viewprofile #statusindicator").css("padding","5px");
			$("#viewprofile #statusindicator").css("max-height","30px");
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
		retrieveAllFamRep(newid);
		const d = new Date(item['date_of_registration']);
		const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
		const mo = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
		const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
		 $("#viewprofile #membersincedate").text(`${mo} ${da}, ${ye}`);
		 retrievethismemberslastpayment(memberid);
		 verifycashassitance(newid);
		 verifylegalassistance(newid);
		 verifyHospitalization(newid);
		 verifyBurial(newid);
	

	

		if(item['level_status']=="member"){
			$(".coornameholder").css("display","flex");
			retreievedCoordinator(item['personnel_id']);
		}else{
			$(".coornameholder").css("display","none");
		}
		
		
		if(item['member_status'] == 3){
			$("#deceased").css("display", "none");
		}else{
			$("#deceased").css("display", "inline-block");
		}
		if(item['level_status']=='member'){
			$("#viewprofile .profileview #transactionhistory").css("display","inline");
			getmembertransactionhistory();
		}					
		$("#viewprofile #membername").text(item['first_name'] + " " + item['middle_name'] + " " + item['last_name']);											
	})
}
})


})
		function retrievethismemberslastpayment(profileid){
			var tag ="retrievethismemberslastpayment";
		$.ajax({
				url:"view_ajax.php",
				method:"POST",
				data:{
					profileid:profileid,
					tag:tag
				},
				success:function(response){	
					console.log(response);
					const d = new Date(response);
					const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
					const mo = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
					const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
					$("#viewprofile #lastpaymentdate").text(`${mo} ${da}, ${ye}`);
					
				}
			});
		}
	
	$('body').on('click', '#setcoordinatorbtn', function (e) {
		
		let tag="setascoor";
		var confirmalert =  Confirm('Update cooordinator', 'Are you sure you want to set this person as your coordinator ?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
                  $.ajax({ 
                   
					url: 'updates.php', 
					type: 'POST',
                    data: {memberid:memberid,
						   tag: tag 
						},
                    success: function(response){
                    
						Swal.fire('This member has been assigned as coordinator, please remind the newly assigned coordinator of his/her new password ' + "<span class='pass-span'>" + response + "<span>",)
						openTab('containers-members');
						retrieveallmember();	
                         
                	
            		}
            	});
              })
	})
	$('body').on('click', '#activate', function (e) {
		var el = this;
        var memberid = $(this).data("id");
		
		let tag="activatemember";
		var confirmalert =  Confirm('Activate Member', 'Are you sure you want to activate this member?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
                  $.ajax({ 
                   
					url: 'updates.php', 
					type: 'POST',
                    data: {memberid:memberid,
						   tag: tag 
						},
                    success: function(response){
						
                      if(response=="yes"){	
						updateburialstatus(memberid);
						Swal.fire('This member has been activated',)					 	
						openTab('containers-members');
						retrieveallmember();    
						retrieveActiveMembers();
			  			getAllDeceased();                   
                	   }else{				 
						Swal.fire('Invalid ID',)
                	  }
            		}
            	});
              })
			  
	})
	$('body').on('click', '#transactionhistory', function (e) {
		if($(".profileview").css("display","block")){
			$(".profileview").css("display","none");
			$(".transaction-history").css("display","block");
		}
	})

	$('body').on('click', '#backviewprofile', function (e) {
		if($(".transaction-history").css("display","block")){
			$(".transaction-history").css("display","none");
			$(".profileview").css("display","block");
			$(".profileview .coornameholder").css("display","flex");
		}
	})
	$('body').on('click', '#backviewmember', function (e) {
		if($("#viewcoorprofile").css("display","block")){
			$("#viewcoorprofile").css("display","none");
			$(".transaction-history").css("display","none");
			$("#viewprofile").css("display","flex");
			$(".profileview .coornameholder").css("display","flex");
		}
	})


	
	$('body').on('click', '#viewcoorprofile #backviewmember', function (e) {	
				$("#viewprofile >.profileview").css("display","block");								
				$("#viewprofile > #viewcoorprofile").css("display","none");
				$("#adminindicator").css("display","none");
	})
	$('body').on('click', '#coorname', function (e) {
				$("#viewprofile >.profileview").css("display","none");
				$("#viewprofile > .transaction-history").css("display","none");				
				$("#viewprofile > #viewcoorprofile").css("display","block");
				
				var el = this;
                var profileid = $(this).attr("data-id");
				memberid=profileid;
				let tag="vp";
				$.ajax({
				url:"view_ajax.php",
				dataType:"json",
				method:"POST",
				data:{retrieveid:profileid,
					tag:tag
				},
				success:function(response){	
					response.forEach((item,index)=>{
					
						var profid=item['uid'];
						memberid=profid;
						var img=item['img'];
						if(img === ''){
							$('#viewcoorprofile #img').attr('src', 'profileimages/camera-icon.jpg').width(150);
						}else{
							$('#viewcoorprofile #img').attr('src', 'profileimages/' + img).width(150);
						}
						if(item['level_status']=="coordinator" || item['level_status']=="super admin"){
							$('#viewcoorprofile #img').css("border","4px solid #c7dcf3");
							$("#adminindicator").css("display","flex");
							$("#adminindicator").addClass("admin-indicator");
						}else{
							$('#viewcoorprofile #img').css("border","2px solid orange");
							$("#adminindicator").css("display","none");
						}


						if(item['member_status']=='1'){
							$("#viewcoorprofile #statusindicator").removeClass();
							$("#viewcoorprofile #statusindicator").addClass('active-indicator');
							$("#viewcoorprofile #statusindicator").text('Active');
							$("#viewcoorprofile #statusindicator").css("padding","5px");
							$("#viewcoorprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='2'){
							$("#viewcoorprofile #statusindicator").removeClass();
							$("#viewcoorprofile #statusindicator").addClass('overdue-indicator');
							$("#viewcoorprofile #statusindicator").text('Overdue');
							$("#viewcoorprofile #statusindicator").css("padding","5px");
							$("#viewcoorprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='3'){
							$("#viewcoorprofile #statusindicator").removeClass();
							$("#viewcoorprofile #statusindicator").addClass('deceased-indicator');
							$("#viewcoorprofile #statusindicator").text('Deceased');
							$("#viewcoorprofile #statusindicator").css("padding","5px");
							$("#viewcoorprofile #statusindicator").css("max-height","30px");
						}else if(item['member_status']=='4'){
							$("#viewcoorprofile #statusindicator").removeClass();
							$("#viewcoorprofile #statusindicator").addClass('terminated-indicator');
							$("#viewcoorprofile #statusindicator").text('Terminated');
							$("#viewcoorprofile #statusindicator").css("padding","5px");
							$("#viewcoorprofile #statusindicator").css("max-height","30px");
						}


						$("#viewcoorprofile #userid").text(item['userid']);
						$("#viewcoorprofile #lname").val(item['last_name']);
						$("#viewcoorprofile #fname").val(item['first_name']);
						$("#viewcoorprofile #mname").val(item['middle_name']);
						$("#viewcoorprofile #suffix").val(item['suffix']);
						$("#viewcoorprofile #saddress").val(item['street']);
						$("#viewcoorprofile #birthdate").val(item['b_date']);
						$("#viewcoorprofile #age").val(item['age']);
						$("#viewcoorprofile #cs").val(item['civil_status']);
						$("#viewcoorprofile #gender").val(item['gender']);
						$("#viewcoorprofile #voter").val(item['voter']);
						$("#viewcoorprofile #phone").val(item['phone']);	
						$("#viewcoorprofile #email").val(item['email']);						
						$("#viewcoorprofile #work").val(item['occupation']);
						
						$("#viewcoorprofile #barangay2").val(item['baranggay']);
						$("#viewcoorprofile #barangay2").trigger("change");	
						zoneName = item['street_name'];
						retrieveAllFamRep(profileid);
						const d = new Date(item['date_of_registration']);
						const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
						const mo = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
						const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
						 $("#viewcoorprofile #membersincedate").text(`${mo} ${da}, ${ye}`);
						retrievethismemberslastpayment(profileid);

						if(item['level_status']=="member"){
							$(".coornameholder").css("display","flex");
							retreievedCoordinator(item['personnel_id']);
						}else{
							$(".coornameholder").css("display","none");
						}
						
						
						if(item['member_status'] == 3){
							$("#deceased").css("display", "none");
						}else{
							$("#deceased").css("display", "inline-block");
						}
						if(item['level_status']=='member'){
							$("#viewprofile .profileview #transactionhistory").css("display","inline");
							getmembertransactionhistory();
						}					
						$("#viewcoorprofile #membername").text(item['first_name'] + " " + item['middle_name'] + " " + item['last_name']);											
						
					})
            }
        })
		
	})



		function verifycashassitance(profileid){
		
			let tag ="verifycashassistance";
			$.ajax({
					url:"view_ajax.php",
				
					method:"POST",
					data:{
						memberid:profileid,
						tag:tag
					},
					success:function(response){	
						
							 $(".colone").html(response).show();
						
					}
				});
		}
		function verifylegalassistance(profileid){		
		let tag ="verifylegalassistance";
		$.ajax({
				url:"view_ajax.php",
			
				method:"POST",
				data:{
					memberid:profileid,
					tag:tag
				},
				success:function(response){		
					//  $("#coltwo").html("");
					// $("#coltwo").append(response);	
					$("#coltwo").html(response).show();				
				}
			});
	}
	function verifyHospitalization(profileid){		
		let tag ="verifyHospitalization";
		$.ajax({
				url:"view_ajax.php",
			
				method:"POST",
				data:{
					memberid:profileid,
					tag:tag
				},
				success:function(response){						
						 $(".colthree").html(response).show();					
				}
			});
	}
	function updateburialstatus(profileid){
		let tag ="updateburial";
		

		$.ajax({
				url:"view_ajax.php",
			
				method:"POST",
				data:{
					memberid:profileid,
					tag:tag
					
				},
				success:function(response){						
						 console.log("success");				
				}
			});
	}
	function verifyBurial(profileid){		
		let tag ="verifyBurial";
		$.ajax({
				url:"view_ajax.php",
			
				method:"POST",
				data:{
					memberid:profileid,
					tag:tag
				},
				success:function(response){	
					$(".colburial").html(response).show();	
						//  $(".coltwo").append(response);					
				}
			});
	}
	function retreievedCoordinator(coorId){
		var tag ="retrieveCoordinator";
		$.ajax({
				url:"view_ajax.php",
				dataType:"json",
				method:"POST",
				data:{
					coorId:coorId,
					tag:tag
				},
				success:function(response){	
					response.forEach((item,index)=>{
						$("#coorname").text(item['first_name']+" "+item['last_name'])
						$("#coorname").attr("data-id",coorId);
					})
				}
			});
	}
	function getmembertransactionhistory() {
		// if($(".profileview").css("display","block")){
		// 	$(".profileview").css("display","none");
		// 	$(".transaction-history").css("display","block");
		// }
		let newtag="retrievetransaction";
		//console.log(memberid);
	
		$.ajax({
			
				url:"view_ajax.php",
				//dataType:"json",
				method:"POST",
				data:{
					retrieveid:memberid,
					tag:newtag
				},
				success:function(response){					
					$("#transactionhistorycontainer").html(response);
				}
		});
	}
	$('body').on('click', '#deceased', function (e) {
		var selected = $(this).data("id");	
		
            let tag="updatedeceasedperson";
			var confirmalert =  Confirm('Avail Benefit', 'Avail this benefit ?', 'Yes', 'Cancel'); 
				$(".doAction").click(function (){			
                  $.ajax({ 
                   
					url: 'updates.php', 
					type: 'POST',
                    data: {tag: tag,
							memberid:memberid ,
						benefitid:selected},
                    success: function(response){
						
						if(response=="yes"){
							Swal.fire('The status of this user has been successfully updated',)
							verifyBurial(memberid);
						}else{
							Swal.fire('Failed to update user status',)
						}
						openTab('containers-members');
						retrieveallmember();
						retrieveallmemberscount();
						retrieveActiveMembers();
						getAllOverDue()
						retrieveoverdue();
						getAllDeceased();
						getAllTerminated();

						

            		}
            	});
              })

			 
	})
	
	

	$('body').on('click', '#famrep #add', function (e) {
		
		
		let famrepelement = document.querySelector('#famrep .representative');
		
		// var famrepclasslist = document.querySelectorAll('#viewprofile .profileview #update-form #famrep .representative').length;
		var famrepclasslist = $('#viewprofile #pv #famrep .representative').length;

			if(famrepclasslist < 3){
				
				if(famrepclasslist == 1){
					
					let famrepprime = famrepelement.cloneNode(true);							
					famrepprime.classList += ' added';
					famrepprime.querySelectorAll('input')[0].value='';
					famrepprime.querySelectorAll('input')[1].value='';	
					famrepprime.querySelectorAll('input')[0].id='rep-name-two';
					famrepprime.querySelectorAll('input')[1].id='rep-relation-two';		
					famrepprime.querySelectorAll('input')[0].name='repname-two';
					famrepprime.querySelectorAll('input')[1].name='reprel-two';				
					famrepelement.parentNode.appendChild(famrepprime);
					famrepprime.id='';
					$("#famrep div:nth-child(2) a").html("<svg  id='removeone' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='red' class='bi bi-dash-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'></path><path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'></path></svg>");
				}else if(famrepclasslist == 2){
					
					let famrepprime = famrepelement.cloneNode(true);							
					famrepprime.classList += ' added';
					famrepprime.querySelectorAll('input')[0].value='';
					famrepprime.querySelectorAll('input')[1].value='';	
					famrepprime.querySelectorAll('input')[0].id='rep-name-three';
					famrepprime.querySelectorAll('input')[1].id='rep-relation-three';	
					famrepprime.querySelectorAll('input')[0].name='repname-three';
					famrepprime.querySelectorAll('input')[1].name='reprel-three';								
					famrepelement.parentNode.appendChild(famrepprime);
					famrepprime.id='';
					 $("#famrep div:nth-child(3) a").html("<svg  id='removetwo' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='red' class='bi bi-dash-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'></path><path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'></path></svg>");
				
				}

				
				

			}		
	})
	$('body').on('click', '#removeone', function (e) {



		let tag="deletefamrep";
		var dataid=$("#viewprofile .profileview #update-form #famrep .representative:nth-child(2)").attr("id");
	
	
		if($("#famrep div:nth-child(2)").hasClass("added")){
			$("#famrep div:nth-child(2)").remove();
			$("#famrep div:nth-child(2) a").html("<svg  id='removeone' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='red' class='bi bi-dash-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'></path><path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'></path></svg>");
		}else{
			var confirmalert =  Confirm('Delete Family Reperesentative', 'Delete Family Representative ?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
					     $.ajax({ 						
							url: 'updates.php', 
							type: 'POST',
							data: {memberid:memberid,tag:tag,dataid:dataid },
							success: function(response){								
							if(response=="yes"){	
								$("#famrep .representative:nth-child(2)").remove();
							}
							}
            		});
				}) ;
	
		}
		
	})
	$('body').on('click', '#removetwo', function (e) {

		var dataid=$("#famrep .representative:nth-child(3)").attr("id");

		if($("#famrep div:nth-child(3)").hasClass("added")){
			$("#famrep div:nth-child(3)").remove();
		}else{
			
		console.log("no");

		let tag="deletefamrep";
		var confirmalert =  Confirm('Delete Family Reperesentative', 'Delete Family Representative ?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
					     $.ajax({ 						
							url: 'updates.php', 
							type: 'POST',
							data: {memberid:memberid,tag:tag,dataid:dataid },
							success: function(response){	
								console.log(response);							
							if(response=="yes"){	
								$("#famrep .representative:nth-child(3)").remove();
							}
							}
            		});
				}) ;

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
					$("#viewprofile .profileview #famrep").html(results);
					$( "#viewprofile input,#viewprofile select" ).each(function( index ) {
						$(this).prop("disabled",true);	
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
		$('body').on('click', '.savepassword', function (e) {
			let tag="changepassword";
			var oldpass=$("#changepasswordmodal #oldpass").val();
			var x=$("#changepasswordmodal #confirmnewpass").val();
			var y=$("#changepasswordmodal #newpass").val();
			$("#changepasswordmodal #confirmnewpass").css("border","1px solid black");
			if(x == y){
				$("#changepasswordmodal #confirmnewpass").css("border","1px solid black");
	
				
				$.ajax({
				url:"updates.php",
				method:"post",
				data:{
					usersid:memberid,
					tag:tag,
					oldpassword:oldpass,
					newpassword:x
				
				},

					success:function(response){	
						Swal.fire(response,);
						$("#changepasswordmodal").modal('hide');
						oldpass.val('');
						x.val('');
						y.val('');

					}

				})						
			}else{
				Swal.fire('Please Confirm new password',);
				$("#changepasswordmodal #confirmnewpass").css("border","1px solid red");
			}

		
		})
		$('body').on('click', '#changepasswordmodal #closemod', function (e) {
			$("#changepasswordmodal #oldpass").val("");
			$("#changepasswordmodal #newpass").val("");
			$("#changepasswordmodal #confirmnewpass").val("");
			$("#changepasswordmodal #confirmnewpass").css("border","1px solid black");
			
	
		})
		$('body').on('click', '.deletemember', function (e) {
			var el = this;
			var selectedid = $(this).data("id");				
				let tag="deletemember";
				var confirmalert =  Confirm('Delete', 'Are you sure you want to delete this member. All of the records of this member will be deleted <span style="color:red">PERMANENTLY</span> ?', 'Yes', 'Cancel'); /*change*/
				$(".doAction").click(function (){
					$.ajax({
					url:"delete_ajax.php",
					method:"post",
					data:{
						usersid:selectedid,
						tag:tag,									
					},

					success:function(response){
						
						$(el).closest('tr').css('background','tomato');
						$(el).closest('tr').fadeOut(800,function(){$(this).remove();});
						retrieveallmember();
						retrieveallmemberscount();
						retrieveActiveMembers();
						getAllOverDue()
						retrieveoverdue();
						getAllDeceased();
						getAllTerminated();
					}
				})
				})

		})


		

	});
    </script>