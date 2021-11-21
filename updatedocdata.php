<?php
session_start();

         if(isset($_SESSION['user_name']))
			 if(isset($_SESSION['password']))
		 {
		 echo "";
		 }
		 else
		 {
			 header('location: ../hoslogin.php');
		 }
		 ?>
		 
		 <?php
		 include('header.php');
		
		 ?>
		 
		 
		 <?php 
include('connection.php');
       
	   
	   $name= $_POST['name'];
	   $department= $_POST['department'];
	   $address= $_POST['address'];
	   $user_name= $_POST['user_name'];
	   $password= $_POST['password'];
	  
	   $id= $_POST['sid'];
	   
	   
	   $qry="UPDATE `hospital` SET `name` = '$name', `department` = '$department', `address` = '$address', `user_name` = '$user_name', `password` = '$password' WHERE `id` = '$sid'";
	   
	   
	   $run= mysqli_query($con,$qry);
	   
	   if($run==true)
	   {
	   ?>
	   <script>
	   alert('Data Updated Successfully.');
	   window.open('updatehosform.php?sid=<?php echo $id;?>','_self');
	   </script>
	   <?php
	   }
	   ?>