 <?php include_once 'inc/header.php'; ?>
  
     <div class="loginBox">
		<img src="img/man.png" class="user">
		<h2>Log In Here</h2>
		<form action="" method="post">
			<p>Email</p>
			<input type="text" name="email" id="email" placeholder="Example@gmail.com" />
			<p>Password</p>
			<input type="password" name="password" id="password" placeholder="*********" />
			<input type="submit" name="login" id="loginsubmit" value="Login" />
			<h4><a href="reset.php">Forgotten Password</a><h4>
			<h4>New User? <a href="register.php">signup</a> free</h4>

			<span class="empty" style="display: none">Field Must Not Be Empty!</span>
			<span class="error" style="display: none">Email or Password Not Matched!</span>
			<span class="disable" style="display: none">User Id Disabled!</span>
		</form>
	</div>
<?php include_once 'inc/footer.php'; ?>
	
	
	
		












