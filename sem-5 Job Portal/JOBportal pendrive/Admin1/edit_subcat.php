<?php
include "header.php";
include "connection.php";
?>


<?php
$s_id=$_GET['s_id'];
if($s_id!="")
{
	$sel = mysqli_query($con,"select * from subcategory where s_id=$s_id");
	while($prods=mysqli_fetch_array($sel))
	{
	$s_id= $prods['s_id'];
	$c_id= $prods['c_id'];
	$s_nm=$prods['s_nm'];
	$s_img= $prods['s_img'];
	}
}	
	if(isset($_POST['submit'])=="update")
	{
		$name=$_POST['name'];
		$path = $_FILES['img']['name'];
   		if($path!="")
		{
			$new_file_name=$path;
			$path= "img/".$path; 
			move_uploaded_file($_FILES['img']['tmp_name'],$path);
		}
		else
		{
		$new_file_name=$_POST['h1'];
		}

		$upd="UPDATE subcategory SET s_img='".$new_file_name."',s_nm='".$name."' WHERE s_id=".$_GET['s_id'];
;
		mysqli_query($con,$upd);
		//$c_id=$_GET['c_id'];
		header("Location:subcategory.php?c_id=$c_id");
	}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<form action="" method="post" enctype="multipart/form-data" >
<table align="center" border="1">

<tr>
                <td colspan="3" align="right" height="50">
				<?php 
				if(isset($_GET['msg']))
				echo $_GET['msg'];?>
<input type="button" name="b1" onclick="tmp()" style="background-color:#999"value="Back" style="font-size:18px"/></td>
   			 </tr>
            
			<tr >
		<td height="50" style="font-size:18px">
Name : </td>
<td><input type="text" name="name" size="27" value="<?php echo $s_nm; ?>"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px">Image : </td>
<td><input type="image" name="i1" src="img/<?php echo $s_img; ?>." height="100" width="100"/>
<input type="hidden" name="h1" value="<?php echo $s_img; ?>"  />
<br />
<input type="file" name="img"  value="" style="font-size:18px"/></td>
</tr>
<tr>
<td height="50" style="font-size:18px"> </td>
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