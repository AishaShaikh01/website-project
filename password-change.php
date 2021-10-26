<?php
include "config.php";


if(isset($_POST['but_submit'])){

    //$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    //$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$email=$_POST['em'];
$pss=$_POST['ps'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"web");
$sql = "UPDATE membership SET password='$pss' WHERE email='$email'";

if (mysqli_query($con, $sql)) {
     $_SESSION['email'] = $email;
            header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }


?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="login2css.css">
<style>

</style>
<meta charset="utf-8">
<title>Change-Password</title>
</head>

<body>

<center><header>
 	
 	
<div class="dropdown">
<div class="dropdown">
	<button class="dropbtn" style="color:#00F;"><h1 style="color:#000;">CROSS<span style="color:#0984e3;">FIT</h1></button>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


	<a href="index.php" style="text-decoration:none"><button class="dropbtn">HOME</button></a>
</div>

<div class="dropdown">
  <a href="aboutus.php" style="text-decoration:none;"><button class="dropbtn">ABOUT</button></a>
</div>

<div class="dropdown">
  <a href="schedule.php" style="text-decoration:none;"><button class="dropbtn">SCHEDULE</button></a>
</div>

<div class="dropdown">
  <a href="news.php" style="text-decoration:none;"><button class="dropbtn"> 
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
<span style="color:#0984e3;">CONTECT</span>
</button>

  <div class="dropdown-content">
    <a href="login-bicep-pushup.php" style="text-decoration:none;">LOGIN</a>
    <a href="signup.php" style="text-decoration:none;"><span style="color:#0984e3;">REGISTER</span></a>
    
  </div>

</div>

</header></center>




<div class="signoutbox">
<center>
<div class="boxhp" style="background-color:transparent; margin-top:10px; margin-right:500px;">
<h1 style="color:#fff; font-size:40px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">LOGIN</h1>	
<p style="text-align:left;  font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:17px; color:#fff;">
Shape your body and burn fat with strength training. With the right equipment such as free weights or resistance machines.
</p>
</div></center>
<div class="signupbox" style="margin-left:370px;">
<form class="log" method="post" action="">
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" placeholder="Password"/>
                   
                       
                         <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                   
            </form></center>
</div>

<div>

    </div>
</body>
</html>






