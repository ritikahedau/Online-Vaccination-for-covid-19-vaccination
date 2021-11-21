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
		 
	     <h4> <a href="logout.php" style="float:left; margin-left:30px;
		 color:#fff; font-size:17px">Back</a></h4>
		 
	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">services</a></h4>
		 
		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">about</a></h4>
		 
		 <h4> <a href="certificate.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">Verify Certificate</a></h4>
		 
		 <h4> <a href="logout.php" style="float:right; margin-right:30px;
		 color:#fff; font-size:17px">Logout</a></h4>
		 
		 <h1 align="center">Welcome to User dashboard</h1>
		 </div>
		 
		 
		 <table align="center">
		 <form action="delete.php" method="post">
		 <tr>
		     <th>Enter Username</th>
			 <td><input type="text" name="user_name" placeholder="Enter Username" required="required"></td>
			 
			 <th>Enter Password</th>
			 <td><input type="password" name="password" placeholder="Enter Password" required="required"></td>
			 
			 <td colspan="2"><input type="submit" name="submit" value="Search" ></td>
			 </tr>
			 </form>
			 </table>
			 
			 <table align="center" width="80%" border="1" style="margin-top:10px;">
			       <tr style="background-color:#000; color:#fff;">
				   <th>No</th>
				   <th>User ID</th>
				   <th>Photo ID </th>
				   <th>Photo ID No</th>
				   <th>Name</th>
				    <th>Phone Number</th>
				   <th>Year of Birth</th>
				   <th>Delete</th>
				   </tr>
			 
			 <?php 
			       if(isset($_POST['submit']))
				   {
					   include('connection.php');
					   $user_name = $_POST['user_name'];
					   $password = $_POST['password'];
					   
					   $sql="SELECT * FROM `users` WHERE `user_name`='$user_name' AND `password`='$password'";
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
				   <td><?php echo $data['user_id']; ?></td>
				   <td><?php echo $data['p_id']; ?></td>
				   <td><?php echo $data['p_in']; ?></td>
				   <td><?php echo $data['name']; ?></td>
				   <td><?php echo $data['phone_no']; ?></td>
				   <td><?php echo $data['yob']; ?></td>
				   <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
				   </tr>
					   
							<?php
							}
					   }
				   }
				   ?>
				   </table>
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 