<?php include 'inc/header.php'; ?>
  <?php
   Session::checkSession();
  ?>
   <style>
  .starttest{width:500px;margin:0 auto;border:1px solid #ddd;padding: 20PX;margin-left: 35px;}
   </style>
<div class="main">
	<h3>You are Done!!</h3>
	  <div class="starttest">
	  	<p>Congrats ! You have just completed the test.</p>
	  	 <p>Final Score : 
            <?php
                if(isset($_SESSION['score'])){
                	echo $_SESSION['score'];
                	unset($_SESSION['score']);
                }
            ?>
	  	</p>


	  	<a href="viewans.php">View Answer</a>
	  	<a href="starttest.php">Start Again</a>
	  </div>
	  

</div>
<?php include 'inc/footer.php'; ?>