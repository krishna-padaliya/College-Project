<?php include "header.php";
include "connection.php";
 
$sel = mysqli_query($con,"select * from about");
$cnt=0;

while($aus=mysqli_fetch_array($sel))
{
if($cnt=1)
{
  
?>  
<h1 align="center"><br />  <?php echo $aus['title'];?></h1>

<img align="right"  src="img/<?php echo $aus['img']; ?>." alt="Img"  width="300" height="300" /><br />

<p>
<div id="main">
    <div class="width-container">
        
          <div style="font-size:20px">
            <?php echo $aus['des']; ?>
                    </div>
          <div class="clear"></div>
          
     <?php  }
   }
?>
  <!-- close .width-container -->

  <div class="clearfix"></div>
  </div><!-- close #main -->
<div style="font-size:20px"><br />


</div>

</div>
<?php include "footer.php"; ?>