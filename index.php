<?php
include "config.php";


if(isset($_POST['but_submit'])){

    //$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    //$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$email=$_POST['em'];
$pss=$_POST['ps'];

    if ($email != "" && $pss != ""){
	

        $sql_query = "select count(*) as cntWeb from membership where email='".$email."' and password='".$pss."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntWeb'];

        if($count > 0){
            $_SESSION['email'] = $email;
			
            
			echo "<script>alert('login successfully');
			window.location.href='index-about.php';</script>";
			
			
        }else{
            echo '<script>alert("Email or Password is Wrong")</script>' ;
        }

    }

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crossfit</title>
<link rel="stylesheet" href="index.css">
<!--login header-->
<script src="jquery.js"></script>
<style>
table{
	table-layout:fixed;
	border-style:solid;
	border:1px;
	border-color:#000;
	width:1000px;
	height:500px;
	background-color:transparent; 
	margin-top:-225px;}
tr{
	width:40px;
	border:5px;
	border-color:#000;
	
	}
td{
	width:50px;
	
	}
</style>

</head>
<body bgcolor="#ffffff";>
<div class="preloader">
	<div class="counter">0</div>
</div>
	<section>
    
    
<div id="container">

<div class="section">
<center><header>

<div class="dropdown">
	<button class="dropbtn" style="color:#00F;"><h1 style="color:#FFF;">CROSS<span style="color:#0984e3;">FIT</h1></button>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="dropdown">
  <a href="index.php" style=" text-decoration:none;"><button class="dropbtn"><span style=" color:#0984e3;">HOME</span></button></a>
</div>
<script type="text/javascript">
var c = 0;
function pop(){
	if(c == 0){
		document.getElementById("contain").style.display = "block";
		c = 1;
		}
		else{
			document.getElementById("contain").style.display = "none";
		c = 0;
			}
		}
</script>
<div class="dropdown">

  <a onClick="pop()" class="dropbtn" style="cursor:pointer;">ABOUT</a>
  <div id="contain" style=" background-image:linear-gradient(to bottom right,rgba(41, 128, 185,0.3),rgba(52, 152, 219,0.2)),url(weight.PNG); background-position:left;
  background-size:cover; width:500px; padding:50%; margin-top:320%; color:#fff; height: 500px;">
 <h1>Login</h1>
  <form class="log" style="background-color:transparent;" method="post" action="">
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" required placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" required  style="float:left;" placeholder="Password"/>
                   
                       
                         <input type="submit" style="margin-left:0px;" value="Submit" name="but_submit" id="but_submit" /> 
               
            </form>
   <a onClick="pop()" class="close" style="background-color:transparent; margin-top:-60px; margin-right:-10px; ">X</a>
  </div>
</div>

<script type="text/javascript">
var c = 0;
function pop(){
	if(c == 0){
		document.getElementById("contain").style.display = "block";
		c = 1;
		}
		else{
			document.getElementById("contain").style.display = "none";
		c = 0;
			}
		}
</script>

<div class="dropdown">

  <a onClick="pop()" class="dropbtn" style="cursor:pointer;">SCHEDULE</a>
  <div id="contain" style=" background-image:linear-gradient(to bottom right,rgba(41, 128, 185,0.3),rgba(52, 152, 219,0.2)),url(weight.PNG); background-position:left;
  background-size:cover; width:500px; padding:50%; margin-top:320%; color:#fff; height: 500px;">
 <h1>Login</h1>
  <form class="log" style="background-color:transparent;" method="post" action="">
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" required placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" required  style="float:left;" placeholder="Password"/>
                   
                       
                         <input type="submit" style="margin-left:0px;" value="Submit" name="but_submit" id="but_submit" /> 
               
            </form>
   <a onClick="pop()" class="close" style="background-color:transparent; margin-top:-60px; margin-right:-10px; ">X</a>
  </div>
</div>

<div class="dropdown">

  <a onClick="pop()" class="dropbtn" style="cursor:pointer;">NEWS</a>
  <div id="contain" style=" background-image:linear-gradient(to bottom right,rgba(41, 128, 185,0.3),rgba(52, 152, 219,0.2)),url(weight.PNG); background-position:left;
  background-size:cover; width:500px; padding:50%; margin-top:320%; color:#fff; height: 500px;">
 <h1>Login</h1>
  <form class="log" style="background-color:transparent;" method="post" action="">
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" required placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" required  style="float:left;" placeholder="Password"/>
                   
                       
                         <input type="submit" style="margin-left:0px;" value="Submit" name="but_submit" id="but_submit" /> 
               
            </form>
   <a onClick="pop()" class="close" style="background-color:transparent; margin-top:-60px; margin-right:-10px; ">X</a>
  </div>
</div>

<div class="dropdown">

  <a onClick="pop()" class="dropbtn" style="cursor:pointer;">PORTFOLIO</a>
  <div id="contain" style=" background-image:linear-gradient(to bottom right,rgba(41, 128, 185,0.3),rgba(52, 152, 219,0.2)),url(weight.PNG); background-position:left;
  background-size:cover; width:500px; padding:50%; margin-top:320%; color:#fff; height: 500px;">
 <h1>Login</h1>
  <form class="log" style="background-color:transparent;" method="post" action="">
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" required placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" required  style="float:left;" placeholder="Password"/>
                   
                       
                         <input type="submit" style="margin-left:0px;" value="Submit" name="but_submit" id="but_submit" /> 
               
            </form>
   <a onClick="pop()" class="close" style="background-color:transparent; margin-top:-60px; margin-right:-10px; ">X</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"> 
CONTACT
</button>

  <div class="dropdown-content">
    <a href="login-bicep-pushup.php" style="text-decoration:none;">LOGIN</a>
<a href="signup-yoga-training.php" style="text-decoration:none;">REGISTER</a>    
  </div>

</div>
</div>

</div>

</header></center>
<center><p style=" margin-top:-1100px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#FFF; font-size:30px; ">Elite personal training service</p><br>
<H1 style="font-size:150px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">MAKE IT <span style="color:#0984e3;">SHAPE</H1></center>





</div>


</div>
<center>
<div class="igbox" style="margin-top:500px;">
<img src="edgar-chaparro-sHfo3WOgGTU-unsplash.jpg" style="width:490px; height:800px; margin-left:150px; margin-top:50px;">
<div class="box">

<img src="exercising.png" style="width:65px; height:65px; margin-left:30px; float:left; margin-right:10px;"><br><br><br><br>
<br><h4 style="text-align:left; margin-right:10px; margin-left:10px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Cardio workout</h4>
<p style="margin-right:10px; margin-left:10px;text-align:left; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;  line-height:19px;">Cardio which is fitness slang for cardio vascular activity may be one of the most important types of physical activity.</p></div>

<div class="box1">
<img src="poses.png" style="margin-right:10px; margin-left:30px; float:left;width:65px; height:65px; color:#FFF;"><br><br><br><br>
<br><h4 style="text-align:left; margin-left:10px;margin-right:10px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Yoga</h4>
<p style="margin-right:10px; margin-left:10px;text-align:left; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;  line-height:19px;">Yoga is an ancient form of exercise that focuses on strength , flexibility , and breathing to boost physical and mental health.</p></div><br>

<div class="box2">
<img src="yoga.png" style=" float:left; width:65px;margin-right:10px; margin-left:30px; height:65px; color:#FFF;margin-right:10px;"><br><br><br><br>
<br><h4 style="text-align:left; margin-left:30px;margin-right:10px; margin-left:10px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Pilates</h4>
<p style="margin-right:10px; margin-left:10px;text-align:left; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; line-height:19px;">Pilates is a method of exercise that consist of low-impact flexibility and muscular strength and endurance movement.</p></div>

<div class="box3">
<img src="sports.png" style="width:60px;margin-right:10px; float:left; height:60px; margin-left:30px; color:#FFF;"><br><br><br><br>
<br><h4 style="margin-right:10px;text-align:left; margin-left:10px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Weight Lifting</h4>
<p style="margin-right:10px; margin-left:10px;text-align:left; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; line-height:19px;">Weight lifting is a common type of strength training for developing the strength and size of skeletal muscle.</p></div>

<div class="boxhp">
<h1 style=" font-size:30px; margin-left:10px; margin-right:10px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align:left; font-weight:300;">OUR PROGRAM</h1>
<p style="margin-left:10px; margin-right:10px; font-size:20px; line-height:21px;  text-align:left; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Our fitness experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.

</p></div>

</div></center>

<div class="section2">
<center>

<hr>
<h1 style="  margin-top:150px; margin-left:0px; font-size:50px; color:#FFF; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">START YOUR JOURNEY WITH OUR EXCITING OFFERS</h1>
<br>

<p style=" font-family:'Lucida Grade', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#FFF; font-size:30px; ">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></center></div>





<center>
<div class="igbox" style="width:1450px;
	height:700px;
	background-color:transparent;
	margin-bottom:0px;">
    <div class="boxhp2"><br><h1 style=" font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;font-size:30px; text-align:left; font-weight:300; margin-left:10px; margin-right:10px;">OUR PROGRAM</h1>
<p style="margin-left:0px; font-size:20px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; line-height:21px; text-align:left; margin-left:10px; margin-right:10px;">Our fitness experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.

</p>

</div>
<img src="boxers.PNG" style=" width:500px; height:355px;margin-left:0px; margin-top:10px;">
<div class="boxhp" style="width:630px;
	height:300px;
	background-color:transparent; 
	float:right;
	margin-top:10px;
	margin-right:100px;">
<h1 style="text-align:left; font-size:60px; margin-left:10px; margin-right:10px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Body Building
</h1><br><p style="text-align:left; font-size:25px; color:#999; margin-left:10px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; line-height:29px;  margin-right:10px;">Body Building, the original LES MILLS barbell class, will sculpt, tone and strengthen your entire body, fast! Focusing on low weight loads and high repetition movements, you'll burn fat, gain strength and quickly produce
 lean body muscle conditioning. All the benefits of working with weighs in one action packed, highly physical class. The world’s fastest way to get in shape. Find your Lessmills Bodypump class here.</p></div>
<center>
</div>
<div class="boxcop"><center>
<div class="picbox"><img src="boxers.PNG" style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Boxing</h2></div>
<div class="picbox"><img src="gursimrat-ganda-TT042bOytlU-unsplash.jpg" style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Weight lifting</h2></div>
<div class="picbox"><img src="bruno-nascimento-PHIgYUGQPvU-unsplash.jpg" style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Racing runing</h2></div>
<div class="picbox"><img src="jared-rice-NTyBbu66_SI-unsplash.jpg" style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Yoga</h2></div>
<div class="picbox"><img src="stretching.jpg"  style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Stretching</h2></div>
<div class="picbox"><img src="jesper-aggergaard-n8wuzsypQ1M-unsplash.jpg" style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Body building</h2></div>

</div></center>
<div class="section3"><center>
<br><br>
<br><br>
<h1 style="margin-left:0px; font-size:50px; color:#fff; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Our Trainer</h1><br>
<hr color="#fff" style="width:70px;"><hr color="#fff" style="width:70px; color:#fff; "><br><br>
<p style="text-align:center; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:17px; color:#fff;">
Our fitness experts can help you discover new training techniques.</p>

<br><br>
<table>
<?php 
$username = "username"; 
$password = "password"; 
$database = "your_database"; 
$mysqli = new mysqli("localhost", "root", "", "web"); 
$query = "SELECT * FROM schedule";


echo '<table> 
      <tr> 
	  <td> <font face="Arial">&nbsp</font> </td>
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
</div>
<center>
<div class="news"><center>
<br><br>
<h1 style="margin-left:0px; font-size:50px; color:#000 ; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Latest News</h1><br>
<hr color="#000" style="width:70px;"><hr color="#000" style="width:70px;"><br><br>
<p style="text-align:center; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:17px; color:#000;">
A range of services adapted to your needs.</p><br>
<div class="boxcop" style="background-color:transparent; height:370px;">

<div class="newsbox"><img src="victor-freitas-Pnm-9vBEQhk-unsplash.jpg" style="width:390px; height:220px;">
<br><br><img src="tool.png"  style=" width:15px; height:15px; margin-left:10px; float:left; margin-right:20px;"><p style=" color:#999; margin-left:10px; margin-right:0px;">16 Feb 2020</p><br>
<h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:18px;  margin-left:10px; margin-right:10px; line-height:20px;">The Greatist Team's Favorite Leggings With Pockets</h1>
</div>

<div class="newsbox"><img src="jesper-aggergaard-n8wuzsypQ1M-unsplash.jpg" style="width:390px; height:220px;">
<br><br><img src="tool.png"  style=" width:15px; height:15px; margin-left:10px; float:left; margin-right:20px;"><p style=" color:#999; margin-left:10px; margin-right:0px;">16 Feb 2020</p><br>
<h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:18px;  margin-left:10px; margin-right:10px; line-height:20px;">The Greatist Team's Favorite Leggings With Pockets</h1>
</div>

<div class="newsbox"><img src="gym in dubai.PNG" style="width:390px; height:220px;">
<br><br><img src="tool.png"  style=" width:15px; height:15px; margin-left:10px; float:left; margin-right:20px;"><p style=" color:#999; margin-left:10px; margin-right:0px;">16 Feb 2020</p><br>
<h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:18px;  margin-left:10px; margin-right:10px; line-height:20px;">The Greatist Team's Favorite Leggings With Pockets</h1>
</div>
</div>

<br><br>
</center>
</div>
  </center>
    <div class="section4"><center>
    <div class="boxfeed2">
    <div class="feedbox"><br><br>
<br><br>
<h1 style="margin-left:0px; font-size:50px; color:#fff; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; float:left;">Request A Call Back</h1><br>
<br><br><br><br>
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
    
    

</div>




 <script src="jquery.js"></script>
    <script type="text/javascript">
	function counter(){
		var count = setInterval(function(){
			var c= parseInt($('.counter').text());
			$('.counter').text((++c).toString());
			if (c == 100){
				clearInterval(count);
				$('.counter').addClass('hide')
				
				$('.preloader').addClass('active')
				}
		},25)
	}
	counter()
    </script>
</body>
</html>



