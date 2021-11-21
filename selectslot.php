
		 
		 
		<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Slot Details</title>

</head>
<body style="background-image:url('img/slotbgp.jpg')";>
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
		 
		 <h1 align="center">Schedule the appointment</h1>
		 </div>
		 <br>
		 <br>
		 
		 
		 <table align="center">
		 <form action="selectslot.php" method="post">
		 <tr>
		     <th>Hospital Name</th>
			 <td><input type="text" name="hos_name" placeholder="Enter hospital Name" required="required"></td>
			 
			 </tr>
			 <br>
		 <tr>
		     <th>Enter Your slot</th>
			 <td><input type="time" name="your_slot" placeholder="Enter Your Slot" required="required"></td>
			 
			 </tr>
			 
			 <td colspan="2"><input type="submit" name="submit" value="Confirm" ></td>
			 </tr>
			 </form>
			 </table>
			 
			 
			 
			 
			 <?php

		 session_start();
		 	include("connection.php");
		 	include("functions.php");



			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				//something was posted
		    $pat_id = $_POST['pat_id'];
			 $hos_name = $_POST['hos_name'];
			
			
            $your_slot = $_POST['your_slot'];
				if(!empty($your_slot) )
				{

					//save to database
					$pat_id = random_num(20);
					$query = "insert into pattimeslot (pat_id,hos_name,your_slot) values ('$pat_id','$hos_name','$your_slot')";

					mysqli_query($con, $query);

					header("Location: home.php");
					die;
				}else
				{
					echo "Please enter some valid information!";
				}
			}

		 ?>