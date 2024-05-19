
<?php
include "connection.php";
include "header.php";

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from contact_us where contactid=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}

?>


<div id="contents">
		<div id="adbox">
			<!--	<img src="image/1624390.jpg" alt="Img" height="600" width="1258">--><br />
<br /><br /><br /><br /><br />


		<form action="updatecontact" method="post" enctype="multipart/form-data" >
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  			
			<table align="center" border="1" >
	<tr>
		<th>ID</th>
		<th>Image</th>
		<th>Name</th>
		<th>Address</th>
		<th>Mobile No</th>
		<th>Office No</th>
		<th>Web Add</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		$sel="SELECT * from contact_us";
		$rs=mysqli_query($con,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $res['contactid']; ?></td>
		<td><img  src="img/map_thumb.jfif" alt="Img" height="100" width="100"/></td>
			<td><?php echo $res['name']; ?></td>
			<td><?php echo $res['address']; ?></td>
			<td><?php echo $res['mno']; ?></td>
			<td><?php echo $res['ono']; ?></td>
			<td><?php echo $res['webadd']; ?></td>
			<td><a href="updatecontact.php?contactid=<?php echo $res['contactid']; ?>">Edit</a></td>
		<td><a href="viewcontact.php?delete=<?php echo $res['contactid']; ?>">Delete</a></td>
	</tr>
		
	
		
		
		

		
		
	<?php } ?>
	
	</table>
	
	


	</form>
	</div></div>
			<br />
<br />

	

