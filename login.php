
<?php include 'user_login.php' ?>
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
			<!--login form starts here-->
    <section id="login-form">
      <div class="row">
        <div class=" col-md-6 m-auto block">
        				
          <center><h4 >Student login form</h4></center><br>
          
          <form action='login.php' method="post">
            <div class="form-group">
              <label>Email ID</label>
                <input class="form-control" type="text" name='email' placeholder='enter your email'>
            </div>
            <div class="form-group">
              <label>Password</label>
                <input class="form-control" type="password" name='password' placeholder='enter your password' id="myInput"><input type="checkbox" onclick="myFunction()">Show password </input>
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
            <a href="register.php">Click here to register</a><br>
             <a href="start.html" type="button" class="btn btn-default " >back</a><br>
          </div>
      </div>
    </section>
				
				
			
							  					
				
</body>
</html>
