<?php
include "header.php";
include "connection.php";
$Name = $_REQUEST['name'];
$qnt = $_REQUEST['qnt'];
echo $Name."<br>";
	
$s_id=$_REQUEST['s_id'];
echo $s_id."<br>";
	
$price=$_REQUEST['price'];
echo $price."<br>";
	
$path = $_FILES['img']['name'];
echo $path."<br>";
	
	if($path!="")
	{
	
	$new_file_name=$path;
	$path= "./img/".$path; 
	
	//$new_file_name=$path;
	//$path1= "image/".$new_file_name; 
	//$img=$new_file_name;

move_uploaded_file($_FILES['img']['tmp_name'],$path);
	}
			
if(isset($_POST['submit']))
{


$insert="insert into product(s_id,p_nm,p_price,p_img,p_quantity,tot_qnt) values('$s_id','$Name',$price,'$new_file_name',1,$qnt)";
$con->query($insert);
echo $insert;
//exit();
	// 	if($insert)
	// 		$msg='product has been added successfully';
	// 	else
	// 		$msg='product has not been added successfully';
	// }
	
}	header("Location:product.php?msg=$msg & s_id=$s_id");
?>