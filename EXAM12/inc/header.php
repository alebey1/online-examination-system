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

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 2025 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<style>
	.pp {
background-image: url("img/last.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
	</style>
</head>
<body class="pp">
<!--<div>
<h4 class="" ><span style="color:orange">Developers</span></h4>
		 <img src="img/index.png" width=100 height=100 alt="" >
		<a>Alemu Beyene</a>
		<h4>0968764321</h4>
		<h4 >alebeyene9@gmail.com</h4>
		<h4>Bule hora university software 
		engineering students</h4>
      </div>-->
<h1 style="text-align:center";><span style="color:#RGB;"> Online<span style="color:blue;"> Examination <span style="color:red;">System </h1>

	<?php 
	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		Session::destroy();
		header("Location:index.php");
		exit();
	}
	 ?>

<div class="phpcoding">
	
		<section class="maincontent">
		<div class="menu">
		<ul>

			<?php
			$login = Session::get("login");
			if ($login == true) {?>
			
			<li><a href="profile.php">Profile</a></li>
			<li><a href="exam.php">Exam</a></li>
			<li><a href="?action=logout">Logout</a></li>
		<?php } else { ?>
		        <li><a href="register.php">Register</a></li>
			<li><a href="index.php">Login</a></li>
				<!--<li><a href="admin/login.php">admin login</a></li>-->
		<?php } ?>
			
		</ul>
		
		<?php
			$login = Session::get("login");
			if ($login == true) {?>

		<span style="float: right;color:blue;">
			
			Welcome <strong><?php echo Session::get('name') ; ?></strong>
		</span>
		<?php } ?>
		</div>
	