<?php
session_start();

         if(isset($_SESSION['user_name']))
			 if(isset($_SESSION['password']))
		 {
		 echo "";
		 }
		 else
		 {
			 header('location: ../login.php');
		 }
		 ?>
		 
		 <?php
		 include('header.php');
		
		 ?>
		 
		 
		 <?php 
include('connection.php');
       
	   
	   $p_id= $_POST['p_id'];
	   $p_in= $_POST['p_in'];
	   $name= $_POST['name'];
	   $phone_no= $_POST['phone_no'];
	   $gender= $_POST['gender'];
	   $yob= $_POST['yob'];
	   $user_name= $_POST['user_name'];
	   $password= $_POST['password'];
	   $id= $_POST['sid'];
	   
	   
	   $qry="UPDATE `users` SET `p_id` = '$p_id', `p_in` = '$p_in', `name` = '$name', `phone_no` = '$phone_no', `gender` = '$gender', `yob` = '$yob', `user_name` = '$user_name', `password` = '$password' WHERE `id` = '$sid'";
	   
	   
	   $run= mysqli_query($con,$qry);
	   
	   if($run==true)
	   {
	   ?>
	   <script>
	   alert('Data Updated Successfully.');
	   window.open('updateform.php?sid=<?php echo $id;?>','_self');
	   </script>
	   <?php
	   }
	   ?>