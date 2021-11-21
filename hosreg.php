<?php
session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
    $hos_name = $_POST['hos_name'];
    $email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
	$vac_type = $_POST['vac_type'];
	$opening_time = $_POST['opening_time'];
	$closing_time = $_POST['closing_time'];
	
	 $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into `hospital` (hos_name,email,phone_no,address,vac_type,opening_time,closing_time,user_name,password) values ('$hos_name','$email','$phone_no','$address','$vac_type','$opening_time','$closing_time','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: hoslogin.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <h1 style="font-size:60px; background-color:#2F4F4F" align="center" >ONLINE REGISTRATION FOR COVID-19</h1>
   <body style="background-image:url('img/covid.jpg')">
   <div class="admintitle" >
		 <h4> <a href="home.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
   <h2 align="center" style="font-size:40px>Registration Form</h2>
   <style>
   .form{
        font-size:30px;
		font-weight:600;
		color:black;
		
   }
   </style>
</head>

<form action="hosreg.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>Hospital Name</td><td><input type="text" name="hos_name" style="font-size:25px;">
	

	</td>
	</tr>
   <tr>
     <td>Email</td><td><input type="text" name="email" required style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Contact No</td><td><input type="text" name="phone_no" style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Address</td><td><input type="text" name="address" style="font-size:25px;"></td>
   </tr>
    <tr>
    <td>Vaccine Type</td><td><input type="text" name="vac_type" style="font-size:25px;"></td>
   </tr>
   
    <tr>
    <td>Opening Time</td><td><input type="time" name="opening_time" style="font-size:25px;"></td>
   </tr>
    <tr>
    <td>Closing Time</td><td><input type="time" name="closing_time" style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Username</td><td><input type="text" name="user_name" style="font-size:25px;"></td>
   </tr
   <tr>
    <td>Password</td><td><input type="password" name="password" style="font-size:25px;"></td>
   </tr>
   <tr>
    <td colspan="2" align="center" ><input type="submit" class="button" name="Register" value="Register"></td>
   </tr>
  </table>
  </form>
</div>
<p align="center" style="font-size:50px">Already a user? <a href="hoslogin.php">Login</a></p></div>
</body>

</html>
