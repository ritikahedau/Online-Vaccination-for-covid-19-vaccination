<?php
session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
    $name = $_POST['name'];
    $department = $_POST['department'];
    $address = $_POST['address'];
	 $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into `hospital` (name,department,address,user_name,password) values ('$name','$department','$address','$user_name','$password')";

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
   
   <div class="admintitle" style= "background-color:#87CEEB; color:#4B0082; margin-left:50px; height:200px; margin-right:50px; line-height:140px";>
		 <h4> <a href="home.php" style="float:left; margin-left:30px;
		 color:#fff; font-size:17px">Back</a></h4>
		 
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
<form action="hosreg.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>Name</td><td><input type="text" name="name" style="font-size:25px;">
	

	</td>
	</tr>
   <tr>
     <td>Department</td><td><input type="text" name="department" required style="font-size:25px;"></td>
   </tr>
   <tr>
    <td>Address</td><td><input type="text" name="address" style="font-size:25px;"></td>
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
<p align="center" style="text-size:50px">Already a user? <a href="hoslogin.php">Login</a></p></div>
</body>

</html>
