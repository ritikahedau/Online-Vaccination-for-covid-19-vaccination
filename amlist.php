<!DOCTYPE html> 
<html> 
    <head> 
      
        <!-- CSS style to place three div side by side -->
        <style> 
            .container .box { 
                width:800px; 
                margin:70px;
height:100px;				
                display:table; 
            } 
            .container .box .box-row { 
                display:table-row; 
				
            } 
            .container .box .box-cell { 
                display:table-cell; 
                width:50%; 
				height:60px;
                padding:10px; 
            } 
            .container .box .box-cell.box1 { 
			width:50%;
			height:60px;
                background:#686868; 
                color:white; 
                text-align:justify; 
            } 
            .container .box .box-cell.box2 { 
			width:50%;
			height:60px;
                background:#707070;
color:white; 				
                text-align:justify 
            } 
            .container .box .box-cell.box3 { 
			width:50%;
			height:60px;
			color:white; 
                background:#787878; 
                text-align:justify; 
            }
        </style> 
    </head> 
      
    <body style="background-image:url('img/people.jpg')"> 
        <center>
        <h1 style = "color:green;">List of Covid-19 Vaccination center</h1> 
        <div class="container"> 
            <div class="box"> 
                <div class="box-row"> 
                    <div class="box-cell box1" > 
					<h1>District General Hospital, Amravati

</h1>
</h1>
					
					<br>
                       <p> <b>Address:</b><br>Mother Teresa Rd, Khaparde Bagicha, Maltekdi, Amravati, Maharashtra 444606</p>
                    <p> <b>Contact Number:</b><br>09765500655</p>
					<button onclick="window.location.href='index.php'" style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px">
  select
</button>
					</div> 
                      
                    <div class="box-cell box2"> 
					<h1>Hitech Multispeciality Hospital & Research Center

</h1>
                        <br>
                       <p> <b>Address:</b><br>48 - 3/4, Dastur Nagar Road, Nanda Market, Rajapeth, sabnis plot, Amravati, Maharashtra 444601</p> 
					   <p> <b>Contact Number:</b><br>07122536409</p>
					   <button onclick="window.location.href='index.php'" style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px">
  select
</button>
                    </div> 
                      
                    <div class="box-cell box3"> 
					<h1>Super Speciality Hospital Amravati
</h1>
                        <br>
                       <p> <b>Address:</b><br> Shrikrishna Peth, Amravati, Maharashtra 444601</p>
                    <p> <b>Phone Number:09923263849</b><br></p>
					<button onclick="window.location.href='index.php'" style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px">
  select
</button>
                    </div> 
                </div> 
            </div> 
        </div> 
        </center>
    </body> 
</html>    