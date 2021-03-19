<?php
  
	  $con= mysqli_connect("localhost", "root", "saurabh") ;
	  if(!$con)
	  {
	  				 echo "not connected to server	"	;
	  				 }
	  				 
	
	  	
	  	$db= mysqli_select_db($con, "notice_board");
	  	if(!$db)
	  	{
	  					echo " not connected to database";
	  	}
	  	
	  
	  	
	  	if(isset($_POST['register'])){
	  	
	  	  		  $query = "INSERT INTO Data (fname, lname, email, password, class) VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
	  	  $query_run= mysqli_query($con, $query);

	  	  if(!$query_run) 
	  	  {
	  	  				echo mysqli_error($query);	 
	  	  				}            
	  	  				else
	  	  {
	  	  				  echo "<script>alert('successfully  registeted');</script>";
	  	  }
	  	  	  }
	  	?>
