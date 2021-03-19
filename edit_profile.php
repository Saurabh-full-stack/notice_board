<?php 
     session_start(); 
      $con= mysqli_connect("localhost","root","saurabh");               $db = mysqli_select_db($con,"notice_board"); 
        $fname = ""; 
        $lname = ""; 
        $email = ""; 
        $password = ""; 
        $class = ""; 
        $query = "select * from Data where email = '$_SESSION[email_id]'";
         $query_run = mysqli_query($con,$query); while($row = mysqli_fetch_assoc($query_run)){ 
         $fname = $row['fname']; 
         $lname = $row['lname']; 
         $email = $row['email']; 
         $password = $row['password'];
         $class = $row['class'];
          }
          
        
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
				<title>edit profile</title>
				<link rel="stylesheet"  href="style.css">
				
				<link rel="stylesheet" href="bootstrap.min.css">
				
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
								<form action="" method="POST">
							  							<div class="form-group">
							  								<label>first name:</label>
							  							<input class="form-control" type="text" name="fname" value="<?php echo $fname;?>">
							  				</div>
							  				<div class="form-group">
							  								<label>last name :</label>
							  							<input class="form-control" type="text" name="lname" value="<?php echo $lname;?>"> </div>
							  				<div class="form-group">
							  								<label>email id :</label>
							  							<input class="form-control" type="text" name="email" value="<?php echo $email;?>" required > </div>
							  							
							  							
							  							
							  						<div class="form-group">
							  								<label>password:</label>
							 
						<input class="form-control" type="password" id="myInput" placeholder="enter password" value="<?php echo $password;?>" name="password">
<input type="checkbox" onclick="myFunction()">Show password </input>
							  							</div>
							  							
							  							
							  							
							  							
							  				<div class="form-group">
							  								<label>choose your class:</label>
							  								<select class="form-control" name="class">
							  			<option><?php echo $class;?></option>
							  												<option>8</option>
							  												<option>9</option>
							  												<option>10</option>
							  												<option>11</option>
							  												<option>12</option>
							  								</select>
							  				</div>
							  				
							  			<button class="btn btn-primary" type="submit"	 name="edit_button">update</button>
							  		<a href="dashboard.php" type="button" class="btn btn-default" >back</a>
							  					</form>
							  				
					
								</form>
			
</body>
</html>
