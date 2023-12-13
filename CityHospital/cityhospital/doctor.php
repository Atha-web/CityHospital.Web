<?php

@include 'connection.php';

session_start();

//if(!isset($_SESSION['user_name'])){
   //header('location:login.form.php');
//}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Patients</title>
</head>


	<nav>
    	
        <a href="../Appointment.html"> Logout </a>
    
    </nav>

	<h2> Welcome Doctor</h2>
    
    
<br />

<section class="view">
	<div>

<h3> Patient Details</h3>
	<?php   
 $sql= "SELECT * FROM patient";

$result = mysqli_query($conn, $sql);



echo "<table border='1'>
<tr>
<th> Patient ID </th>
<th> Patient Name  </th>
<th> Age</th>
<th> Contact </th>
<th> Gender </th>
<th> Manage </th>
</tr>";
 // fetches a result row as an associative array or a numeric array, or both.
 
 while($row = mysqli_fetch_array($result) )
 {
	 echo "<tr>";
	 echo "<td>". $row['id']. "</td>";
	 echo "<td>". $row['name']. "</td>";
	 echo "<td>". $row['age']. "</td>";
	 echo "<td>". $row['contact']. "</td>";
	 echo "<td>". $row['gender']. "</td>";
	
?>

   	 
	<td> <a href="deletedoc.php?del=<?php echo $row['id']; ?> "onclick="return confirm ('Do you really need to delete?');">
Delete</a> </td>

<?php
	 
	 
	 
	 
	 echo"</tr>";
 } //end of while
 echo "</table>";
 mysqli_close($conn);

?>

</div>
</section>
<br />
<br />

<div class="comment-box">
    <h1>Search For Your Patients.</h1>
    <form  class="flex-form" id="form1" name="form1" method="post" action="">
      <label for="from">
        <i class="ion-location"></i>
      </label> Enter Doctor ID to View Appointments of Doctor </label> 
      <input type="text" name="Search" placeholder="Doctor ID" required="required"> 
      <input type="submit" name="submit" value="Search"> 
    </form>
    <br />
	
    <?php
if(isset($_POST['submit'])) {
	include('connection.php');
	
	if($_POST['Search']){
		$search=$_POST['Search'];
		
		$sql = 'SELECT * FROM patient WHERE doctor= "'.$search.'"';
		
		$result = mysqli_query($conn,$sql) or 
		die("Couldnt execute query.".mysqli_error($conn));
		
		if(mysqli_num_rows($result)>0) {
			$row=mysqli_fetch_array($result);

		
?>


<form name="form" method="post" action="">

Patient ID: <input type="text" name="name" value="<?php echo $row['id']?>"/> <br/> <br/>

Patient Namet: <input type="text" name="specialist" value="<?php echo $row['name']?>"/> <br/> <br />

Age:<input type="text" name="branch" value="<?php echo $row['age']?>"/> <br/> <br />


</form>



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



    
<body>
</body>
</html>