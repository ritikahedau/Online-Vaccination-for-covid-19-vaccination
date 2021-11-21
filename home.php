<?php
session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    
    
		$review = $_POST['review'];

		if(!empty($review) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into review (user_id,review) values ('$user_id','$review')";

			mysqli_query($con, $query);

			header("Location: home.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>

<title>CoWIN(Online Registration for COVID-19 vaccination)</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
<div class="container">
<div id="branding">
<h1><span class="highlight">Co</span> WIN</h1>
winning over COVID-19
</div>
<nav>
<ul>
<li class="current"><a href="home.php">Home</a></li>
<li><a href="index.php"> Patient</a></li
<li><a href="hosreg.php">Hospital </a></li>

<li><a href="services.php">Services</a></li>
<li><a href="about.php">About</a></li>

</ul>
</nav>
</div>
</header>


<h1>If you are ready for Covid-19 vaccination,Vote Here.</h1>
<button onclick="window.location.href='vote.php'" style="background-color: #808080; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px">
  vote here..
</button>


</div>








</section>
<section id="showcase">
<div class="container">
<img src="./img/nurse.JPG"  style="width:300px">
<img src="./img/vaccine.JPG" style="width:300px">
<img src="./img/modi.JPG"  style="width:300px">

<h1>Largest Vaccine Drive</h1>
</div>
</section>


<section id="newsletter">
<h1>What is CoWIN?</h1>
<br><br><br><p>Co-WIN is a platform for the citizens of India to Register for COVID-19 vaccination and schedule their vaccination slots at the nearest vaccination centers.</p>
<div class="vaccineimg">
<img src="./img/vaccineimg.JPG" style=width:300px>

</div>




<div>
  <form action="home.php" method="post" class="form" enctype="multipart/form-data">
  <table align="right" style="font-size:30px; font-color:black; line-height:10pt">
  <tr>
    <td>Review After Covid-19 Vaccination</td><td><input type="text" name="review" style="font-size:60px;">
</td>
	</tr>
  
  <tr>
    <td colspan="2" align="center" ><input type="submit" class="button" name="Save" value="save" style="font-size:35px"></td>
   </tr>
  
  </table>
		</form>
  </div>
  
  












  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</section>
<section id="boxes" style="background-color:#B0E0E6">
<div class="container">
<div class="box">







<html>
<head>
<title>Select City for Covid-19 vaccination</title>
<script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "Ramtek":
window.location="ramlist.php";
break;

case "Nagpur":
window.location="naglist.php";
break;

case "Amaravati":
window.location="amlist.php";
break;
case "Gondia":
window.location="gonlist.php";
break;



/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
////////////////// 
</script>
</head>
<body>

<SELECT id="s1" NAME="section" onChange="SelectRedirect();" style="font-size: 35px;background-color: #062a78; color: white;padding: 10px";>
<Option value="">Select City</option>
<Option value="Ramtek">RAMTEK</option>
<Option value="Nagpur">NAGPUR</option>
<Option value="Amaravati">AMARAVATI</option>
<Option value="Gondia">GONDIA</option>

</SELECT>

</body>
</html>
<br>
<br>

<html>
<head>
<title>Select City for Covid-19 vaccination</title>
<script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "Ramtek":
window.location="ramlist.php";
break;

case "Nagpur":
window.location="naglist.php";
break;

case "Amaravati":
window.location="amlist.php";
break;
case "Gondia":
window.location="gonlist.php";
break;



/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
////////////////// 
</script>
</head>
<body>

<SELECT id="s1" NAME="section" onChange="SelectRedirect();" style="font-size: 35px;background-color: #062a78; color: white;padding: 10px";>
<Option value="">Select Pincode</option>
<Option value="Ramtel">441106</option>
<Option value="Nagpur">440001</option>
<Option value="Amaravati">444601</option>
<Option value="Gondia">441614</option>

</SELECT>

</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>

<h3>FIND YOUR NEAREST VACCINATION CENTER</h3>
<iframe width="488" height="336" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=488&amp;height=336&amp;hl=en&amp;q=World%20world+(miniproject)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
 </iframe> <a href='https://www.symptoma.com/en/info/covid-19'>Coronavirus Types</a>
 <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=ec36734e7405628b979a90010e1d2ac7e00a9b4b'></script> 
  
  
 
					
					
					
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}


</script>
</section>
<section id="sap">
<div class="container">
		<h1>
						Symptoms and Prevention of Covid-19
					</h1>

					<ul style="width: 300px; height : 300px; overflow: auto; float: left;>
			            ~<li><a href="https://www.healthline.com/health/coronavirus-shortness-of-breath" target="_blank">Shortness of breath</a></li>
						~<li><a href="https://www.healthline.com/health/how-long-does-a-cough-last" target="_blank">Cough</a></li>
						~<li><a href="https://www.healthline.com/health/fever" target="_blank">Fever</a></li>
						~<li><a href="https://www.healthline.com/health/fatigue" target="_blank">Fatigue</a></li>
						~<li><a href="https://www.healthline.com/health/sore-throat-coronavirus" target="_blank">Sore throat</a></li>
						~<li><a href="https://www.healthline.com/health/is-headache-a-sign-of-coronavirus" target="_blank">Headache</a></li>
						~<li><a href="https://www.healthline.com/health/muscle-aches" target="_blank">Muscles-ache and pain</a></li>
						~<li><a href="https://www.healthline.com/health/coronavirus-loss-of-taste-loss-of-smell" target="_blank">Loss of taste or smell</a></li>
						~<li><a href="https://www.healthline.com/health/coronavirus-diarrhea" target="_blank">Gastrointestinal Symptoms</a></li><p>such as diarrhea, nausea, and vomiting</p>
						~<p>discoloration of fingers or</p><li><a href="https://www.healthline.com/health/covid-toe-rash" target="_blank">Toes</a></li>
						~<li><a href="https://www.healthline.com/health/coronavirus-pink-eye" target="_blank">Pink eye</a></li>
						~<p>Rash</p>
						
						
						</ul>
					
						<table style="width:50%; float:right; border: solid black;  padding: 10px;  text-align: left;  border-spacing: 4px;">
  <tr>
  
    <th>Prevention</th>
    
  </tr>
  <tr>
    <td>1.</td>
    <td>Wash your hands well and often. Use hand sanitizer when you’re not near soap and water.</td>
    
  </tr>
  <tr>
    <td>2.</td>
    <td>Try not to touch your face.</td>
   
  </tr>
  
  </tr>
  <tr>
    <td>3.</td>
    <td>Wear a face mask when you go out.</td>
   
  </tr>
  
  </tr>
  <tr>
    <td>4.</td>
    <td>Follow your community guidelines for staying home.</td>
   
  </tr>
  
  </tr>
  <tr>
    <td>5.</td>
    <td>When you do go out in public, leave at least 6 feet of space between you and others.</td>
   
  </tr>
  
  </tr>
  <tr>
    <td>6.</td>
    <td>Don’t leave your house if you don’t feel well.</td>
   
  </tr>
  
  </tr>
  <tr>
    <td>7.</td>
    <td>Cover your mouth with your elbow when you cough or sneeze, or use a tissue.</td>
   
  </tr>
</table>

						
					
					
						</div>
</section>

<section id="boxes" style="background-color:#ccffff">
<div class="container">
<div class="box">
<img src="./img/reg.JPG">
<h3>REGISTER YOURSELF</h3>
<p>Register using your Mobile no. or Aadhaar no. or any other Identity docs.</p>
</div>
<div class="box">
<img src="./img/hos.JPG">
<h3>CHOOSE VACCINE LOCATION</h3>
<p>Select your nearby Vaccine Center for vaccination</p>
</div>
<div class="box">
<img src="./img/slot.JPG">
<h3>CONFIRM YOUR SLOT</h3>
<p>Book your slot to Get Vaccine</p>
</div>
<div class="box">
<img src="./img/que.JPG">
<h3>ANY QUESTION?</h3>
<p>Please follow our
Frequently asked questions (FAQ)</p>
</div>
</div>
</section>

<footer>
<p>WELCOME TO CoWIN , copyright &copy;2020</p>
</footer>




</body>
</html>