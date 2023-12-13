<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Doctor</title>
</head>
 <?php   
 
 if (isset($_GET['del'])) {
	include 'connection.php';
	$id = $_GET['del'];
	mysqli_query($conn,"DELETE FROM doctor WHERE id=$id");
}
header('location: adminpage.php');
?>

 ?>  
<body>
</body>
</html>