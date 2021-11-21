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
		
		
		 <div class="admintitle" style= "background-color:#87CEEB; color:#4B0082; margin-left:50px; height:200px; margin-right:50px; line-height:140px";>
		 
	     <h4> <a href="viewhosdetails.php" style="float:left; margin-left:30px;
		 color:#fff; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">about</a></h4>
		 
		
		 
		 <h4> <a href="logout.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to Doctor dashboard</h1>
		 </div>
		 
		 
		 <html>
<head>
<meta charset="UTF-8">
   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <h1 style="font-size:60px; background-color:#2F4F4F" align="center" >ONLINE REGISTRATION FOR COVID-19</h1>
   <h2 style="font-size:40px; background-color:#20B2AA" align="center">Registration Form</h2>
   <style>
   .form{
        font-size:30px;
		font-weight:600;
		color:black;
		background-color:#AFEEEE;
   }
   </style>
</head>

<body>
<div style="margin-top:0;">
<form action="updatehosdata.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>Name</td><td><input type="text" name="name" value=<?php echo $data['name']; ?> style="font-size:25px;">
	

	</td>
	</tr>
   <tr>
     <td>Department</td><td><input type="text" name="department" value=<?php echo $data['department']; ?> style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Address</td><td><input type="text" name="address" value=<?php echo $data['address']; ?> style="font-size:25px;"></td>
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
