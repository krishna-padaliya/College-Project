<?php
//session_start();
include "header.php";
include "connection.php";

				if($_SESSION['a_nm'] == "")
				{
					$msg = "<h3><center>Pls Login.</center></h3> ";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from menu where c_id=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}
?>
<br /><br /><br /><br /><br />

<table align="center" cellpadding="6" border="3" height="" width="400">
<tr>
<td colspan="5" align="right">
<a href="add_cat.php" style="font-size:18px">Add New category</a>
</td>
</tr>
<br />
<?php
$sel = mysqli_query($con,"SELECT * FROM category");
while($prods=mysqli_fetch_array($sel))
{
?>
<tr>
		
			<td style="font-size:25px"><?php echo $prods['c_id']; ?></td>
            
			<td><img src="img/<?php echo $prods['c_img']; ?>." alt="Img" width="100" height="100"></td>

			<td><a href="subcategory.php?c_id=<?php echo $prods['c_id']; ?>"  style="font-size:25px"><?php echo $prods['c_nm']; ?></a></td>
<td height="80" width="80"><a href="edit_cat.php?c_id=<?php echo $prods['c_id']; ?>" style="font-size:18px">Edit</a></td>
<td><a href="menu.php?delete=<?php echo $prods['c_id'];  ?>" style="font-size:18px">delete</a></td>
		</tr>
		
	
 <?php 
} 

	}
?>

</table><br /><br />




<?php
//include "footer.php";
?>