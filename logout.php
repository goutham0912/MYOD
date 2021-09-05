<?php
session_start();
$user=$_SESSION['user'];
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"donuts");
echo $user;
$q="DELETE FROM `donut1` WHERE `donut1`.`id` = 0";
mysqli_query($db,$q);



//unset($_SESSION['user']);
//unset($_SESSION['base']);
//unset($_SESSION['icing']);
//unset($_SESSION['sprinkles']);
session_unset();
session_destroy();
header("Location: LoginPage1.php");

?>