 <?php
session_start();
//include "header.php";
include "connection.php";
?>
<script type="text/javascript">
function validate(frm)
{
	if(frm.u_nm.value == "")
	{
		alert("enter user name");
		frm.u_nm.focus();
		return false;
	}
	if(frm.u_fnm.value == "")
	{
		alert("enter user name");
		frm.u_fnm.focus();
		return false;
	}
	if(frm.u_lnm.value == "")
	{
		alert("enter user name");
		frm.u_lnm.focus();
		return false;
	}
	if(frm.Dob.value == "")
	{
		alert("enter user name");
		frm.Dob.focus();
		return false;
	}
	else if(frm.password.value == "")
	{
		alert("enter user password");
		frm.password.focus();
		return false;
	}
	else if(frm.cpwd.value == "")
	{
		alert("enter user confirm password");
		frm.cpwd.focus();
		return false;
	}
	else if(frm.Address.value == "")
	{
		alert("enter user address");
		frm.add.focus();
		return false;
	}
	else if(frm.City.value == "")
	{
		alert("enter user city name");
		frm.city.focus();
		return false;
	}
	else if(frm.State.value == "")
	{
		alert("enter user state name");
		frm.state.focus();
		return false;
	}
	else if(frm.ph_no.value == "")
	{
		alert("enter user contact no");
		frm.pno.focus();
		return false;
	}
	else if(frm.Email.value == "")
	{
		alert("enter user email id");
		frm.eid.focus();
		return false;
	}
	else if(frm.password.value!=frm.cpwd.value)
	{
		alert("reenter your correct password");
		frm.pwd.focus();
		return false;
	}
	
		
	}*/
	return true;	
}


function onlyNumbers(e)
{
	var charCode=e.which || e.keyCode;
	//8-back space 9-tab key 48-57 0 to 9
	if((charCode >= 48 && charCode <=57) || charCode==9 || charCode==8)
	return true;
	
	return false;



function onlyChar(e)
{
	var charCode=e.which || e.keyCode;
	if((charCode >= 65 && charCode <=90)|| (charCode >= 97 && charCode <=122) || charCode==9 || charCode==46 || charCode==8)
	return true;
	
	return false;
}

function email1()
{
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(reg.test(frm.eid.value) == false)
	{
		alert ('invalid email address');
		frm.eid.focus();
		return false;
		
	}
}
</script>

	


	<div id="contents">
		<div id="adbox">
			<!--<img src="image/indian-sweets.jpg" height="300" width="600" alt="Img">-->



<table width="600" height="450" align="center" cellpadding="7">

<form  action="saveuser.php"  name="frm" method="POST"  onsubmit="return validate(this)">
			<?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?><br/>

<tr> <td colspan="2" align="center"><h1>Registration</h1></td>
</tr>

<tr>
  <td style="font-size:24px" width="200">Username</td>
 	<td width="0"><input type="text" name="u_nm" style="font-size:20px" height="50" width="52" onkeydown="return onlyChar(event);" autofocus /></td>
	</tr>
<tr> 
  <td style="font-size:24px">Password</td>
	
	<td><input type="password" name="password" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr>
    <td style="font-size:24px">ConfirmPassword</td>
	
	<td><input type="password" name="cpwd" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr> 
  <td style="font-size:24px">First name</td>
	
	<td><input type="First name" name="u_fnm" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr> 
  <td style="font-size:24px">Last name</td>
	
	<td><input type="Last name" name="u_lnm" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr> 
  <td style="font-size:24px">Date to birth</td>
	
	<td><input type="date" name="Dob" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr>
<td style="font-size:24px">Address</td>

<td><textarea name="Address" rows="5" cols="20" style="font-size:18px" height="50" width="50"></textarea></td>
</tr>
<tr>
<td style="font-size:24px">City</td>

<td><input type="text" name="City" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr>
<td style="font-size:24px">State</td>

<td><input name="State" rows="5" cols="20" style="font-size:20px" height="50" width="50"></td>
</tr>
<tr>
	  <td style="font-size:24px">Email id</td>
  		
    <td><input type="email" name="Email" style="font-size:20px" height="50" width="50" onBlur="return email1();"/></td>
</tr>
<tr>
	  <td style="font-size:24px">Phone No</td>
  		
    <td><input type="number" name="ph_no"  style="font-size:20px" height="50" width="50" onkeydown="return onlyNumbers(event);"/></td>
</tr>
<tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Register now" style="font-size:24px"/></td>
	
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Cancle" style="font-size:24px"/></td>
</tr>
</form>	
</table>
</div>
</div>
<?php //include "footer.php"; ?>
		



