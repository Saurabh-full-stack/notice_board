<?php 
   session_start();
   
	  	
   if(isset($_POST['update'])){
   
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
	  	
	  	      
          				$query="update admin set name='$_POST[name]' ,email='$_POST[email]', password='$_POST[password]'
 where email='$_SESSION[email_id]' ";
          				$query_run= mysqli_query($con, $query);
          				
          				if($query_run){
          								echo "<script>alert('updated successfully');window.location.href('admin_dashboard.php')</script>";
          				}
          				else{
          								echo "<script>alert('cant updated successfully');</script>";
          				}
          }
          
          
          
          
      if(isset($_POST['create_notice'])){   
  
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
	  	  
   $query = "INSERT INTO Notice  (to_whom, post_date, subject, message) values('$_POST[to_whom]','$_POST[post_date]','$_POST[subject]','$_POST[message]')"; 
    $query_run = mysqli_query($con,$query);                                   
       if($query_run){ 
    echo "<script>alert('Notice Created...'); window.location.href = 'admin_dashboard.php'; 
    </script>"; 
    } 
    else{ 
      echo   mysqli_error($query);   
      }
    }          
          
?>



<!-- html code start here -->



<!DOCTYPE html>
<html lang="en">
<head>
				<title>user dashboard</title>
				<link rel="stylesheet"  href="../style.css">
			
				

<link rel="stylesheet" href="../bootstrap.min.css">
				<script src= "../bootstrap.min.js" charset="utf-8"></script>
				<script src="../juqery_latest.js" charset="utf-8"></script>
<script>
				$(document).ready(function(){
								$("#edit_button").click(function(){
												$("#main_content").load('admin_edit_profile.php');
								}) ;
								
								$("#create_notice_button").click(function(){ 
								$("#main_content").load('create_notice.php'); });
								
								
								$("#view_notice_button").click(function(){
												$("#main_content").load('view_all_notice.php');
								}) ;
				}) ;
				
				
</script>

</head>
   <body>
     <!--header section starts here-->
     <div class="row" id="header">
       <div class="col-md-4">
       </div>
       <div class="col-md-4">
         <h3> Online Notice Board </h3>
       </div>
       <div class="col-md-4">
       </div>
     </div>
   <br>
 
     
    
    
    <section id="container">
      <div class="row">
        <div class="col-md-3" id="left_side">
       <center><img src="levi.jpeg" class="img-rounded" width="200px" height="200px">
       <br>
    
         email:- <b><?php echo $_SESSION['email_id']; ?></b>
         username:- <b><?php echo $_SESSION['name']; ?></b>
          <br>
          <button type="button" class="btn btn-primary btn-block" id="edit_button">Edit Profile</button>
          <button type="button" class="btn btn-success btn-block" id="create_notice_button">Create Notice</button>
          
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
          
          <a href="admin_logout.php" type="button" class="btn btn-danger btn-block" >Logout</a><br>
         </center>
        </div>
        
        <div class="col-md-8" id="main_content">
          <h2>Welcome to Admin Dashboard</h2>
          <p>
          This is the admin Dashboard page. Here a
          admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.   nice dashboard</p>
        </div>
      </div>
    </section>
    
  </body>
  </html>
