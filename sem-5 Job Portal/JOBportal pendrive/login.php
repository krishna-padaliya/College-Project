<?php
session_start();
include "connection.php";
include "header.php";
?>
    <div id="contents">
        <div id="adbox">
        <form action="logincheck.php" method="post">  
        <?php
        if(isset($_GET['msg']))
         echo  $_GET['msg'];
         
         ?> 
         <div class="row">
         <div class="col-md-6">
         <div class="about_taital_main" style="margin-left: 410px">
         <h1 class="about_taital">Log In</h1>
         </div>
         </div>
         </div>  
            <table width="319" height="90" align="center" cellpadding="7">
            <tr>
            <td width="98" style="font-size:24px">username:</td>
            <td width="185"><input type="text" name="u_nm" placeholder="username"></td>
            </tr>
                        <tr>
            <td style="font-size:24px">password:</td>
            <td><input type="password" name="password" placeholder="password"></td>
            </tr>
                        <tr>
            <td>&nbsp;</td>
            <td ><input type="submit" value="submit" name="submit" style="font-size:24px" >
                  <input type="reset" value="reset" style="font-size:24px" >
            </td>
            </tr>
            </tr>
                        <tr>
            <td>&nbsp;</td>
            <td ><a href="registration.php" style="font-size:24px">New User??</a></td>
            </tr>
        
</table>
           
        </div>
<?php include "footer.php"; ?>