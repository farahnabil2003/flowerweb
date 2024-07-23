
<?php
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$mobile = $_POST["mobile"];
	$adress = $_POST["adress"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	include "config.php";

	$login = "INSERT INTO login(firstname,lastname,mobile,address,password,email) value('$firstName','$lastName','$mobile','$adress','$password','$email')"; 
	$result = mysqli_query($con,$login);

	if($result){
		echo "<h1>Successful</h1>";
		echo "<a href='profile.php'>click here to view your profile</a>";	
	}
	else {
		die("Error:".mysqli_errno($con));
	}

?>