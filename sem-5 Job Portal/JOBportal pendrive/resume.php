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
    if(frm.f_nm.value == "")
    {
        alert("enter user name");
        frm.f_nm.focus();
        return false;
    }
    if(frm.l_nm.value == "")
    {
        alert("enter user name");
        frm.l_nm.focus();
        return false;
        }
    if(frm.Document.value == "")
    {
        alert("enter user name");
        frm.Document.focus();
        return false;
    
       
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

<form  action="saveresume.php"  name="frm" method="POST"  onsubmit="return validate(this)">
            <?php
            if(isset($_GET['msg']))
            echo $_GET['msg'];
            ?><br/>

<tr> <td colspan="2" align="center"><h1>Resume</h1></td>
</tr>

<tr>
  <td style="font-size:24px" width="200">Username</td>
    <td width="0"><input type="text" name="u_nm" style="font-size:20px" height="50" width="52" onkeydown="return onlyChar(event);" autofocus /></td>
    </tr>
<tr> 
<tr> 
  <td style="font-size:24px">First name</td>
    
    <td><input type="First name" name="f_nm" style="font-size:20px" height="50" width="50"/></td>
</tr>
<tr> 
  <td style="font-size:24px">Last name</td>
    
    <td><input type="Last name" name="l_nm" style="font-size:20px" height="50" width="50"/></td>
    <tr>

<td height="50" style="font-size:24px">Document</td>
<td><input type="file" name="Document"  style="font-size:18px"/></td>
</tr>

</tr>
<tr> 

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" style="font-size:24px"/></td>
    
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Cancle" style="font-size:24px"/></td>
</tr>
</form> 
</table>
</div>
</div>
<?php //include "footer.php"; ?>
        



