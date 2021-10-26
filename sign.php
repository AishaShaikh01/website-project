<?php
$name=$_POST['fn'];
$lname=$_POST['ln'];
$height=$_POST['ht'];
$weight=$_POST['wt'];
$age=$_POST['age'];
$address=$_POST['adr'];
$mobile=$_POST['mob'];
$email=$_POST['em'];
$date=$_POST['dt'];
$pss=$_POST['ps'];

$con=mysqli_connect("localhost","root","");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"web");
$sql = "INSERT INTO membership (name, lname, height, weight, age, address, mobile, email, date, password)
VALUES ('$name', '$lname', '$height', '$weight', '$age', '$address', '$mobile', '$email', '$date', '$pss')";

if (mysqli_query($con, $sql)) {
	echo '<script>alert("Account added ")</script>' ;
    $_SESSION['email'] = $email;
            header('Location: index.php');
			
} else {
    echo "<script>alert('Error Occuring ,Please check your details again'); window.location.href='signup-yoga-training';</script>";
}
mysqli_close($con);
?> 
