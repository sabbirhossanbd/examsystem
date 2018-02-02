<?php include 'inc/header.php';
     
 ?>
          <?php 
           Session::checklogin();
          ?>
			 
                <div class="row_main">
                	<div class="main-login main-center">
                		<h4>Sign up once for give any test..</h4>
                    
                		 <form action="" method="POST">
                		 	
                		 	<div class="form-group">
                		 		<label for="name" class="cols-sm-2 control-label">Your Name</label>
                		 		  <div class="cols-sm-10">
                		 		  	<div class="input-group">
                		 		  		<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                		 		  		<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"/>
                		 		  	</div>
                		 		  </div>
                		 	</div>
                		 <div class="form-group">
                		 	<label for="email" class="cols-sm-2 control-label">Your Email</label>
                		 	<div class="cols-sm-10">
                		 		<div class="input-group">
                		 			<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                		 			<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email"/>
                		 		</div>
                		 	</div>
                		 </div>
                	    <div class="form-group">
                	    	<label for="username" class="cols-sm-2 control-label">Username</label>
                	    	<div class="cols-sm-10">
                	    		<div class="input-group">
                	    			<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                	    			<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username"/>
                	    		</div>
                	    	</div>
                	    </div>
                	   <div class="form-group">
                	   	 <label for="password" class="cols-sm-2 control-label">Password</label>
                	   	 <div class="cols-sm-10">
                	   	 	<div class="input-group">
                	   	 		<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                	   	 		<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" />
                	   	 	</div>
                	   	 </div>
                	   </div>
                	 <div class="form-group">
                	   	 <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                	   	 <div class="cols-sm-10">
                	   	 	<div class="input-group">
                	   	 		<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                	   	 		<input type="password" class="form-control" name="confirm" id="confirm" placeholder="Retype your password"/>
                	   	 	</div>
                	   	 </div>
                	   </div>
                	 <div class="form-group">
                	 	<input type="submit" id="regsubmit" value="Signup"/>
                	 </div>
                		 </form> 

                	<p>Already Registered ? <a href="index.php">Login</a></p>
                     <span id="state"></span>
                    
                	</div>
                  </div>
                     
			
			

       <?php include 'inc/footer.php';
       //include 'getregister.php';
       ?>
	
		
