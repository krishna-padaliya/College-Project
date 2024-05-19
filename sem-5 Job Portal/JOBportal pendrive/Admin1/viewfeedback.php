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
		$del="delete from feedback where f_id=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}

?>


<div id="contents">
	
		<br />
<br /><br /><br /><br /><br />

		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="5" >
	<tr>
		<th>Name</th>
		<th>City</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="SELECT * from feedback";
		$rs=mysqli_query($con,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td width="50"><?php echo $res['f_nm']; ?></td>
		<td width="50"><?php echo $res['email']; ?></td>
		<td width="50"><?php echo $res['city']; ?></td>
		<td width="50"><?php echo $res['subject']; ?></td>
		<td width="50"><?php echo $res['message']; ?></td>
		<td><a href="viewfeedback.php?delete=<?php echo $res['f_id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table><br /><br /> 
	</form>
	</div> <!-- end of main -->
	
	
	
	
	
</div> <!-- end of fp 100% wrapper

	</div> -->
			<br />
<br />

	
<?php
//include "footer.php";
?>