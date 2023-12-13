<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:');
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor Booking</title>
<link rel="stylesheet" href="patstyle.css" />
<nav>

<a href="../Appointment.html"> Logout </a>

</head>


<body> 
<div class="comment-box">
	
    <h1> E-Channeling </h1>

	<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="Search"></label>
    <input type="text" name="Search" id="btSearch" placeholder="Search for Doctor" required="required"/>
    <label>
      <input type="submit" name="submit" id="submit" value="Search" />
    </label>
    
     <label>
      <input type="reset" name="reset" id="reset" value="Clear" />
    </label>
    </p>
    </form>
  </p>
</div>
</div>
	
    <?php
if(isset($_POST['submit'])) {
	include('connection.php');
	
	if($_POST['Search']){
		$search=$_POST['Search'];
		
		$sql = 'SELECT * FROM doctor WHERE name= "'.$search.'"';
		
		
		
		$result = mysqli_query($conn,$sql) or 
		die("Couldnt execute query.".mysqli_error($conn));
		
		if(mysqli_num_rows($result)>0) {
			$row=mysqli_fetch_array($result);


?>
	
<form name="form" method="post" action="">
Doctor: <input type="text" name="name" value="<?php echo $row['name']?>"/> <br/>

Specialist at: <input type="text" name="specialist" value="<?php echo $row['specialist']?>"/> <br/>

Branch:<input type="text" name="branch" value="<?php echo $row['branch']?>"/> <br/>

<!--Employee email:<input type="text" name="email" value="<?php echo $row ['email']?>"/>-->
</form>
<p>
<p>
  <?php
		}
		else{
			echo "No results Found";
			}
	}
}
 else {
	 header("Location:");
	 }


?>
    
<p><br />
  
  
  
<div class="">
  <?php
include ("connection.php");
$sql= "SELECT * FROM doctor";

$result = mysqli_query($conn, $sql);

echo "<table border='1' >
<tr>
<th> Doctor ID </th>
<th> Doctor Name  </th>
<th> Specialist</th>
<th> Branch</th>
<th> Time </th>
<th> Available On </th>
<th> Make Appointment </th>
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
	echo "<td>".'<a href="patientreg.php">Make Appointment</a>' . "</td>";
	 
	 
	 
	 echo"</tr>";
 } //end of while
 echo "</table>";
 mysqli_close($conn);

?>
</div>


</body>
</html>