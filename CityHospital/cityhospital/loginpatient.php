<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="regcss.css" />


</head>


            <?php
				
				//Login 				
				
				@include 'connection.php';
				
				if(isset($_POST['submit'])){
					
				$username=mysqli_real_escape_string($conn, $_POST['username']);
				$password=mysqli_real_escape_string($conn, $_POST['password']);
				
				$sql="SELECT * from preg Where username='$username' AND password='$password' LIMIT 1";
				$result=mysqli_query($conn,$sql);
				
				
				if(mysqli_num_rows($result)==1) {
					
					echo"Successful Login";
					 header('location:p.booking.php');
					
					}
					
					else{
						
							echo"Login Failed Try again";
						
						}
						
				}
								
				
				
?>


<body>
<div class="form-container">
 
    <form class="" action="" method="post" autocomplete="off">
    <h3>Login</h3>
      <label for="usernameemail"> </label>
      <input type="text" name="username" placeholder="Email" > 
      <label for="password"> </label>
      <input type="password" name="password" required placeholder="Password" > 
      <input type="submit" name="submit" class="form-btn"> 
      <p>already have an account?<a href="regpa.php">Register</a></p>
    </form>
    <br>
    
</div>
</body>
    
</body>
</html>