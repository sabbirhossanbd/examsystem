<?php include 'inc/header.php'; ?>


          <?php 
           Session::checklogin();
          ?>
			 

    
     <div class="loginBoxx">
        <img src="img/man.png" class="user">
        <h2>Sign Up Here</h2>
        <form action="" method="post">
            <p>Your Name</p>
            <input type="text" name="name" id="name" placeholder="Enter your name" />
            <p>Your Email</p>
            <input type="text" name="email" id="email" placeholder="Example@gmail.com" />
            <p>Your User Name</p>
            <input type="text" name="username" id="username" placeholder="Enter your username" />
            <p>Enter Password</p>
            <input type="password" name="password" id="password" placeholder="*********" />
            <p>Retype Password</p>
            <input type="password" name="confirm" id="confirm" placeholder="*********" />

            <input type="submit" id="regsubmit" value="Signup" />
             <span id="state"></span>
            <h4>Already Registered? <a href="index.php">Login</a></h4>
             
            
        </form>
    </div>
  

			
			
<?php include 'inc/footer.php'; ?>       
	
		
