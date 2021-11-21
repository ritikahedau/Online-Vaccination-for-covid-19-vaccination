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
		 include('connection.php');
		 
		 $sid = $_GET['sid'];
		 
		 $sql="SELECT * FROM `users` WHERE `id`='$sid'";
		 
		 $run=mysqli_query($con,$sql);
		 $data=mysqli_fetch_assoc($run);
		 
		 ?>
		
		
		 <div class="admintitle" >
		 
	     <h4> <a href="viewdetails.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		 
		 
		 <h4> <a href="logout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to User dashboard</h1>
		 </div>
		 
		 
		 <html>
<head>
<meta charset="UTF-8">
   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <h1 style="font-size:60px; background-color:#2F4F4F" align="center" >ONLINE REGISTRATION FOR COVID-19</h1>
   <h2 style="font-size:40px";align="center">Registration Form</h2>
   <style>
   .form{
        font-size:30px;
		font-weight:600;
		color:black;
		
   }
   </style>
</head>

<body style="background-image:url('img/covid.jpg')";>
<div style="margin-top:0;">
<form action="updatedata.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>Photo ID Proof</td><td><input type="text" name="p_id" value=<?php echo $data['p_id']; ?> style="font-size:25px;">
	

	</td>
	</tr>
   <tr>
     <td>Photo ID Number</td><td><input type="text" name="p_in" value=<?php echo $data['p_in']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Name</td><td><input type="text" name="name" value=<?php echo $data['name']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Phone Number</td><td><input type="number_format" name="phone_no" value=<?php echo $data['phone_no']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Gender</td><td>
	<input type="radio" name="gender" value=value=<?php echo $data['gender']; ?> style="font-size:25px;">
	<label>Male</label>
	<input type="radio" name="gender" value=value=<?php echo $data['gender']; ?> style="font-size:25px;">
	<label>Female</label>
	<input type="radio" name="gender" value=value=<?php echo $data['gender']; ?> style="font-size:25px;">
	<label>others</label >
	</td>
	</tr>
   <tr>
    <td>Year of Birth</td><td><input type="text" name="yob" value=<?php echo $data['yob']; ?> style="font-size:25px;"></td>
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
