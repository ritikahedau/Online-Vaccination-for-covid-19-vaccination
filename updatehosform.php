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
		 include('connection.php');
		 
		 $sid = $_GET['sid'];
		 
		 $sql="SELECT * FROM `hospital` WHERE `id`='$sid'";
		 
		 $run=mysqli_query($con,$sql);
		 $data=mysqli_fetch_assoc($run);
		 
		 ?>
		
		<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Hospital Details</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
		 <div class="admintitle" >
		 
	     <h4> <a href="viewhosdetails.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		
		 
		 <h4> <a href="hoslogout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to Hospital dashboard</h1>
		 </div>
		 
		 
		 <html>
<head>
<meta charset="UTF-8">
   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <h1 align="center" style="font-size:60px;   >ONLINE REGISTRATION FOR COVID-19</h1>
   <h2  style="font-size:40px; align="center"  >Registration Form</h2>
   <style>
   .form{
        font-size:30px;
		font-weight:600;
		color:black;
		
   }
   </style>
</head>

<body style="background-image:url('img/covid.jpg')">
<div style="margin-top:0;">
<form action="updatehosdata.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>Hospital Name</td><td><input type="text" name="hos_name" value=<?php echo $data['hos_name']; ?> style="font-size:25px;">
	

	</td>
	</tr>
   <tr>
     <td>Email</td><td><input type="text" name="email" value=<?php echo $data['email']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
     <td>Contact No</td><td><input type="text" name="phone_no" value=<?php echo $data['phone_no']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Address</td><td><input type="text" name="address" value=<?php echo $data['address']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
     <td>Vaccine Type</td><td><input type="text" name="vac_type" value=<?php echo $data['vac_type']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
     <td>Opening Time</td><td><input type="text" name="opening_time" value=<?php echo $data['opening_time']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
     <td>Closing Time</td><td><input type="text" name="closing_time" value=<?php echo $data['closing_time']; ?> style="font-size:25px;"></td>
   </tr>
	<tr>
    <td>Username</td><td><input type="text" name="user_name" value=<?php echo $data['user_name']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Password</td><td><input type="password" name="password" value=<?php echo $data['password']; ?> style="font-size:25px;"></td>
   </tr>
   
   <tr>
    <td colspan="2" align="center" >
	
	<input type="hidden" name="sid" value=<?php echo $data['id']; ?>" />
	<input type="submit" class="button" name="Register" value="Register"></td>
   </tr>
  </table>
  </form>
</div>

</body>
</html>
