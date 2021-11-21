<?php 
include('connection.php');
       
	   
	  
	   $id=$_REQUEST['sid'];
	   
	   $qry="DELETE FROM `users` WHERE `id`='$id';";
	   
	   
	   $run= mysqli_query($con,$qry);
	   
	   if($run==true)
	   {
	   ?>
	   <script>
	   alert('Data Deleted Successfully.');
	   window.open('delete.php','_self');
	   </script>
	   <?php
	   }
	   ?>