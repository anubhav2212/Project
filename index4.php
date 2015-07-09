<?php
session_start();
?>
<!--
Author: Anubhav Mathur
-->
<?php
include("header.php");
include("database.php");
extract($_POST);
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome To ::</title>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Invitation Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->


		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<?php

if (!isset($_SESSION[login]))
{

	header("Location: index2.php");
		
	exit;
}
?>
</head>
<body>

<!--/start-login-one-->
<div class="main">
	<h1>Welcome To</h1>
	<div class="invite-01">
		<div class="invite-head">
			<h2>Subject for Quiz<span></span></h2>
		</div>
		<div class="one-invite">
			<lable></lable>
			<form action="sublist2.php">
				
				<div class="submit">
					<input type="submit" onclick="myFunction()" value="Choose Subject" >
				</div>
						
				</form>
			
			</div>
		</div>
		<!--second-invitation-->
		<div class="invite-02">
		<div class="invite-two-head">
			<h3>Result<span></span></h3>
		</div>
		<div class="two-invite">
			<lable></lable>
			<form class="second" action="result2.php">
				
				<div class="submit two">
					<input type="submit" onclick="myFunction()" value="Show Results" >
				</div>
						
				</form>
			</div>
		</div>
	</div>
	
<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2015  All rights  Reserved | BIT Mesra, Ranchi, India</p>
			</div>
	</div>
	<!--//end-copyright-->
</body>
</html>