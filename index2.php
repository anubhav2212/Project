<?php
session_start();
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Simple Login Form Responsive Widget Template :: w3layouts</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($cn,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{

	header("Location: index4.php");
		
	exit;
}

?>
<!--/start-login-one-->


<h1>Simple Login Form</h1>
		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>User Login</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form name="form1" method="post" action="">
				<ul>
					<li>
						<div class=" icon user"></div><input name="loginid" type="text" class="text" id="loginid2" value="Login ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
					</li>
					 <li>
						<div class=" icon lock"></div><input name="pass" type="password" value="Password" id="pass2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						
					 </li>
				</ul>
	
			<div class="submit">
				<input name= "submit" type="submit" id="submit" value="Login" onclick="myFunction()">
			</div>
			<h3>Not Registered? Click Here->  <a href="signup2.php"> SignUp</a></h3>
			</form>
			 
			
		</div>

<?php
		  if(isset($found))
		  {
		  	echo "<p><center><font color='black'><font size=6>Invalid Username or Password. Try Again</font></font></center></p>";
}
		  ?>
 

<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | BIT Mesra, Ranchi,India</p>
		</div>
	<!--//end-copyright-->
</body>
</html>