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

</head>
<body style="background-image:url('img/hospital.jpg')">
</body>
</html>
		
		 
		 <div class="admintitle" >
		 
	     <h4> <a href="hosdash.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>
		 
		 
		 <h4> <a href="hoslogout.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to Hospital dashboard</h1>
		 </div>
		 <br>
		 <br>
		 <br>
		 
		 
		 <table align="center">
		 <form action="viewhosdetails.php" method="post">
		 <tr>
		     <th>Enter Username</th>
			 <td><input type="text" name="user_name" placeholder="Enter Username" required="required"></td>
			 
			 <th>Enter Password</th>
			 <td><input type="password" name="password" placeholder="Enter Password" required="required"></td>
			 
			 <td colspan="2"><input type="submit" name="submit" value="Search" ></td>
			 </tr>
			 </form>
			 </table>
			 <br>
			 <br>
			 <br>
			 <br>
			 
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
				
				   <th>Edit</th>
				   </tr>
			 
			 <?php 
			       if(isset($_POST['submit']))
				   {
					   include('connection.php');
					   $user_name = $_POST['user_name'];
					   $password = $_POST['password'];
					   
					   $sql="SELECT * FROM `hospital` WHERE `user_name`='$user_name' AND `password`='$password'";
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
				   <td><?php echo $data['hos_name']; ?></td>
				   <td><?php echo $data['email']; ?></td>
				   <td><?php echo $data['phone_no']; ?></td>
				   <td><?php echo $data['address']; ?></td>
				   <td><?php echo $data['vac_type']; ?></td>
				   <td><?php echo $data['opening_time']; ?></td>
				   <td><?php echo $data['closing_time']; ?></td>
				   
				   <td><a href="updatehosform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
				   </tr>
					   
							<?php
							}
					   }
				   }
				   ?>
				   </table>
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 