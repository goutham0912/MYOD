<?php
session_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"donuts");
$user=$_SESSION['user'];
echo $user;
if(isset($_POST["classic"]))
{
	 $base="classic";
	 $query="UPDATE donut1 SET glaze='$base' where username='$user'";
	 #$query="insert into donut1 (glaze) values('$base')";
	 mysqli_query($db,$query);
	 $_SESSION['base']=$base;
	 echo "<script>alert('base selected is $base');
 	window.location='test.html';</script>";
	
}
if(isset($_POST["gloss"]))
{
	 $base="gloss";
	 $query="UPDATE donut1 SET glaze='$base' where username='$user'";
	
	 mysqli_query($db,$query);
	 $_SESSION['base']=$base;
	 echo "<script>alert('base selected is $base');
 	window.location='test.html';</script>";
	
}


?>


