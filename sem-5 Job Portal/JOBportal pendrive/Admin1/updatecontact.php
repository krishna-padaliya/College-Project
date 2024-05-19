<?php
include "connection.php";
include "header.php";

	
/*	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file specifies the path of the file to be uploaded
$uploadOk=1 is not used yet (will be used later)
$imageFileType holds the file extension of the file
Next, check if the image file is an actual image or a fake image
*/
	
	
	

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
else
{
	if(isset($_GET['contactid']))
	{
		$sel="SELECT* FROM contact_us where contactid=".$_GET['contactid'];
		$rs=mysqli_query($con,$sel);
		$rsc=mysqli_fetch_row($rs);
	}
	
	
	
	//code for file upload control
	
//echo $path;

	

	if(isset($_POST['updatecontact'])=="update")
	{
		
		//$image=$_POST['image'];
		
		$name=$_POST['name'];
		$address=$_POST['address'];
		$mno=$_POST['mno'];
		$ono=$_POST['ono'];
		$webadd=$_POST['webadd'];
		
    	
		if($path!="")
		{
			$new_file_name=$path;
			$path= "img/".$path; 
			//$new_file_name=$path;
			//$path1= "image/".$new_file_name; 
			//$img=$new_file_name;
			move_uploaded_file($_FILES['img']['tmp_name'],$path);
		}
		else
		{
		$new_file_name=$_POST['h1'];
		}
		
		
		
		
		

		$upd="UPDATE contact_us SET img='".$new_file_name."',name='".$name."',address='".$address."',mno='".$mno."',ono='".$ono."', webadd='".$webadd."' WHERE contactid=".$_GET['contactid'];
;	
		mysqli_query($con,$upd);
		header("Location:viewcontact.php");
	}
?>


<div id="contents">
		<div id="adbox">
			<img src="img/map_thumb.jfif" alt="Img" height="300" width="300"><br />
<br />

<h3 style="margin-left:40%;">Edit Contact Us.</h3>
		<form name="frmupdate" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<table align="center" style="padding-top:40px;" cellpadding="6">
			<tr>
				<th>Image :</th>
				<td><input type="file" name="image"  value=""/><input type="hidden" name="h1" value="<?php echo $rsc[1]; ?>"  /></td>
			</tr>
				

			<tr>
				<th>Name :</th>
				<td><input type="text" name="name" value="<?php echo $rsc[1]; ?>" /></td>

			</tr>
			<tr>
				<th>Address :</th>
				<td><textarea type="text" rows="2" cols="100" name="address"><?php echo $rsc[2]; ?></textarea></td>
			</tr>
			<tr>
				<th>Mobile No :</th>
				<td><input type="text" name="mno" value="<?php echo $rsc[3]; ?>" /></td>
			</tr>
			<tr>
				<th>Office No :</th>
				<td><input type="text" name="ono" value="<?php echo $rsc[4]; ?>"/></td>
			</tr>
			<tr>
				<th>Web Address :</th>
				<td><input type="text" name="webadd" value="<?php echo $rsc[5]; ?>"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="updatecontact" value="update"/></td>
			</tr>
		</table>

		</form>
		
	</div></div>
			<br />
<br />

	<?php } ?>

<?php include "footer.php"; 
?>
