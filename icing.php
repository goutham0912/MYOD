<?php

session_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"donuts");
$user=$_SESSION['user'];
if(isset($_POST["blueberry"]))
{
	 $icing="blueberry";
	 $base=$_SESSION['base'];
	 echo $icing; 		
 	 $query="UPDATE donut1 SET icing='$icing' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["icing"]=$icing;
	 echo "<script>alert('icing selected is $icing');
 	window.location='sprinkles.html';</script>";
	
}
elseif(isset($_POST["choco"]))
{
	 $icing="choco";
	 $base=$_SESSION['base'];
	 echo $icing; 		
	 $query="UPDATE donut1 SET icing='$icing' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["icing"]=$icing;
	 echo "<script>alert('icing selected is $icing');
 	window.location='sprinkles.html';</script>";
	
}
elseif(isset($_POST["gloss"]))
{
	 $icing="gloss";
	 $base=$_SESSION['base'];
	 echo $icing; 		
	$query="UPDATE donut1 SET icing='$icing' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["icing"]=$icing;
	 echo "<script>alert('icing selected is $icing');
 	window.location='sprinkles.html';</script>";
	
}
elseif(isset($_POST["greenapple"]))
{
	 $icing="greenapple";
	 $base=$_SESSION['base'];
	 echo $icing; 		
	 $query="UPDATE donut1 SET icing='$icing' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["icing"]=$icing;
	 echo "<script>alert('icing selected is $icing');
 	window.location='sprinkles.html';</script>";
	
}
elseif(isset($_POST["strawberry"]))
{
	 $icing="strawberry";
	 $base=$_SESSION['base'];
	 echo $icing; 		
	 $query="UPDATE donut1 SET icing='$icing' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["icing"]=$icing;
	 echo "<script>alert('icing selected is $icing');
 	window.location='sprinkles.html';</script>";
	
}
?>