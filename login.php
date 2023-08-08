<?php 
$page_title="Login";
$page_ID="login";
$page_class="login";

include('header.php');

$getId;
$msg = "";
	if(isset($_POST['username'])){
		
		$uname=$_POST['username'];
		$password=$_POST['password'];
		
		/*
		$sql = "select * from authorize_user where username='".$uname."' AND password='".$password."' limit 1";
		$dt = mysqli_query($dbc,$sql);
		if(mysqli_num_rows($dt) > 0){
			while ($result=mysqli_fetch_array($dt)) {
				$getId =$result['id'];
				$_SESSION['userId']=$result['id'];
				header("Location: index.php");
		*/
			?>	
			<!--<input id="sessionId" type="hidden" value="<?php //echo $result['id'] ?>" class="type">
			<input id="myclick" type="submit" class="text" style="display: none">-->
		<?php	
		/*
		} 
		}else{
			$msg = '<label id="lblnotValid">Invalid User ID or Password!</label>';
		}	
		*/
	}
?>	

<div class="row">
	<div class="card">
		<img src="images/da-logo.png" alt="Dakbayan Alagaran" class="logo" />
		<form id="form" method="POST">
			<div class="contain-data-form">
				<?php //echo $msg; ?>
				<input id="username" type="text" name="username" value="" placeholder="Enter User ID" class="type">
				<div class="password-wrap">
					<input id="password" type="password" name="password" value="" placeholder="Enter Password" class="type">
					<i id="showPass" class="bx bx-hide" title="Show password" onclick="myFunction()"></i>
				</div>
				<!--<input type="submit" value="Login" name="submit" id="submit"></button>-->
				<a href="index.php" class="btn btn-orange" name="submit" id="submit">Login</a>
				<a href="#" class="forgot-pass">Forget Password?</a>
			</div>
		</form>
		<nav>
			<a href="">Help</a>
			<a href="">About</a>
			<a href="">Contact</a>
		</nav>
	</div>
</div>

<?php //include('footer.php'); ?>

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