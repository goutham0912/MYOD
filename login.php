<?php
session_start();
$db=mysqli_connect('localhost','root','')or die("could not connect to database");
mysqli_select_db($db,"donuts");
$n=0;
if(isset($_POST['submit']))
{
$name=stripslashes($_POST['username']);
$pass=$_POST['passwor'];
$s="select * from donut where user='$name'";

$result=mysqli_query($db,$s);
while($u=mysqli_fetch_row($result)){
	if(password_verify($pass,$u[4]))
		$n=1;
	else
	{
	 echo "<script type='text/javascript'>alert('wrong password');
	 window.location='LoginPage1.php';</script>";

	}	
}

if($n==1)
{
	#if(true)
	#{
	$quer="insert into donut1(username) values('$name')";
	mysqli_query($db,$quer);
		echo "<script type='text/javascript'>alert('Login Successful');
	 window.location='test.html';</script>";
	 $_SESSION['user']=$name;



	#}
	
}
else
{
 	echo "<script type='text/javascript'>alert('Wrong Username ');
	 window.location='LoginPage1.php';</script>";     
  }
  #mysqli_close($db);
}
?>