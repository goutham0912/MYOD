<?php
session_start();
$db=mysqli_connect('localhost','root','')or die("could not connect to database");
mysqli_select_db($db,"donuts");
if(isset($_POST['submit']))
{
#$name=mysqli_real_escape_string($db,$_POST['name']);
$name=stripslashes($_POST['name']);	
$username=stripslashes($_POST['username']);
$number=$_POST['phonenumber'];
$mail= $_POST['emailid'];
$pass=$_POST['password'];
if(empty($name))
{
	echo "<script>alert(' enter a name');
	window.location='SignUpPage1.php';</script>";

}

if(empty($username))
{
	echo "<script>alert(' enter a username');
	window.location='SignUpPage1.php';</script>";

}
if(empty($number))
{
	echo "<script>alert(' enter a mobile number ');
	window.location='SignUpPage1.php';</script>";
}
if(empty($mail))
{
	echo "<script>alert(' enter a email id');
	window.location='SignUpPage1.php';</script>";

}
 if(empty($pass))
 {
 	echo "<script>alert(' enter a password ');
 	window.location='SignUpPage1.php';</script>";

 }
if(!preg_match("/^[a-zA-Z ]+$/",$name))
{
	echo "<script>alert('only letters are white spaces are allowed');
	window.location='SignUpPage1.php';</script>";
}
elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL))
{
	echo "<script>alert('invalid email format');
	window.location='SignUpPage1.php';</script>";
}
else{

 $hash_password=password_hash($pass, PASSWORD_DEFAULT);
 $s="select * from donut where user='$username'  or email='$mail'";
 $result=mysqli_query($db,$s);
 $u=mysqli_fetch_assoc($result);
 $n=mysqli_num_rows($result);
 if($n==1)
 {
 	if($u['user']===$username)
 {
 	echo "<script>alert('username already exists');
 	window.location='SignUpPage1.php';</script>";
 		}
 	else
 	{
 		
 	echo "<script>alert('This emailid already has a registered username');
 	window.location='SignUpPage1.php';</script>";	
 }
 }

else
 {
	
 $insert="insert into donut(name,user,email,number,password) values ('$name','$username','$mail','$number','$hash_password')";
 mysqli_query($db,$insert);
 $_SESSION["username"]=$username;
 echo "<script> alert('registration successful');
 window.location='LoginPage1.php';</script>";

 }
}
}
?>
