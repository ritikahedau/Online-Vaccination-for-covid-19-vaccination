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
		 <body style="background-image:url('img/covid.jpg')">
		 <div class="admintitle" >
		 
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		 
		 <h4> <a href="patlogout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center" style="font-size:50px">Welcome to Patient dashboard</h1>
		 </div>
		 
		 
		 <div class="dashboard">
		 <table  style="border:1; width:50%;color:#000; margin-left:50px; height:140px; margin-right:50px; font-size:25; align:center">
	      
		  <tr>
		 <td>1.</td><td><a href="viewdetails.php">View Details</a></td>
		 </tr>
		 
	
		 
		 <tr>
		 <td>2.</td><td><a href="patschedule.php">Reschedule Appointment</a></td>
		 </tr>
		 
		 <tr>
		 <td>3.</td><td><a href="delete.php">Delete</a></td>
		 </tr>
		 </table>
		 </body>
		 </html>