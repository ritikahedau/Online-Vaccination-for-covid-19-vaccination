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
<title>Slot Details</title>

</head>
<body style="background-image:url('img/slotbgp.jpg')";>
</body >
</html>
		
		 
		 <div class="admintitle" >
		 
	     <h4> <a href="hosdash.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		 
		 <h4> <a href="patlogout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Schedule the appointment</h1>
		 </div>
		 <br>
		 <br>
		 <br>
		 
		 
		 
		 <table align="center">
		 <form action="viewslot.php" method="post">
		 <tr>
		     <th>Enter Hospital Name</th>
			 <td><input type="text" name="hos_name" placeholder="Enter Hospital Name" required="required"></td>
			 
			 
			 
			 <td colspan="2"><input type="submit" name="submit" value="Search" ></td>
			 </tr>
			 </form>
			 </table>
			 <br>
			 <br>
			 <br>
			 <br>
			 <br>
			 
			 <table align="center" width="80%" border="1" style="margin-top:10px;">
			       <tr style="background-color:#000; color:#fff;">
				   <th>Slots</th>
				   <td>1st slot</td>
				   <td>2nd slot</td>
				   <td>3rd slot</td>
				   <td>4th slot</td>
				   <td>5th slot</td>
				   <td>Select</td>
				   
				   
				   </tr>
				   
				   
				   
				  
			 <?php 
			       if(isset($_POST['submit']))
				   {
					   include('connection.php');
					   $hos_name = $_POST['hos_name'];
					   
					   
					   $sql="SELECT * FROM `hostimeslot` WHERE `hos_name`='$hos_name'";
					   $run=mysqli_query($con,$sql);
					   
					   if(mysqli_num_rows($run)<1)
					   {
						   echo "<tr><td col span='5'>No Records Found</td></tr>";
					   }
					   else{
						   $count=0;
						    while($data=mysqli_fetch_assoc($run))
							{
								$count++;
					   ?>
					   <tr align="center">
					   <td><?php echo $count; ?></td>
				   <td><?php echo $data['first_slot']; ?></td>
				   <td><?php echo $data['sec_slot']; ?></td>
				   <td><?php echo $data['third_slot']; ?></td>
				   <td><?php echo $data['fourth_slot']; ?></td>
				   <td><?php echo $data['fifth_slot']; ?></td>
				   <td><a href="selectslot.php">Select slot</a></td>
				   
				   </tr>
					   
							<?php
							}
					   }
				   }
				   ?>
				   </table>
				   
				   
				   
				   
				  
			 
			 
				   
				   
				  
			 
			 
			 