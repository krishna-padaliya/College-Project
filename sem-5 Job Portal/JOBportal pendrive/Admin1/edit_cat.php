<?php
include "header.php";
include "connection.php";
?>


<?php
$c_id=$_GET['c_id'];
if($c_id!="")
{
	$sel = mysqli_query($con,"SELECT * FROM category where c_id=$c_id");
	while($prods=mysqli_fetch_array($sel))
	{
	$c_nm=$prods['c_nm'];
	$c_img= $prods['c_img'];
	}
}	
	if(isset($_POST['submit'])=="update")
	{
		$name=$_POST['name'];
		$path = $_FILES['image']['name'];
   		if($path!="")
		{
			$new_file_name=$path;
			$path= "img/".$path; 
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
		}
		else
		{
		$new_file_name=$_POST['h1'];
		}

		$upd="UPDATE category SET c_img='".$new_file_name."',c_nm='".$name."' WHERE c_id=".$_GET['c_id'];
		mysqli_query($con,$upd);
		//$c_id=$_GET['c_id'];
		header("Location:menu.php");
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
<td><input type="text" name="name" size="27" value="<?php echo $c_nm; ?>"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px">Image : </td>
<td><input type="image" name="i1" src="img/<?php echo $c_img; ?>." height="100" width="100"/>
<input type="hidden" name="h1" value="<?php echo $c_img; ?>"  />
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
<?PHP//include"footer.php";?>