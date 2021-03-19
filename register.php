<?php include 'code.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
				
				<title>online notice board</title>
				<link rel="stylesheet"  href="style.css">
					

<link rel="stylesheet" href="bootstrap.min.css">
				<script src= "bootstrap.min.js" charset="utf-8"></script>

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
				<div class="row" id="header">
								<div class="col-md-4"></div>
								<div class="col-md-5">
												<h3>Online Notice Board System</h3>
												
								</div>
								<div class="col-md-3"></div>
				</div>
				
				<!-- registration form -->
				
				<section id="registration-form">
								<div class="row">
							  <div class="col-md-6 m-auto block">
							  				<center><h3>Registration Form</h3></center><br>
							  			<form action="register.php" method="POST">
							  						
							  							<div class="form-group">
							  								<label>first name:</label>
							  							<input class="form-control" type="text" name="fname" placeholder="enter your first name">
							  				</div>
							  				<div class="form-group">
							  								<label>last name :</label>
							  							<input class="form-control" type="text" name="lname" placeholder="enter your last name"> </div>
							  				<div class="form-group">
							  								<label>email id :</label>
							  							<input class="form-control" type="text" name="email" placeholder="enter your email" required>
							  				</div>
							  						<div class="form-group">
							  								<label>password:</label>
							  							<input class="form-control" type="password" name="password" placeholder="enter your password" id="myInput"><input type="checkbox" onclick="myFunction()">Show password</input>
							  				</div>
							  				<div class="form-group">
							  								<label>choose your class:</label>
							  								<select class="form-control" name="class">
							  												<option>-select-</option>
							  												<option>8</option>
							  												<option>9</option>
							  												<option>10</option>
							  												<option>11</option>
							  												<option>12</option>
							  								</select>
							  				</div>
							  				
							  			<button class="btn btn-primary" type="submit"	 name="register">register</button>
							  					</form>
							  					<a href="login.php">click here to login</a>
							  					
				
							  </div>
																
												
								</div>
					
     
				
</body>
</html>

