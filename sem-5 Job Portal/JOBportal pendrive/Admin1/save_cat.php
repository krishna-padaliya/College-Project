<?php
include "header.php";
include "connection.php";

	echo $Name = $_REQUEST['name'];
	$path = $_FILES['img']['name'];
	//echo $path;
	if($path!="")
	{
	//$new_file_name=$Name.".";
	//$path="image/".$new_file_name; 
	
	$new_file_name=$path;
	$path= "img".$path; 
//	echo $path;
//	exit();

move_uploaded_file($_FILES['img'] ['tmp_name'],$path);
	}
		

if(isset($_POST['submit']))
{
	
$insert=(mysqli_query($con,"insert into category(c_nm,c_img)values('$Name','$new_file_name')"));
		if($insert)
			$msg='menu has been added successfully';
		else
			$msg='menu has not been added successfully';
	}
	
	header("Location:menu.php?msg=$msg");

//include "footer.php";
?>