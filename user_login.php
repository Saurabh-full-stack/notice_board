 	<?php
	  	    session_start();$con=mysqli_connect("localhost","root","saurabh");
	  	    if(!$con)
	  {
	  				 echo "not connected to server	"	;
	  				 }
	  				  $db=mysqli_select_db($con,"notice_board");
	  				  if(!$db)
	  {
	  				 echo "not connected to database	"	;
	  				 }
	  	     if(isset($_POST['login'])){
	  	     
	  	    
	  	     
	      $query="select * from Data where email='$_POST[email]' AND password='$_POST[password]'";$query_run=mysqli_query($con,$query);
	      
	      
	      
	      if(mysqli_num_rows($query_run)){
	      $_SESSION['email_id'] = $_POST['email'];
	      
	             while($row=mysqli_fetch_assoc($query_run)){ 
	             $_SESSION['name'] = $row['fname'];
	             $_SESSION['class'] = $row['class'];
	         echo "<script> window.location.href='dashboard.php';
	         </script>";
	         }
	      }
	         else{ 
	         echo "<script>alert('please enter valid email id and password'); </script>";
	         }
	     }
?>
