<?php 
$page_title= "Make Payment";
$page_ID= "make-payment";
$page_class= "";
include ('userDetails.php');
include('header.php');
session_start();
//if(!$_SESSION['userId'] > 0 ) { header("Location: login.php"); }

include('topbar.php'); ?>
<!-- Modal -->
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
		<button class="btn btn-secondary" onclick="window.location='index.php';return false;">Go to Dashboard</button>
        <button type="button" class="btn btn-orange">View Member Profile</button>
      </div>
    </div>
  </div>
</div>
	<!--<section id="ads" class="topbar container-fluid">
		<div><a href="contact.php" class="info">Advertisement</a><?php //include('ads/coke.php'); ?></div>
		<div><a href="contact.php" class="info">Advertisement</a><?php //include('ads/ads-1.php'); ?></div>
	</section>-->
	<section id="main" class="container">
		<div class="sidebar card left"><?php include('sidebar-left.php'); ?></div>
		<div class="content">

			<div class="dynamic-content dashboard">
    			<div class="card left">
					
					<form action="upload.php" method="post" enctype="multipart/form-data">
			
						<div class="payment">
							<div>
								<h2>Registration Fee</h2>
								<input type="text" name="" value="&#8369; 100.00" disabled />

								<h2>Monthly Due</h2>
								<input type="text" name="" value="&#8369; 20.00" disabled />
							</div>
							<div>
			<!--                    <a href="#" class="h2">
								Advance Monthly Due 

								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-dash-circle" viewBox="0 0 16 16">
								  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
								</svg>
								</a>-->

								<div class="months">
									<a href="" class="disabled">Jan</a>
									<a href="" class="disabled">Feb</a>
									<a href="" class="disabled">Mar</a>
									<a href="" class="selected">Apr</a>
									<a href="">May</a>
									<a href="">Jun</a>
									<a href="">Jul</a>
									<a href="">Aug</a>
									<a href="">Sep</a>
									<a href="">Oct</a>
									<a href="">Nov</a>
									<a href="">Dec</a>
								</div>
							</div>
						</div>

						<div class="buttons">
							<button href="" class="btn back" onclick="window.location='add-member-2.php';return false;"><span>&larr;</span> Back</button>
							<!--<button class="btn back" onclick="window.location='add-member-2.php';return false;">Cancel</button>-->
							<a href="#" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#launchModal">Pay <span>&#8369; 120.00</span></a>
						</div>

					</form>
					
				</div>
			</div>
			
		</div>
	</section>
	
<?php include('footer.php'); ?>