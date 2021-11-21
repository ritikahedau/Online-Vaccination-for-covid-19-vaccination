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
		 <div class="admintitle" style= "background-color:#87CEEB; color:#4B0082; margin-left:50px; height:200px; margin-right:50px; line-height:140px";>
		 <h4> <a href="logout.php" style="float:left; margin-left:30px;
		 color:#fff; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">about</a></h4>
		 
		 
		 
		 <h4> <a href="logout.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center" style="font-size:50px">Welcome to Doctor dashboard</h1>
		 </div>
		 
		 
		 <div class="dashboard">
		 <table  style="border:1; width:50%; background-color:#1DEFEF;color:#000; margin-left:50px; height:140px; margin-right:50px; font-size:25; align:center">
	      
		  <tr>
		 <td>1.</td><td><a href="viewhosdetails.php">View Details</a></td>
		 </tr>
		 
	
		 
		 <tr>
		 <td>2.</td><td><a href="reschedule.php">Reschedule Appointment</a></td>
		 </tr>
		 
		 <tr>
		 <td>3.</td><td><a href="delete.php">Delete</a></td>
		 </tr>
		 </table>
		 </body>
		 </html>