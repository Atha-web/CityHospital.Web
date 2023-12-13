<?php
if(isset ($_POST['submit'])) {
	include("connection.php");
	$sql= "SELECT * FROM register";
	
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['Confirmpassword'];
	
	$sql="INSERT INTO users (Email,Mobile Number,Password) VALUES ('".$newemail."','".$tele."','".$password."','".$confirmpassword."')";
	
	$results = mysqli_query($conn, $sql);
	
	if (!$results) {

		die('Could not enter data:' .mysqli_error($conn));
		
	}
	else
	{
		echo "New record created successfully \n";
	}
}
    else{
	echo"Your form is not submitted yet please fill the form and visit again";

}
?>
