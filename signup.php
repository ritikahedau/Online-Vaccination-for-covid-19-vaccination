<?php
session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $p_id = $_POST['p_id'];
    $p_in = $_POST['p_in'];
    $name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	 $gender = $_POST['gender'];
    $yob = $_POST['yob'];
    $user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,p_id,p_in,name,phone_no,gender,yob,user_name,password) values ('$user_id','$p_id','$p_in','$name','$phone_no','$gender','$yob','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: patlogin.php");
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
   <h1 style="font-size:60px";  align="center" >ONLINE REGISTRATION FOR COVID-19</h1>
   <div class="admintitle" style= " color:#4B0082; margin-left:50px; height:150px; margin-right:50px; line-height:50px";>
		 <h4> <a href="home.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
   <h2 align="center" style="font-size:40px; align="center" >Registration Form</h2>
   
</head>

   <tr>
    <td>Name</td><td><input type="text" name="name" style="font-size:40px;"></td>
   </tr>
   <tr>
    <td>Phone Number</td><td><input type="number_format" name="phone_no" style="font-size:40px;"></td>
   </tr>
   <tr>
    <td>Gender</td><td>
	<input type="radio" name="gender" value="Male" style="font-size:40px;">
	<label>Male</label>
	<input type="radio" name="gender" value="Female" style="font-size:40px;">
	<label>Female</label>
	<input type="radio" name="gender" value="Others" style="font-size:40px;">
	<label>others</label >
	</td>
	</tr>
   <tr>
    <td>Year of Birth</td><td><input type="text" name="yob" style="font-size:40px;"></td>
   </tr>
	<tr>
    <td>Username</td><td><input type="text" name="user_name" style="font-size:40px;"></td>
   </tr>
   <tr>
    <td>Password</td><td><input type="password" name="password" style="font-size:40px;"></td>
   </tr>
   <tr>
    <td colspan="2" align="center" ><input type="submit" class="button" name="Register" value="Register"></td>
   </tr>
  
  </table>
  </form>
  
</div>
<div>
<p align="center"style="font-size:30px">Already a user? <a href="patlogin.php">Login</a></p></div>
</body>

</html>