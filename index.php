  <?php
   include 'inc/header.php';
  ?>
	
		<div class="maincontent">
			<div class="seg" style="width: 150px;height: 150px; margin-right: 30px;">
				<img src=""/>
			</div> 
            <div class="segment">
			  <form action="" method="post">
				<table class="tbl">
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" id="email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="login" id="loginsubmit" value="Login"/ ></td>
					</tr>
				</table>
				</form>
				<h6>New User? <a href="register.php">signup</a> free</h6>
				<span class="empty" style="display: none">Field Must Not Be Empty!</span>
				<span class="error" style="display: none">Email or Password Not Matched!</span>
				<span class="disable" style="display: none">User Id Disabled!</span>
				</div>
			  
			</div>
	
		

<?php
 include 'inc/footer.php';
 
?>











