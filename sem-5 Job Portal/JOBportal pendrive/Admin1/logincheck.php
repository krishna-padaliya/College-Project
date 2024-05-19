<?php
include "header.php";
//session_start();
include "connection.php";
 $username = $_POST['username'];
 $password =  $_POST['password'];
$r = mysqli_query( "SELECT* FROM admin WHERE a_nm='".$username."' and password='".$password."'");
if($r >= 0)
{
	$_SESSION['a_nm'] = $username;
	
	header("Location:index.php?msg=$msg");
}
else
{
	$msg = "<h3>Username or Password are not correct, try again.</h3>";
	//header("Location:login.php?msg=$msg");
}
include "footer.php";

?>
