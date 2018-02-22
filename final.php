<?php include 'inc/header.php'; ?>
  <?php
   Session::checkSession();
  ?>
   <style>
  .starttest{width:500px;margin:0 auto;border:1px solid #ddd;padding: 20PX;}
   </style>
<div class="main-exam">
	<h2>You are Done!!</h2>
	  <div class="starttest">
	  	<h2>Congrats ! You have just completed the test.</h2>
	  	 <h2>Final Score : <?php
                if(isset($_SESSION['score'])){
                	echo $_SESSION['score'];
                	unset ($_SESSION['score']);
                  
                }
            ?> 
	  	</h2>


	  	<a href="viewans.php">View Answer</a>
	  	<a href="starttest.php">Start Again</a>
	  </div>
	  

</div>
