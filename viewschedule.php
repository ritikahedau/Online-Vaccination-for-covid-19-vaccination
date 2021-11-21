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
<title>Hospital Slot Details</title>

</head>
<body >
</body>
</html>
		
		 
		 <div class="admintitle" style= "background-color:#87CEEB; color:#4B0082; margin-left:50px; height:200px; margin-right:50px; line-height:140px";>
		 
	     <h4> <a href="hosdash.php" style="float:left; margin-left:30px;
		 color:#fff; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">about</a></h4>
		 
		 
		 <h4> <a href="hoslogout.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Schedule the appointment</h1>
		 </div>
		 
		 
		 <table align="center">
		 <form action="patschedule.php" method="post">
		 <tr>
		     <th>Enter Hospital Name</th>
			 <td><input type="text" name="hos_name" placeholder="Enter Hospital Name" required="required"></td>
			 
			 
			 
			 <td colspan="2"><input type="submit" name="submit" value="Search" ></td>
			 </tr>
			 </form>
			 </table>
			 
			 <table align="center" width="80%" border="1" style="margin-top:10px;">
			       <tr style="background-color:#000; color:#fff;">
				   <th>No</th>
				   <th>Hospital Name</th>
				   <th>Email</th>
				   <th>Contact No</th>
				   <th>Address</th>
				   <th>Vaccine Type</th>
				   <th>Opening Time</th>
				   <th>closing Time</th>
				
				   
				   </tr>
				   
				   
				   
				  
			 <?php 
			       include('hosschedule.php')
					   ?>
					   <tr align="center">
					   <td><?php echo $count; ?></td>
				   <td><?php echo $data['hos_name']; ?></td>
				   <td><?php echo $data['email']; ?></td>
				   <td><?php echo $data['phone_no']; ?></td>
				   <td><?php echo $data['address']; ?></td>
				   <td><?php echo $data['vac_type']; ?></td>
				   <td><?php echo $data['opening_time']; ?></td>
				   <td><?php echo $data['closing_time']; ?></td>
				   
				  
				   </tr>
					   
							<?php
							}
					   }
				   }
				   ?>
				   </table>
				   
				   
				  
			 
			 
				   
				   
				  
			 
			 
			 