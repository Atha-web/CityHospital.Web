<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patients</title>
<link rel="stylesheet" href="" />
</head>


	<nav>
    	
        <a href="p.booking.php"> Appointment </a>
    
    </nav>


<?php
$conn = mysqli_connect("localhost","root","","cityhospital");
	$sql = "SELECT * FROM doctor";
    $all_doctor = mysqli_query($conn,$sql);

if(isset($_POST['submit'])) {
	include("connection.php");
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$doctor=$_POST['doctor'];
	
	
	$sql="INSERT INTO patient "."( name, age, contact, gender,doctor )"."VALUES('$name','$age','$contact','$gender','$doctor')";
	
	$results = mysqli_query($conn,$sql);
	
	if(!$results) {
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{
		echo "Appointment Successful";
		header('location:');
		}
	
	} else  {
		echo "Error";
		
		
}
	
	
	?>

<body>

		 <div class="form-container">
	
    
   <form action="" method="post">
     <h3>Patient Details </h3>
      <p>
        <?php
		
      /*if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };*/
      ?>
      
      
     <input type="text" name="name" required placeholder="Patient name" formaction="patientdet.php">      
     <p> 
        
        
         <input type="number" name="age" required placeholder="Age">  
     <p>
	   <input type="tel" name="contact" required placeholder="Contact">
	   <label><br />
	     <br />
       Select Gender?</label>
	   <input type="radio" name="gender" value="male"> Male </p>
	   <input type="radio" name="gender" value="female"> 
	   Female</p>
        
        <p>
       <label>Select a Doctor</label>
        <select name="doctor">
            <?php
                // use a while loop to fetch data
                // from the $all_doctor variable
                // and individually display as an option
                while ($doctor = mysqli_fetch_array(
                        $all_doctor,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $doctor["id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $doctor["name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <br />

</p>
		

     <p>
        <input type="submit" name="submit" value="Confirm Appointment" class="form-btn">
     </p>
      
   </form>
   
   	
    
    
    


   
   

</div>

</body>
</html>