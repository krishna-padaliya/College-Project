<?php
include "connection.php";
$name = $_POST['f_nm'];
$city = $_POST['city'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];

//$r = mysql_num_rows(mysql_query("select * from feedback where f_nm='".$name."'")); 
//$r = mysql_num_rows(mysql_query("select * from registration where unm='".$username."' and pwd='".$password."'"));
//echo $r;
//if($r<1)
//{
//mysql_query("insert into registration(unm,pwd,city,cno,email,wsite,enm) values('$unm','$pwd','$city','$cno','$email','$wsite','$enm')");

$sql = "INSERT INTO feedback (f_nm,city,email,subject,msg) values('".$name."','".$city."','".$email."','".$subject."','".$message."')";
//echo $sql;

 //$sql = "INSERT INTO user values('".$_POST['unm']."')";
 //,'.$_POST['pwd'].','.$_POST['city'].','.$_POST['add'].','.$_POST['cno'].')';
// echo $sql;
$res = mysql_query($sql);
if ($res)
{
	$msg = "Successfully!!..";
	header("Location:thanks.php?msg=$msg");
}

//}
else
{
	$msg = "not Successfully!!..";
	header("Location:feedback.php?msg=$msg");
}
?>
