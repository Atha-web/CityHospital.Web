<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="regcss.css" />
<title>Untitled Document</title>
</head>
<?php

@include 'connection.php';

if(isset($_POST['submit'])){
	
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
	
	
	$insert="INSERT INTO preg(name,username,password) VALUES ('$name','$username','$password')";
	
	
	$result=mysqli_query($conn,$insert);
	
	if($result){
		
		echo"Account Created";
		
		}else {
			
			echo "Registration failed please try again";
			
			}
   

}
?>
<body>

	
    <div class="form-container">

   <form action="" method="post">
      <h3>	register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Name">
      <input type="username" name="username" required placeholder="Email">
      <input type="password" name="password" required placeholder="Password">
      <input type="password" name="cpassword" required placeholder="Confirm password">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="loginpatient.php">login now</a></p>
   </form>
	</div>

</body>
</html>