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
$Firstname = $_POST['u_fnm'];
$Lastname = $_POST['u_lnm'];
$password =  $_POST['password'];
$conformpassword=$_POST['cpwd'];
$Dob = $_POST['Dob'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Email = $_POST['Email'];
$phone_no = $_POST['ph_no'];



//$sql = "INSERT INTO reg_form (u_nm,u_fnm,u_lnm,password,cpwd,Dob,Address,City,State,Email,ph_no) VALUES('$Username','$Firstname','$Lastname','$password','$conformpassword','$Dob','$Address','$City','$State','$Email','$phone_no')";
$sql="INSERT INTO reg_form(u_nm, u_lnm, password, cpwd, Dob, Gender, Address, City, State, Email, ph_no) VALUES ('$Username','$Firstname','$Lastname','$password','$conformpassword','$Dob','$Address','$City','$State','$Email','$phone_no')";
$res = mysqli_query($con,$sql);
if ($res)
{
	$msg = "Successfully Registerd!!..";
	header("Location:login.php?msg=$msg");
}

else
{
	$msg = "registrationname already exists!!..";
	header("Location:registration.php?msg=$msg");
}}
?>
