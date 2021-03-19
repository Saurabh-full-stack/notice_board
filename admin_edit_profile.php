<?php 
     session_start(); 
      $con= mysqli_connect("localhost","root","saurabh");               $db = mysqli_select_db($con,"notice_board"); 
        $fname = ""; 
        $lname = ""; 
        $email = ""; 
        $password = ""; 
        $class = ""; 
        $query = "select * from admin where email = '$_SESSION[email_id]'";
         $query_run = mysqli_query($con,$query); while($row = mysqli_fetch_assoc($query_run)){ 
         $name = $row['name'];
         $email = $row['email']; 
         $password = $row['password'];
         
         
          }
          
        
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
				<title>edit profile of admin</title>
				<link rel="stylesheet"  href="../style.css">
				
				<link rel="stylesheet" href="../bootstrap.min.css">
				
				<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
				
</head>
<body>
				    <h3>Edit profile</h3><br>
								<form action="" method="POST">
							  							<div class="form-group">
							  								<label><b>Name:</b></label>
							  							<input class="form-control" type="text" name="name" value="<?php echo $name;?>">
							  				</div>
							  				
							  				<div class="form-group">
							  								<label>	<b>Email id :</b></label>
							  							<input class="form-control" type="text" name="email" value="<?php echo $email;?>" required > </div>
							  							
							  							
							  							
							  						<div class="form-group">
							  								<label><b>Password:</b></label>
							 
						<input class="form-control" type="password" id="myInput" placeholder="enter password" value="<?php echo $password;?>" name="password">
<input type="checkbox" onclick="myFunction()">Show password </input>
							  							</div>
							  							
							  							
							  							
							  							
							  				
							  				
							  			<button class="btn btn-primary" type="submit"	 name="update">update</button>
							  		<a href="admin_dashboard.php" type="button" class="btn btn-default" >back</a>
							  					</form>
							  				
					
								</form>
			
</body>
</html>
