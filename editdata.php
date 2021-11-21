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
		 <div class="admintitle" style= "background-color:#87CEEB; color:#4B0082; margin-left:50px; height:200px; margin-right:50px; line-height:140px";>
		 
	     <h4> <a href="logout.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:20px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to User dashboard</h1>
		 </div>