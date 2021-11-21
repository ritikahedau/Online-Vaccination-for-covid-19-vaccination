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
		 
		 <!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Hospital Details</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image:url('img/covid.jpg')";>



		 <div class="admintitle" >
		 <h4> <a href="hoslogout.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		 
		 
		 <h4> <a href="hoslogout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center" style="font-size:50px">Welcome to Hospital dashboard</h1>
		 </div>
		 
		 
		 <div class="dashboard">
		 <table  style="border:1; width:50%; color:black; margin-left:50px; height:140px; margin-right:50px; font-size:35px; align:center">
	      
		  <tr>
		 <td>1.</td><td><a href="viewhosdetails.php">View Details</a></td>
		 </tr>
		 
	
		 
		 <tr>
		 <td>2.</td><td><a href="hosschedule.php">Change Time Slot</a></td>
		 </tr>
		 
		 <tr>
		 <td>3.</td><td><a href="delete.php">Delete</a></td>
		 </tr>
		 </table>
		 </body>
		 </html>