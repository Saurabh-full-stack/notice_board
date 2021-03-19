<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head> <meta charset="utf-8">
 <title></title> 
 </head> 
 <body>
 	 <br> 
 	 <center><h3>All Notices</h3></center><br> 
 	 <?php
   $con =  mysqli_connect("localhost","root","saurabh"); 
 	  $db = mysqli_select_db($con,"notice_board"); $query = 'select * from Notice'; 
 	  $query_run = mysqli_query($con,$query); while($row = mysqli_fetch_assoc($query_run)){
 	   ?> 
 	   <div class="card"> 
 	   	<div class="card-body"> 
 	   	<h5 class="card-title">
 	   	<?php echo $row['subject'];?></h5>
 	  <b><label>Date:</label></b>
 	   	<?php echo $row['post_date']; ?>
 	   	&nbsp&nbsp
 	  <b><label>Recipient:</label></b>
 	   	<?php echo $row['to_whom']; ?>
 	   	
 	   	<p class="card-text">
 	   	<?php echo $row['message'];?>
 	   	</p> 
 	   	</div>
  </div> 
  <?php
   } 
   ?> 
   </body>
 </html>
