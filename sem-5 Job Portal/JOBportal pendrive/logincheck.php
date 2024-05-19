 <?php
 session_start();
include "connection.php";

if(isset($_POST['submit']))
{

 $u_nm = $_POST['u_nm'];
 $password =  $_POST['password'];
$sql="SELECT * FROM  reg_form where u_nm='$u_nm' and password='$password'";
$rs = mysqli_query($con,$sql);
$cnt=mysqli_num_rows($rs);
if($cnt >= 1)
{
	$_SESSION['u_nm'] = $u_nm;	
	header("Location:category.php");
}
else
{
	$msg = "Username or Password are not correct, try again.";
	header("Location:login.php?msg=$msg");
}
}
?>