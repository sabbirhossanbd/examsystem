
<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Session.php');
    Session::init();
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
  

  spl_autoload_register(function($class){
  	include_once "classes/".$class.".php";
  });
    $db = new Database();
    $fm = new Format();
    $usr = new User();
    $exm = new Exam();
    $pro = new Process();

    header("Cache-control: no-store, no-cache, must-revalidate");
    header("Cache-control: pre-check=0, post-check=0, max-age=0");
    header("pragma: no-cache");
    header("Expires: Mon, 15 Jan 2010 00:00:00 GMT");
    header("Last-Modified:  " . gmdate("D, d M Y H:i:s")." GMT");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OES</title>
  <meta http-equiv="content-Type" content="text/html" charset="utf-8"/>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Cache-control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="js/custom.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</head>
<body>

  <?php
   if(isset($_GET['action']) && $_GET['action'] == 'logout'){
     Session::destroy();
     header("Location:index.php");
     exit();
   }
  ?>

	<div class="content">
		<section class="headeroption">
			<img src="./img/header.jpg" alt="Avatar" class="avatar">
		</section>
		<div class="topnav">
      <?php 
        $login = Session::get("login");
        if($login == true){ 
      ?>
		   
       <a href="profile.php">Profile</a>
       <a href="exam.php">Exam</a>
       <a href="?action=logout">Logout</a>
       <?php } else { ?>
       <a href="index.php">Login</a>
		   <a href="register.php">Register</a>
      <?php } ?>

      <?php 
        $login = Session::get("login");
        if($login == true){ 
      ?>
      <span style="float: right;color: #888">
        Welcome <strong><?php echo Session::get("name"); ?></strong>
      </span>
      <?php } ?>
	     </div>  