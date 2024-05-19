<?php
session_start();
include "connection.php";
include "header1.php";

?>

	<div id="contents">
	<div id="tooplate_fp_100_wrapper" >
	<div id="tooplate_fp_wrapper">	
	
		
			<br />
<br />


		<form action="logincheck.php" method="post">
        <?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>
			<br /><br /><br /><br />  			
			<table width="100" height="90" align="center" cellpadding="7">
			<tr>
			
			<td style="font-size:24px">Admin&nbsp;Name:</td>
			<td><input type="text" name="username"></td>
			</tr>
						<tr>
			<td style="font-size:24px">Password:</td>
			<td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td ><input type="submit" value="submit" style="font-size:24px" ></td>
			</tr>
			</table><br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> 
		</div>
		</div>
		</div>
			<br />
<br />

	

