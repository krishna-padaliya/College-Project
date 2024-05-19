<?php 
include "header.php";
include "connection.php";

if($_SESSION['a_nm']=="")
					
					{
					$msg = "Pls Login first.Then u will b able to c shop page";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from product where p_id=".$_GET['delete'];
		$rs=mysqli_query($con,$del);
	}
$s_id= $_GET['s_id'];
?>
<br /><br /><br /><br /><br /><br />


<table   align="center" border="1">
<tr >
		<td colspan="5" align="right" height="50" style="font-size:18px">
				<?php 
				if(isset($_GET['msg']))
				echo $_GET['msg'];?>
				<input type="button" name="b1" onclick="tmp()" style="background-color:#999"value="Back" style="font-size:18px"/>
		</td>	
</tr>             
			<tr>
		<td colspan="5" align="right" height="50">
				<a href="add_product.php?s_id=<?php echo $s_id; ?>" style="font-size:18px">Add New Product</a>
			</td>	</tr>
			
<?php
$sel = mysqli_query($con,"SELECT * FROM product where s_id=$s_id");

while($prods=mysqli_fetch_array($sel))
{
?>
		<tr >
		<td height="80" width="70">
				<img src="../img/<?php echo $prods['p_image']; ?>." alt="Img" width="140" height="120">
			</td>	
				<td height="80" width="100" style="font-size:18px">
					<?php echo $prods['p_nm']; ?>
				</td>	
				
				</td>
				<td height="80" width="80"><a href="edit_product.php?s_id=<?php echo $s_id .' '.'& p_id='.$prods['p_id'];  ?> " style="font-size:18px">Edit</a></td>
			
				<td><a href="product.php?s_id=<?php echo $s_id .' '.'& delete='.$prods['p_id'];  ?> "style="font-size:18px">delete</a></td>									
			</tr>
			
<?php } ?>

</table>
<script>
	function tmp()
	{
		history.back();
	}	
</script>
<?php } ?>
</div>
	</div>


<div class="article">
			  
  </div>
<?php //include "footer.php";
?>