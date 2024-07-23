<!DOCTYPE html>
<html> 
  <head>
    <title> Violette </title>
	<meta charset="UF-8"> 
	<meta name="keywords" content="Violette">
	<meta name="description" content="Violette">
	<meta name=Viewport" content="width=device-Width, initial-scale:1.0"> 
	<link rel="stylesheet" href="styles/myStyle.Css">
	<script src="js/javascript.js"></script>
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
	<div id="form">
	<div align="center">
	<fieldset style="width:50%" >	
		<legend>Login</legend>
		<form onsubmit="return validation()" method="post" name="regForm" action="php.php">
		<label> FirstName* </label><br><br>
		<input  type="text" name="firstName" placeholder="Your First Name"> </label> 
		<br><br>
		<label> LastName* </label><br><br>
		<input  type="text" name="lastName"placeholder="Your Last Name"></label> 
		<br><br>
		<label> Email* </label><br><br>
		<input  type="email" name="email" placeholder="Your Email"> </label>
		<br><br>
		<label> Mobile* </label><br><br> 
		<input  type="tel" name="mobile" placeholder="Your Mobile"> </label>
	   <br><br>	
		<label> Password* </label><br><br>
		<input  type="password" name="password" placeholder="Your Password"> </label>
		<br><br>
		<label> Address* </label><br><br>
		<input  type="textarea" name="adress" placeholder="Your Address"> </label> 
		<br><br><br>
		<input type="submit" value="Submit" />
		<input type="reset" value="Remove All" onclick="clear2();" />
		</form>
	</fieldset>
	</div>
	</div>