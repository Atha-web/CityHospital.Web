<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
if(isset($_POST['submit'])) {
	include("connection.php");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	
	$sql="INSERT INTO inquiry "."( name, email,  message)"."VALUES('$name','$email',,'$message')";
	
	$results = mysqli_query($conn,$sql);
	
	if(!$results) {
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{
		echo "Message sent\n";
		header('location:MEDICAL & SURGICAL SERVICES.html');
		}
	
	} else  {
		echo "Error";
		
		
}
?>
<body>
</body>
</html>