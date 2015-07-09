<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Successful Login :: </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<style type="text/css">
body{
	background:url(./images/bg.jpg) ;
}	
.wrap{
	margin:0 auto;
	width:1000px;
}
.title{
	margin-bottom: 40px;
}	
.title h1{
	font-size:100px;
	color:yellow;
	text-align:center;
	margin-top:100px;
	text-shadow:6px 1px 6px #333;
	font-family: 'Fjalla One', sans-serif;
}
.title h2{
	font-size:100px;
	color:yellow;
	text-align:center;
	margin-bottom:1px;
	
	font-family: 'Fjalla One', sans-serif;
	margin-top: -20px;
}
.title h2 a{
	color: white;
}
.logo p{
	color:white;
	font-size:25px;
	margin-top:1px;
	font-family: 'Fjalla One', sans-serif;
}	
.gray {
	margin-bottom: 20px;
	background: rgba(12, 52, 77, 0.34);
	text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
	border-radius: 4px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	color:yellow;
	text-decoration:none;
	padding:30px 30px;
	font-size: 20px;
	font-weight:bold;
	font-family: 'Fjalla One', sans-serif;
	text-align: center;
}	
.ag-3d_button.orange {
	box-shadow: rgba(155, 142, 50, 0.98) 0 3px 0px, rgba(0, 0, 0, 0.3) 0 3px 3px;
}
.ag-3d_button {
	vertical-align: top;
	border-radius: 4px;
	border: none;
	padding: 10px 25px 12px;
}
.orange {
	background: #fdde02;
	background: -moz-linear-gradient(top,  #fdde02 0%, #dec829 99%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fdde02), color-stop(99%,#dec829));
	background: -webkit-linear-gradient(top,  #fdde02 0%,#dec829 99%);
	background: -o-linear-gradient(top,  #fdde02 0%,#dec829 99%);
	background: -ms-linear-gradient(top,  #fdde02 0%,#dec829 99%);
	background: linear-gradient(to bottom,  #fdde02 0%,#dec829 99%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdde02', endColorstr='#dec829',GradientType=0 );
	color:#fff;
	text-shadow:1px 1px 3px rgba(155, 142, 50, 0.98);
	border: 1px solid rgba(155, 142, 50, 0.98);
	text-decoration: none;
}
.orange:hover {
	background: #dec829;
	background: -moz-linear-gradient(top,  #dec829 1%, #fdde02 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#dec829), color-stop(100%,#fdde02));
	background: -webkit-linear-gradient(top,  #dec829 1%,#fdde02 100%);
	background: -o-linear-gradient(top,  #dec829 1%,#fdde02 100%);
	background: -ms-linear-gradient(top,  #dec829 1%,#fdde02 100%);
	background: linear-gradient(to bottom,  #dec829 1%,#fdde02 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dec829', endColorstr='#fdde02',GradientType=0 );
}
.footer{
	color:white;
	position:absolute;
	right:10px;
	bottom:10px;
}	
.footer a{
	color:yellow;
}	
</style>
</head>
<body>
	<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query($cn,"select * from mst_user where login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1><font size=6>Login Id Already Exists</font></div>";
	echo "<h2><a href='signup2.php'><font color='black'>Signup here</font></a></h2>";
	exit;
}
$query="insert into mst_user(login,pass,username) values('$lid','$pass','$name')";
$rs=mysqli_query($cn,$query)or die("Could Not Perform the Query");
?>
	<div class="wrap">
	   <div class="logo">
	   		<p>Company Name</p>
	   </div>
	   <div class="title">
	  		 <h1>You've Successfully Signed Up With Login Id <?php echo $lid?></h1>
	   		 <h2><a href="index2.php">Login Here</a></h2>
			 
	  </div>
	</div>
	
	<div class="footer">
	 Design by-Anubhav Mathur
	</div>
</body>