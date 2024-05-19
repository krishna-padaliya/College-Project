<?php
session_start();
include "connection.php";
//if($_POST['cap']!=$_SESSION['capstr'])
//{
//$msg = "Captcha mismatch!..";
//echo $msg;

///header("Location:registration.php?msg=$msg");
//exit;
//}
if(isset($_POST['submit']))
{


$Username = $_POST['u_nm'];
$Firstname = $_POST['f_nm'];
$Lastname = $_POST['l_nm'];
$Document =  $_POST['Document'];



//$sql = "INSERT INTO reg_form (u_nm,u_fnm,u_lnm,password,cpwd,Dob,Address,City,State,Email,ph_no) VALUES('$Username','$Firstname','$Lastname','$password','$conformpassword','$Dob','$Address','$City','$State','$Email','$phone_no')";
$sql="INSERT INTO resume(u_nm,f_nm,l_nm, Document) VALUES ('$Username','$Firstname','$Lastname','$Document')";
$res = mysqli_query($con,$sql);
if ($res)
{
	$msg = " Apply Successfully";
	header("Location:index.php?msg=$msg");
}

else
{
	$msg = "registrationname already exists!!..";
	header("Location:resume.php?msg=$msg");
}}
?>
