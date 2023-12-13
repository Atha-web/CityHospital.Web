
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<?php
if(isset($_POST['submit'])) {
	include("connection.php");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	
	$sql="INSERT INTO feedback "."( name, email, subject, message)"."VALUES('$name','$email','$subject','$message')";
	
	$results = mysqli_query($conn,$sql);
	
	if(!$results) {
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{
		echo "Message sent\n";
		header('location:Contact us.html');
		}
	
	} else  {
		echo "Error";
		
		
}
	
	
	?>

</head>

<body>
</body>
</html>