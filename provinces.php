<?php 
$page_title="Provinces";
$page_ID="province";
$page_class="page";

include('header.php');
if(!$_SESSION['userId'] > 0 ) { header("Location: login.php"); }
include('sidebar.php');
?>

<section id="main" class="home-section">
	<?php include('topbar.php'); ?>
	
	<div class="page-content">
		<h1>Provinces</h1>
		
		<div class="flex">
			<form id="form" method="post">
				<h3>Add New Province</h3>
				<input id="province" type="text" name="province" placeholder="Province Name...">
				<textarea placeholder="Description (optional)"></textarea>
				<input id="submit" type="submit" class="btn" value="Add New Province">
			</form>	
			<div class="listings">
				<div class="form-group align-right search-form">
					<input id="search_prov" type="text" name="search_prov" placeholder="Search Province...">
					<button class="btn"><i class="bx bx-search"></i></button>
				</div>
				<table class="tbl">
					<tr><th>Province</th><th>Cities / Municipality</th><th>Count</th><th>&nbsp;</th></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Misamic Occidental</td><td><div class="flex btn-link"><a href="">Cagayan de Oro</a><a href="">Davao</a><a href="">Gingoog</a><a href="">Iligan</a><a href="">El Salvador</a><a href="">Quezon</a></div><p class="small"><a href="cities.php">+ Add City</a></p></td><td><a href="">0</a></td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
				</table>
				<div class="pagination">
				  <a href="#">&laquo;</a>
				  <a class="active" href="#">1</a>
				  <a href="#">2</a>
				  <a href="#">3</a>
				  <a href="#">4</a>
				  <a href="#">5</a>
				  <a href="#">6</a>
				  <a href="#">&raquo;</a>
				</div>
			</div>
		</div>
		
	</div>

</section>
		
<?php include('footer.php'); ?>