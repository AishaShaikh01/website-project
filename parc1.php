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
            header('Location: index.php');
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
<title>Untitled Document</title>
<link rel="stylesheet" href="index.css">
</head>

<body bgcolor="#ffffff";>

<div id="container">

<div class="section">
<center><header>

<div class="dropdown">
	<button class="dropbtn" style="color:#00F;"><h1 style="color:#FFF;">CROSS<span style="color:#0984e3;">FIT</h1></button>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="dropdown">
  <a href="index.php" style=" text-decoration:none;"><button class="dropbtn"><span style=" color:#0984e3;">HOME</span></button></a>
</div>

<div class="dropdown">
  <a href="aboutus.php" style=" text-decoration:none;"><button class="dropbtn">ABOUT</button></a>
</div>

<div class="dropdown">
  <a href="schedule.php" style=" text-decoration:none;"><button class="dropbtn"> 
SCHEDULE
</button></a>
</div>

<div class="dropdown">
  <a href="news.php" style="text-decoration:none;"><button class="dropbtn"> 
NEWS
</button></a>
</div>

<div class="dropdown">
  <a href="portfolio.php" style="text-decoration:none;"><button class="dropbtn"> 
PORTFOLIO
</button></a>
</div>

<div class="dropdown">
  <button class="dropbtn"> 
CONTECT
</button>

  <div class="dropdown-content">
    <a href="login.php" style="text-decoration:none;">LOGIN</a>
    <a href="signup.php" style="text-decoration:none;">REGISTER</a>
    
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
<div class="picbox"><img src="juan-pablo-rodriguez-X6jtULYJQz8-unsplash.jpg"  style="width:120px; height:120px;"><h2 style="text-align:left; font-size:15px; color:#999; margin-left:0px; margin-right:0px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Straching</h2></div>
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
<table style="table-layout:fixed;" border="0px" width="1000" height="500" bgcolor="#666666">
  <tr style="width:40px;">
    <td>&nbsp;</td>
    <td>&nbsp;MONDAY</td>
    <td>&nbsp;TUESDAY</td>
    <td>&nbsp;WEDNESDAY</td>
    <td>&nbsp;THURSDAY</td>
    <td>&nbsp;FRIDAY</td>
    <td>&nbsp;SATURDAY</td>
    <td>&nbsp;SUNDAY</td>
  </tr>
  <tr>
    <td>&nbsp;<span style="font-size:15px;">10.00</span></td>
    <td>&nbsp;<span style="color:#e17055; font-size:17px;">GYM</span><br>
10.00 - 11.00<br>
<span style="color:#999; font-weight:100;">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#fdcb6e; font-size:17px;">YOGA</span><br>
10.00 - 12.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#ef5777; font-size:17px;">BODY</span><br>
10.00 - 12.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#575fcf; font-size:17px;">CARDIO</span><br>
10.00 - 11.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
  </tr>
  <tr>
    <td>&nbsp;<span style="font-size:15px;">14.00</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#00d8d6; font-size:17px;">RUNNING</span><br>
14.00 - 15.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#0984e3; font-size:17px;">BOX</span><br>
14.00 - 16.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#e17055; font-size:17px;">GYM</span><br>
14.00 - 15.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<span style="font-size:15px;">16.00</span></td>
    <td>&nbsp;<span style="color:#575fcf; font-size:17px;">CARDIO</span><br>
16.00 - 18.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#e17055; font-size:17px;">GYM</span><br>
16.00 - 19.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#fdcb6e; font-size:17px;">YOGA</span><br>
16.00 - 18.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#e17055; font-size:17px;">GYM</span><br>
16.00 - 20.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
  </tr>
  <tr>
    <td>&nbsp;<span style="font-size:15px;">18.00</span></td>
    <td>&nbsp;<span style="color:#0984e3; font-size:17px;">BOX</span><br>
18.00 - 22.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;<span style="color:#ef5777; font-size:17px;">BODY</span><br>
18.00 - 21.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#575fcf; font-size:17px;">CARDIO</span><br>
18.00 - 20.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#00d8d6; font-size:17px;">RUNNING</span><br>
18.00 - 22.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="83">&nbsp;<span style="font-size:15px;">20.00</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#fdcb6e; font-size:17px;">YOGA</span><br>
20.00 - 20.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#575fcf; font-size:17px;">CARDIO</span><br>
20.00 - 21.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;<span style="color:#0984e3; font-size:17px;">CROSSFIT</span><br>
20.00 - 22.00<br>
<span style="color:#999; font-weight:100">John Smith</span></td>
  </tr>
</table></div>
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




</body>
</html>



