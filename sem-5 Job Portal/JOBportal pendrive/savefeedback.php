<?php
session_start();
include "connection.php";
$Name = $_POST['f_nm'];
$Email = $_POST['email'];
$City = $_POST['city'];
$Subject = $_POST['subject'];
$message = $_POST['message'];

//$r = mysql_num_rows(mysql_query("select * from feedback where f_nm='".$name."'")); 
//$r = mysql_num_rows(mysql_query("select * from registration where unm='".$username."' and pwd='".$password."'"));
//echo $r;
//if($r<1)
//{
//mysql_query("insert into registration(unm,pwd,city,cno,email,wsite,enm) values('$unm','$pwd','$city','$cno','$email','$wsite','$enm');

$sql = "INSERT INTO feedback (f_nm,email,city,subject,message) values('$Name','$Email','$City','$Subject','$message')";
//echo $sql;

 //$sql = "INSERT INTO user values('".$_POST['u_nm']."')";
 //,'.$_POST['password'].','.$_POST['city'].','.$_POST['address'].','.$_POST['cno'].')';
// echo $sql;
$res = mysqli_query($con,$sql);
if ($res)
{
	$msg = "Successfully!!..";
	header("Location:thanks.php?msg=$msg");
}

else 
{
	$msg = "not Successfully!!..";
	header("Location:feedback.php?msg=$msg");
}
?>