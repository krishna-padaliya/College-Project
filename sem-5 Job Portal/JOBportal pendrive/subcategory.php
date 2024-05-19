<?php
session_start(); 
include"header.php";
include "connection.php";

if($_SESSION['u_nm'] == "")
{
	$msg = "Pls Login to see the collection page";
	header("Location:login.php?msg=$msg");
	//exit;
}
else
{
if(isset($_GET['c_id']))
$c_id=$_GET['c_id'];
?>
            
<div id="tooplate_main">
<table align="center" style="margin-left:60px">
	<tr>
    	<td colspan="6" align="left" height="5">
		</td>
   	</tr>
	
	<?php
	//$sql="select * from subcategory where c_id=".$c_id;
	$sel = mysqli_query($con,"SELECT* FROM subcategory where c_id=$c_id");
	$count=1;
	while($prods=mysqli_fetch_array($sel))
	{
		if($count>3)
		{
	?>
	<tr>
		<?php
			$count=1;
		}
		?>

	<td align="center"  style="padding-right:5px;padding-left:100px;paddind-top:15px">
	<a href="applayjob.php?s_id=<?php echo $prods['s_id'];?>">
	<img src="img/<?php echo $prods['s_img']; ?>." alt="Img"style="margin-top: 50px" width="350" height="300"><br/></a>

	<a href="applayjob.php?s_id=<?php echo $prods['s_id'];?>" style="font-size:24px"> 
	<?php echo $prods['s_nm'] ; ?><br /></a>
	</td>

	<td>						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	
	<?php 
	$count++;
	}
	?>
	
	</tr>

	<tr>
		<td><br /><br /></td>																					
	</tr>
</table>

<script>
	function tmp()
	{
		history.back();
	}	
</script>

<?php 
 include "footer.php";
 }
 ?>