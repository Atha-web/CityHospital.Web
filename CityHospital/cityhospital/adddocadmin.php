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
	$specialist=$_POST['specialist'];
	$branch=$_POST['branch'];
	$time=$_POST['time'];
	$day=$_POST['day'];
	
	$sql="INSERT INTO doctor "."( name, specialist, branch, time, day)"."VALUES('$name','$specialist','$branch','$time','$day')";
	
	$results = mysqli_query($conn,$sql);
	
	if(!$results) {
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{
		echo '<script type="text/javascript"> alert("Doctor Added Successfuly") </script>';
		header('location:adminpage.php');
		}
	
	} else  {
		echo "Error";
		
		
}
	
	
	?>
<body>
</body>
</html>