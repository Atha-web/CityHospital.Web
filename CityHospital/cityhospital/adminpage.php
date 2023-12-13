
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
<link rel="stylesheet" href="patstyle.css" />
<title>Admin</title>
<header>
 <nav>
      
      <form id="form2" name="form2" method="post" action="">
        <p><a href="adminadddoc.html">Add Doctor+</a></p>
        <p><a href="Adminmanagedoc.php">Delete Doctor+</a></p>
        <a class="hero-btn" href="logout.php" title="Log Out">Log Out</a>
        <a href="../Appointment.html"> Go to Main page</a>
      </form>
      
        
          </nav>
</header>
</head>
	
    
    
  
    




<?php

@include 'connection.php';



?>

  
   
  

  <div class="comment-box">
    <h2>Hello Admin!.</h2>
    <form  class="flex-form" id="form1" name="form1" method="post" action="">
      <label for="from">
        <i class="ion-location"></i>
      </label>
      <input type="text" name="Search" placeholder="Search for Doctor" required="required">
      <input type="submit" name="submit" value="Search">
    </form>
    
      
    </div>

</div>


<!---search php-->
	
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

<!---add doc form-->

 
      
      

	
<form name="form" method="post" action="">
Doctor: <input type="text" name="name" value="<?php echo $row['name']?>"/> <br/> <br/>

Specialist at: <input type="text" name="specialist" value="<?php echo $row['specialist']?>"/> <br/> <br />

Branch:<input type="text" name="branch" value="<?php echo $row['branch']?>"/> <br/> <br />

Time:<input type="time" name="time" value="<?php echo $row ['time']?>"/> <br /> <br />

Available On:<input type="text" name="day" value="<?php echo $row['day']?>"/> <br /> <br />


</form>

</div>
  </div>
 
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


  

 




 
	
</body>
</html>