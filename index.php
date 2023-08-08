
<?php 

//include("server.php");


$page_title="Login";
$page_ID="login";
$page_class="login";

$year = date("y");
  
include('header.php');
?>	
<div class="row">
	<div class="card logincard">
		<img src="images/da-logo.png" alt="Dakbayan Alagaran" class="logo" />
        	
		<form  method="post" id="form" >
		
			<div class="contain-data-form">
				
				<span id="errorinputs" style="color:red;"></span>
				<input id="username" type="text" name="username" value="" placeholder="Enter User ID" class="type">
				<span id="user_info" class="error-info"></span>
				<div class="password-wrap">
					<input id="password" type="password" name="password" value="" placeholder="Enter Password" class="type">
					
					<i id="showPass" class="bx bx-hide" title="Show password" onclick="myFunction()"></i>
				</div>
				<span id="password_info" class="error-info"></span>
				<!-- <input type="submit" value="Login" name="login" id="submit"> -->
				<div class="loginbtnholder">
					<div id="submit" class="login"> <div class="spinner-border text-primary"></div><p style="margin:0">Login</p> </div>
					<a href="#" class="forgot-pass" style="display:none">Forget Password?</a>
				</div>
				
			</div>
		</form>
		<nav style="display:none">
			<a href="">Help</a>
			<a href="">About</a>
			<a href="">Contact</a>
		</nav>
	</div>
</div>



<script>
$(document).ready(function() {
	
        					
    					
						
							
						

	$("#password").keyup(function(event) {
		if (event.keyCode === 13) {
					$("#submit").click();
		}
	})
	$("#username").keyup(function(event) {
		if (event.keyCode === 13) {
					$("#submit").click();
		}
	})
	$('body').on('click', '#submit', function (e) {
		 
		var $valid = 1;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        document.getElementById("username").style.outline = "none";
        document.getElementById("password").style.outline = "none";   
        var userName = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "Username is required";
            document.getElementById("username").style.outline = "1px solid red"; 
        	$valid = 0;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "Password is required";
          document.getElementById("password").style.outline = "1px solid red"; 
            $valid = 0;
        }
      

		if($valid == 1){
			$(".spinner-border").css("display","block");
			$(".loginbtnholder .login p").text("Logging in");
			
			
			$.ajax({
						type: "POST",
						url: "server.php",
						data: {
							username:userName,
							password:password
						},
						success: function(html) { 
							
							$(".spinner-border").css("display","none");
							$(".loginbtnholder .login p").text("Login");
							if(html == "success"){
								window.location.replace("adminDashboard.php");
								
							}else{
								$("#errorinputs").html(html);
								$("#errorinputs").text(html);
							}
							
						}
						});

					
		 }
    })

	
	
})
</script>
<script>
	function myFunction() {
		var x = document.getElementById("password");
		var y = document.getElementById("showPass");
		
		y.classList.toggle("bx-show");

		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	
	
</script>