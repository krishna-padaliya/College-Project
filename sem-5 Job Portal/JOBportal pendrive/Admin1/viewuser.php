<?php
//session_start();
include "header.php";
include "connection.php";


if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from reg_form where u_id=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}

?>


<div id="contents">
		<div id="adbox">
		<!--	<img src="image/1624390.jpg" alt="Img" height="600" width="1258"> --><br />
<br /><br /><br /><br /><br />


		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="5" >
	<tr>
		<th>ID</th>
		<th>Name</th>
		
		<th>Last Name</th>
		<th>Password</th>
		<th>Date Of Birth</th>
		<th>Gender</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Email ID</th>
		<th>Phone No</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="select * from reg_form";
		$rs=mysqli_query($con,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $res['u_id']; ?></td>
		<td><?php echo $res['u_nm']; ?></td>
		
		<td><?php echo $res['u_lnm']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td width="50"><?php echo $res['Dob']; ?></td>
		<td width="50"><?php echo $res['Gender']; ?></td>
		<td width="50"><?php echo $res['Address']; ?></td>
		<td width="50"><?php echo $res['City']; ?></td>
		<td width="50"><?php echo $res['State']; ?></td>
		<td width="50"><?php echo $res['Email']; ?></td>
		<td width="50"><?php echo $res['ph_no']; ?></td>
		<td><a href="viewuser.php?delete=<?php echo $res['u_id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table>
	</form>
	</div></div>
			<br />
<br />

	

<?php
//include "footer.php";
?>