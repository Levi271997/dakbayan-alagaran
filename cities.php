<?php 
$page_title="Cities";
$page_ID="city";
$page_class="page";

include('header.php');
if(!$_SESSION['userId'] > 0 ) { header("Location: login.php"); }
include('sidebar.php');
?>

<section id="main" class="home-section">
	<?php include('topbar.php'); ?>
	
	<div class="page-content">
		<h1>Cities / Municipality</h1>
		
		<div class="flex">
			<form id="form" method="post">
				<h3>Add New City / Municipality</h3>
				<input id="city" type="text" name="city" placeholder="City Name...">
				<select type="text" id="province" name="province" id="province">
					<option value="" disabled selected hidden>Select Province...</option>
					<option value="CITY">City A</option>
					<option value="CITY">City B</option>
					<option value="CITY">City C</option>
					<option value="CITY">City D</option>
					<option value="CITY">City E</option>
					<option value="CITY">City F</option>
					<option value="CITY">City G</option>
				</select>
				<span><a href="provinces.php">+ Add New Province</a></span>
				<textarea placeholder="Description (optional)"></textarea>
				<input id="submit" type="submit" class="btn" value="Add New City">
			</form>	
			<div class="listings">
				<div class="form-group align-right search-form">
					<input id="search_prov" type="text" name="search_prov" placeholder="Search City...">
					<button class="btn"><i class="bx bx-search"></i></button>
				</div>
				<table class="tbl">
					<tr><th>City / Municipality</th><th>Province</th><th>Description</th><th>&nbsp;</th></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
					<tr><td><a href="">Cagayan de Oro</a></td><td><a href=""><a href="">Misamis Oriental</a></a></td><td>Lorem Ipsum</td><td><a href="" onClick="confirmDelete()"><i class="bx bxs-trash"></i></a></td></tr>
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