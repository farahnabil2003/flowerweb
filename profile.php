<!DOCTYPE html>
<html>
  
  <head>
    <title> Violette </title>
	<meta charset="UF-8"> 
	<meta name="keywords" content="Violette">
	<meta name="description" content="Violette">
	<meta name=Viewport" content="width=device-Width, initial-scale:1.0"> 
	<link rel="stylesheet" href="styles/myStyle.Css">
  </head>

 <body>	
	<div id="Menu"> 
    <ul>
	<li style="font-family:cursive;font-size:200%">Violette</li>
	<li><a href="Home.php">Home</a><li>
	<li><a href="Categories.php">Categories</a><li>
	<li><a href="Occasions.php">Occasions</a><li>
	<li><a href="Special.php">Special Gifts</a><li>
	<li><a href="About.php">About Us</a><li>
	<li><a href="Contact.php">Contact Us</a><li>  
	</div>
	
	<h1>View Profiles </h1>
	<table border="1">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Mobile</td>
			<td>Address</td>
			<td>Password</td>
			<td>Email</td>
		</tr>
	
<?php
	
	include "config.php";
	
	$viewprofile = "SELECT * FROM login";
	$result = mysqli_query($con,$viewprofile);
	
	if(!$result){
		die("Error:".mysqli_errno($con));
	}
	while($row = mysqli_fetch_array($result)){
		echo "
			<tr>
				<td>".$row["firstname"]."</td>
				<td>".$row["lastname"]."</td>
				<td>".$row["mobile"]."</td>
				<td>".$row["address"]."</td>
				<td>".$row["password"]."</td>
				<td>".$row["email"]."</td>
			</tr>
		";
		
	}

?>
	
</body>