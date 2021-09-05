<?php

session_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"donuts");
$user=$_SESSION['user'];	
if(isset($_POST["blueberry"]))
{
	 $sprinkle="blueberry";
	 
	 echo $sprinkle; 	
	 $base=$_SESSION['base'];		
	  $query="UPDATE donut1 SET sprinkle='$sprinkle' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["sprinkle"]=$sprinkle;
	 echo "<script>alert('blueberry is added');
 	window.location='testing1.html';</script>";
	 
	
}
elseif(isset($_POST["nosprinkles"]))
{
	 $sprinkle="no sprinkle";
	 echo $sprinkle; 	
	 $base=$_SESSION['base'];		
	  $query="UPDATE donut1 SET sprinkle='$sprinkle' where username='$user'";
	 mysqli_query($db,$query);
	 $_SESSION["sprinkle"]=$sprinkle;
	 echo "<script>alert('sprinkles are not added');
 	window.location='logoutPage.php';</script>";		
	
}
?>