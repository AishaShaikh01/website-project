<?php


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Schedule-Expert-Trainer</title>
<style>
table{
	table-layout:fixed;
	
	
	width:1000px;
	height:500px;
	background-color:transparent;
	margin-top:-225px;}
tr{
	width:40px;
	border:1px;
	border-color:#000;
	border-style:solid;
	
	}
td{
	width:50px;
	border:1px;
	border-color:#000;
	border-style:solid;
	}
</style>
<link rel="stylesheet" href="schedule.css">
</head>

<body>

<div id="container">
<center><header>
 	
<div class="dropdown">
<div class="dropdown">
	<button class="dropbtn" style="color:#00F;"><h1 style="color:#000;">CROSS<span style="color:#0984e3;">FIT</h1></button>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


	<a href="index-about.php" style="text-decoration:none"><button class="dropbtn">HOME</button></a>
</div>

<div class="dropdown">
  <a href="aboutus-workout-club.php" style="text-decoration:none"><button class="dropbtn">ABOUT</button></a>
</div>

<div class="dropdown">
  <a href="schedule-fitness-body.php" style="text-decoration:none;"><button class="dropbtn"><span style="color:#0984e3;">SCHEDULE</span>	</button></a>
</div>

<div class="dropdown">
  <a href="news-gym-run.php" style="text-decoration:none;"><button class="dropbtn"> 
NEWS
</button></a>
</div>

<div class="dropdown">
  <a href="portfolio-exercise-dumbbells.php" style="text-decoration:none;"><button class="dropbtn"> 
PORTFOLIO
</button></a>
</div>

<div class="dropdown">
  <button class="dropbtn"> 
CONTACT
</button>

  <div class="dropdown-content">
    <a href="login-bicep-pushup.php" style="text-decoration:none;">LOGIN</a>
    <a href="signup.php" style="text-decoration:none;">REGISTER</a>
    
  </div>

</div>

</header></center>
<div class="section" style="margin-top:0px;">
<center>
<br><br><br><br>
<h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#FFF;">SCHEDULE</h1>
<p style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#FFF;
font-size:22px;
font-weight:600;
margin-top:0px;
"><a href="index.php" style="text-decoration:none; color:#FFF;">HOME</a>  >  SCHEDULE</p>
</center>
</div>


<div class="section3"><center>
<br><br>
<br><br>
<h1 style="margin-left:0px; font-size:50px; color:#000; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Our Trainer</h1><br>
<hr color="#000" style="width:70px;"><hr color="#fff" style="width:70px; color:#000; "><br><br>
<p style="text-align:center; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:17px; color:#000;">
Our fitness experts can help you discover new training techniques.</p>

<br><br>



<table style="table-layout:fixed;" border="0px" width="1000" height="500" bgcolor="#666666">
  <?php 
$username = "username"; 
$password = "password"; 
$database = "your_database"; 
$mysqli = new mysqli("localhost", "root", "", "web"); 
$query = "SELECT * FROM schedule";


echo '<table> 
      <tr> 
	  <td> <font face="Arial">space</font> </td>
          <td> <font face="Arial">MONDAY</font> </td> 
          <td> <font face="Arial">TUESDAY</font> </td> 
          <td> <font face="Arial">WEDNESDAY</font> </td> 
          <td> <font face="Arial">THUSRDAY</font> </td> 
          <td> <font face="Arial">FRIDAY</font> </td> 
		  <td> <font face="Arial">SATURDAY</font> </td> 
		  <td> <font face="Arial">SUNDAY</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field0 = $row["time"];
		$field1 = $row["mon"];
        $field2 = $row["tue"];
        $field3 = $row["wed"];
        $field4 = $row["thur"];
        $field5 = $row["fri"];
		$field6 = $row["sat"];
        $field7 = $row["sun"]; 

        echo '<tr>
				  <td>'.$field0.'</td>  
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td>
				  <td>'.$field6.'</td>
				  <td>'.$field7.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</table>
<br><br>




<table style="table-layout:fixed;" border="0px" width="1000" height="500" bgcolor="#666666">
  <?php 
$username = "username"; 
$password = "password"; 
$database = "your_database"; 
$mysqli = new mysqli("localhost", "root", "", "web"); 
$query = "SELECT * FROM schedule";


echo '<table> 
      <tr> 
	  <td> <font face="Arial">space</font> </td>
          <td> <font face="Arial">MONDAY</font> </td> 
          <td> <font face="Arial">TUESDAY</font> </td> 
          <td> <font face="Arial">WEDNESDAY</font> </td> 
          <td> <font face="Arial">THUSRDAY</font> </td> 
          <td> <font face="Arial">FRIDAY</font> </td> 
		  <td> <font face="Arial">SATURDAY</font> </td> 
		  <td> <font face="Arial">SUNDAY</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field0 = $row["time"];
		$field1 = $row["mon"];
        $field2 = $row["tue"];
        $field3 = $row["wed"];
        $field4 = $row["thur"];
        $field5 = $row["fri"];
		$field6 = $row["sat"];
        $field7 = $row["sun"]; 

        echo '<tr>
				  <td>'.$field0.'</td>  
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td>
				  <td>'.$field6.'</td>
				  <td>'.$field7.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</table>

<br><br>





</center></div>

<div class="section4"><center>
    <div class="boxfeed2">
    <div class="feedbox"><br><br>
<br><br>
<h1 style="margin-left:0px; font-size:50px; color:#fff; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; float:left; line-height:18px;">Request A Call Back</h1><br>
<br><br><br>
<p style="text-align:left;  font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:17px; color:#fff;">
Shape your body and burn fat with strength training. With the right equipment such as free weights or resistance machines.
</p>





<br><br></div>
    
       <form>
   
    <input type="text"  name="firstname" placeholder="Name..">

    
    <input type="text"  name="firstname" placeholder="Email..">
<br>
        <textarea  name="subject" placeholder="Subject.." style=" width:800px;"></textarea>
    <br>
    <textarea  name="message" placeholder="Message.." style="width:800px; height:220px;"></textarea>
<br>
    <input type="submit" value="Submit   >>">
  </form></center>
  <footer style=" height:100px; background-color:#000;"><center><div class="footerbox"><br><br><p style=" font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; line-height:18px; color:#999;text-align:left;">Copyright ©2020 All rights reserved | Assignment by <span style="color:#0984e3;">Khana-e-Farhang</span><br>
Privacy Policy | Terms Of Service | Career
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="facebook.png" style=" width:15px; height:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="instagram.png" style=" width:15px; height:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="twitter (1).png"style=" width:15px; height:15px;">

</p></div></center></footer>
  </div>
    </div>
</body>
</html>