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
		$del="delete from resume where u_id=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}

?>


<div id="contents">
		<div id="adbox">
			<!--	<img src="image/1624390.jpg" alt="Img" height="600" width="1258">--><br />
<br /><br /><br /><br /><br />


		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="5" >
	<tr>
		
		<th>User ID</th>
		<th>First Name</th>
		<th>last name</th>
		<th>Document</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="SELECT* FROM resume";
		$rs=mysqli_query($con,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		
		<td><?php echo $res['u_id']; ?></td>
		
		<td width="50"><?php echo $res['u_nm']; ?></td>
		<td width="50"><?php echo $res['f_nm']; ?></td>
		<td width="50"><?php echo $res['l_nm']; ?></td>
		<td width="50"><?php echo $res['Document']; ?></td>
		<td><a href="resume.php?delete=<?php echo $res['u_id']; ?>">Delete</a></td>
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