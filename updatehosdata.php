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
       
	   
	   $hos_name= $_POST['hos_name'];
	   $email= $_POST['email'];
	    $phone_no= $_POST['phone_no'];
	   $address= $_POST['address'];
	    $vac_type= $_POST['vac_type'];
		$opening_time = $_POST['opening_time'];
	$closing_time = $_POST['closing_time'];
	   $user_name= $_POST['user_name'];
	   $password= $_POST['password'];
	  
	   $id= $_POST['sid'];
	   
	   
	   $qry="UPDATE `hospital` SET `hos_name` = '$hos_name', `email` = '$email', `phone_no` = '$phone_no', `address` = '$address', `vac_type` = '$vac_type', `opening_time` = '$opening_time', `closing_time` = '$closing_time', `user_name` = '$user_name', `password` = '$password' WHERE `id` = '$sid'";
	   
	   
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