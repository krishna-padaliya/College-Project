<!--connection of database-->
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"jobportal") or die("can't connect to the data base");
?>