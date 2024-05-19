<?php include "header.php";
include "connection.php"; 

    if($_SESSION['a_nm'] == "")
    {
        $msg = "<h3><center>Pls Login.</center></h3> ";
        header("Location:login.php?msg=$msg");
    }else
    {

?>


<div id="tooplate_fp_100_wrapper" >
    <div id="tooplate_fp_wrapper">      
        
        <div id="tooplate_middle">
            <div class="con_tit_02" style="text-align:center">
            <br><br><br><br><br><br><br>    
                        WELCOME TO ADMIN PANEL
                        
                    
                    <div class="cleaner"></div>
          </div>
            
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
          <div class="col_w900 col_w900_last">
              <div class="cleaner h60"></div>
                    
              <div class="col_allw280 fp_service_box col_last">
                        
            
            <div class="cleaner"></div>
        </div> <!-- end of main -->
    
    
    
    
    </div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->

<?php 
}
//include "footer.php"; ?>


