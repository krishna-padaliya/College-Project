<?php
include "header.php";
include "connection.php";
?>

<?php
$p_id=$_GET['p_id'];
if($p_id!="")
{
	$sel = mysqli_query($con,"SELECT * FROM product where p_id=$p_id");
	while($prods=mysqli_fetch_array($sel))
	{
	$p_nm=$prods['p_nm'];
	$p_id= $prods['p_id'];
	$s_id= $prods['s_id'];
	$p_image= $prods['p_image'];
	
	
	}
}	
	if(isset($_POST['submit'])=="update")
	{
		$name=$_POST['name'];
		
	
		$path = $_FILES['image']['name'];
   		if($path!="")
		{
			$new_file_name=$path;
			$path= "image/".$path; 
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
		}
		else
		{
		$new_file_name=$_POST['h1'];
		}

		$upd="UPDATE product SET p_img='".$new_file_name."',p_nm='".$name."', WHERE p_id=".$_GET['p_id'];
;
		mysqli_query($con,$upd);
		//$s_id=$_GET['s_id'];
		header("Location:product.php?s_id=$s_id");
	}
?>
<br /><br /><br /><br /><br /><br />

<form action="" method="post" enctype="multipart/form-data">
<table align="center" border="1">

<tr>
<td colspan="3" align="right" height="50">
<?php 
if(isset($_GET['msg']))
echo $_GET['msg'];?>
<input type="button" name="b1" onclick="tmp()" style="background-color:#999"value="Back" style="font-size:18px"/></td>
</tr>
            
<tr>
<td height="50" style="font-size:18px">product Name : </td>
<td><input type="text" name="name" size="27" value="<?php echo $p_nm; ?>" /></td>
</tr>

<tr>
<td height="50" style="font-size:18px">Product Image : </td>
<td>
<input type="image" name="i1" src="img/<?php echo $p_image; ?>." height="100" width="100"/>

<input type="hidden" name="h1" value="<?php echo $p_img; ?>" />
<br />

<input type="file" name="image"  value="" style="font-size:18px"/></td>
</tr>




<tr>
<td height="50" style="font-size:18px"></td>
<td><input type="submit" name="submit" value="update"  style="font-size:18px" /></td>
</tr>

</table>
<script>
	function tmp()
	{
		history.back();
	}	
</script>
</form>
<?PHP //include"footer.php";?>