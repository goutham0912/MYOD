<?php
session_start();
$db=mysqli_connect('localhost','root','')or die("could not connect to database");
mysqli_select_db($db,"donuts");
$user=$_SESSION['user'];

if(isset($_POST['final']))
{
	$s="DELETE FROM MyGuests WHERE id=3";
 $result=mysqli_query($db,$s);
 $u=mysqli_fetch_assoc($result);
 $gl= $u['glaze'];
 $i= $u['icing'];
 $s= $u['sprinkle'];
 if(($gl)=='')
 	echo " <script>window.location='logoutpage.php';</script>";	
 	
 else
 {
 	echo "successful";
 	echo " <script>window.location='logoutpage.php';</script>";	
}

}
?>