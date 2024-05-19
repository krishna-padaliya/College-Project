<?php
session_start();
include "header.php";
include "connection.php";

if(!isset($_SESSION['u_nm']))
{
	$msg = "Pls Login to c the shop page";
	header("Location:localhost:8081/icecream_shop/login.php?msg=$msg");
}
else
{
?>

<div id="tooplate_main">
<table align="center" style="margin-left:60px">
<tr>
	<th colspan="6">
		<h1 align="center">AVAILABLE JOBS</h1>
	</th>
</tr>
	<?php
		$sql= "SELECT * FROM category" ;
		$sel=mysqli_query($con,$sql);
		$count=1;
		while($cat=mysqli_fetch_array($sel))
		{
		if($count>3)
		{
	?>
	
	<tr>
		<tr>
	<?php
		$count=1;
		}
	?>
		<td width="120px">	
 
		<a href="subcategory.php?c_id=<?php echo $cat['c_id'];?>"style="font-size:32px">

			<img src="img/<?php echo $cat['c_img']; ?>." alt="Img" width="280" height="300" /><br />

	<?php 
		echo "<span><center>".$cat['c_nm']."</span></center><br><br>";
	?></a>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		
	
  	<?php
		$count++;
		}//end of while
	?>
	</tr>
	
	<?php 
		}//main else
	?>
	<tr><td></td></tr>
</table>


<?php
include "footer.php";
?>