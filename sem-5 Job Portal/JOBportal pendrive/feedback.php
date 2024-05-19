<?php 
session_start();
include "header.php";
include "connection.php";
?>
		
		<div id="">
		<table align="center" width="500" height="500"><tr>
			<div id="mid_title">
				<center><td colspan="2" align="center"><h1>Feedback</h1>
			<?php	if(isset($_GET['msg']))
						echo $_GET['msg'];
			?>
				</td></center><br />
				</tr>
			</div>
		</div> <!-- end of middle -->
		<div id="">
	
			<div class="col_w420 float_l">
				<div id="contact_form">

					<form method="post" name="contact" action="savefeedback.php">
	<tr>
	<td><label for="f_nm" style="font-size:18px">Name:</label></td>
	<td><input type="text" maxlength="40" id="author" class="input_field" name="f_nm" autofocus /></td>
	</tr>
							
     <tr>
	 <td><label for="city" style="font-size:18px">City:</label></td> 
	 <td><input type="text" maxlength="40" id="city" class="input_field" name="city" /></td>
	</tr>
	
	<tr>
	<td><label for="email" style="font-size:18px">Email:</label></td> 
	<td><input type="text" maxlength="40" id="email" class="input_field" name="email" /></td>
	</tr>
								
	<tr>
	<td><label for="subject" style="font-size:18px">Subject:</label></td>
	<td> <input type="text" maxlength="40" id="subject" class="input_field" name="subject" /></td>
	</tr>
	
	<tr>
	<td><label for="message" style="font-size:18px">Message:</label></td> 	
	<td><textarea id="text" name="message" rows="5" cols="22" class="message"></textarea></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" style="font-size:18px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Reset" id="reset" name="reset" style="font-size:18px"/></td>
	</tr>
						
	</form>
	</table>
				</div> 
			</div>
				
			<div class="cleaner"></div>
		</div> <!-- end of main -->
	
	</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->
<?php include "footer.php";?>