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
            header('Location: index-about.php');
        }else{
            echo '<script>alert("Email or Password is Wrong")</script>' ;
        }

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
<title>Login-instructor-fitness</title>
</head>

<body>

<center><header>
 	
 	
<div class="dropdown">
<div class="dropdown">
	<button class="dropbtn" style="color:#00F;"><h1 style="color:#000;">CROSS<span style="color:#0984e3;">FIT</h1></button>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


	<a href="index-about.php" style="text-decoration:none"><button class="dropbtn">HOME</button></a>
</div>

<div class="dropdown">
  <a href="aboutus-workout-club.php" style="text-decoration:none;"><button class="dropbtn">ABOUT</button></a>
</div>

<div class="dropdown">
  <a href="schedule-fitness-body.php" style="text-decoration:none;"><button class="dropbtn">SCHEDULE</button></a>
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
<span style="color:#0984e3;">CONTACT</span>
</button>

  <div class="dropdown-content">
    <a href="" style="text-decoration:none;">LOGIN</a>
<a href="signup-yoga-training.php" style="text-decoration:none;">REGISTER</a>    
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
                
                    
              
                        <input type="text" class="textbox" id="em" name="em" required placeholder="Email" />
                 
                   <br>
                 
                        <input type="password" class="textbox" id="ps" name="ps" required  style="float:left;" placeholder="Password"/>
                   
                       
                         <input type="submit" style="margin-left:0px;" value="Submit" name="but_submit" id="but_submit" /> 
               
            </form>
            <div>
            <p style="margin-left:300px; margin-top:250px; font-size:16px; float:left;"><a href="signup-yoga-training.php" style="text-decoration:none; color:#FFF;">Creat new account</a></p>
<p style="margin-left:20px; margin-top:250px; font-size:16px; float:left;"><a href="password-change.php" style="text-decoration:none; color:#FFF;">Forget password</a></p>
</div> 
            </center>
</div>

<div>

    </div>
</body>
</html>






