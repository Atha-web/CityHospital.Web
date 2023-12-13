<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<nav>

<a href="adminpage.php"> Previous </a>
</head>

<body>

<center>

	<h3>&nbsp;</h3>
	<h3>&nbsp;</h3>
	<h3>&nbsp;</h3>
	<h3>&nbsp;</h3>
	<h3>&nbsp;</h3>
	<h3> List of Doctors </h3>
<?php   
 $sql= "SELECT * FROM doctor";

$result = mysqli_query($conn, $sql);



echo "<table border='1'>
<tr>
<th> Doctor ID </th>
<th> Doctor Name  </th>
<th> Specialist</th>
<th> Branch</th>
<th> Time </th>
<th> Available On </th>
<th> Manage </th>
</tr>";
 // fetches a result row as an associative array or a numeric array, or both.
   
 while($row = mysqli_fetch_array($result) )
 {
	 echo "<tr>";
	 echo "<td>". $row['id']. "</td>";
	 echo "<td>". $row['name']. "</td>";
	 echo "<td>". $row['specialist']. "</td>";
	 echo "<td>". $row['branch']. "</td>";
	 echo "<td>". $row['time']. "</td>";
	 echo "<td>". $row['day']. "</td>";
	 
	  ?>
      
      	 
	<td> <a href="delete.php?del=<?php echo $row['id']; ?> "onclick="return confirm ('Do you really need to delete?');">
Delete</a> </td>
<?php

	 
	 echo"</tr>";
 
 } //end of while
 echo "</table>";
 mysqli_close($conn);

?>
 
</center>
<br />
	
</body>
</html>