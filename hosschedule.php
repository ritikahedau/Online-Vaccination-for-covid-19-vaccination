

		 <?php

		 session_start();
		 	include("connection.php");
		 	include("functions.php");



			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				//something was posted
		    $pat_id = $_POST['pat_id'];
			$hos_name = $_POST['hos_name'];
		    $opening_time = $_POST['opening_time'];
		    $closing_time = $_POST['closing_time'];
		    $first_slot = $_POST['first_slot'];
			$sec_slot = $_POST['sec_slot'];
			$third_slot = $_POST['third_slot'];
			$fourth_slot = $_POST['fourth_slot'];
            $fifth_slot = $_POST['fifth_slot'];
				if(!empty($closing_time) && !empty($opening_time))
				{

					//save to database
					$pat_id = random_num(20);
					$query = "insert into hostimeslot (pat_id,hos_name,opening_time,closing_time,first_slot,sec_slot,third_slot,fourth_slot,fifth_slot) values ('$pat_id','$hos_name','$opening_time','$closing_time','$first_slot','$sec_slot','$third_slot','$fourth_slot','$fifth_slot')";

					mysqli_query($con, $query);

					header("Location: home.php");
					die;
				}else
				{
					echo "Please enter some valid information!";
				}
			}

		 ?>


		 <div class="admintitle" >

	     <h4> <a href="hosdash.php" style="float:left; margin-left:30px;
		 color:black; font-size:17px">Back</a></h4>

	     <h4> <a href="services.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">services</a></h4>

		 <h4> <a href="about.php" style="float:right; margin-right:30px;
		 color:black; font-size:17px">about</a></h4>


		 <h4> <a href="hoslogout.php" style="float:right; margin-right:30px;
		 color:blacl; font-size:17px">Logout</a></h4>

		 <h1 align="center">Welcome to Hospital dashboard</h1>
		 </div>


		 <!DOCTYPE html>

		 <html>
		 <head>
<meta charset="UTF-8">
   <title>time slot</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <h1  align="center"style="font-size:60px";   >Add Available Time Slot</h1>


   </style>
</head>
		 <body style="background-image:url('img/slotbgp.jpg')">

		 <form action="hosschedule.php" method="post" class="form" enctype="multipart/form-data">
  <table align="center">
  <tr>
    <td>HospitaL Name</td><td><input type="text" name="hos_name" style="font-size:25px;"></td>
   </tr>
  <tr>
    <td>Opening Time</td><td><input type="time" name="opening_time" style="font-size:25px;"></td>
   </tr>
    <tr>
    <td>Closing Time</td><td><input type="time" name="closing_time" style="font-size:25px;"></td>
   </tr>
  <tr>
    <td> First Slot </td><td><input type="time" name="first_slot" style="font-size:25px;">
         </td>
	</tr>
	<tr>
    <td> Second Slot </td><td><input type="time" name="sec_slot" style="font-size:25px;">
         </td>
	</tr>
	<tr>
    <td> Third Slot </td><td><input type="time" name="third_slot" style="font-size:25px;">
         </td>
	</tr>
	<tr>
    <td> Fourth Slot </td><td><input type="time" name="fourth_slot" style="font-size:25px;">
         </td>
	</tr>
	<tr>
    <td> Fifth Slot </td><td><input type="time" name="fifth_slot" style="font-size:25px;">
         </td>
	</tr>




   <tr>
    <td colspan="2" align="center" ><input type="submit" class="button" name="Register" value="Save"></td>
   </tr>
  </table>
  </form>
  </body>
  </html>
