<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Choose Quiz</title>
<link href="css/style_showtest.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="App Loction Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<?php
include("header.php");
include("database.php");


if (!isset($_SESSION[login]))
{

	header("Location: index2.php");
		
	exit;
}




extract($_GET);



$rs1=mysqli_query($cn,"select * from mst_subject where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);

$rs=mysqli_query($cn,"select * from mst_test where sub_id=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}


echo "</table>";
?>
	<h1><?php echo "<font color='blue'>$row1[1]</font>" ?></h1>
		<div class="app-location">
			<h2>Select Quiz Name to Give Quiz</h2>
			<div class="line"><span></span></div>
			<form>
				<?php
				echo "<br />";
				while($row=mysqli_fetch_row($rs))
					{
						echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4><font color='sky blue'>$row[2]</font></font></a>";
						echo "<br />";
					} ?>
				<div class="clear"></div>
				
			</form>
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | BIT Mesra</p>
		</div>
	<!--//end-copyright-->
	
</body>
</html>