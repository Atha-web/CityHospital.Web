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
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$apdate=$_POST['apdate'];
	$doctorapp=$_POST['doctorapp'];
	
	
	
	
	$sql="INSERT INTO appointments "."( name, age, contact, gender, apdate, doctorapp)"."VALUES('$name','$age','$contact','$gender', '$apdate', '$doctorapp')";
	
	
	
	$results = mysqli_query($conn,$sql);
	
	if(!$results) {
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{
		echo "Message sent\n";
		header('location:');
		}
	
	} else  {
		echo "Error";
		
		
}

?>
<body>
</body>
</html>