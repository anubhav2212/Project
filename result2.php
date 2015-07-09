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
<title>Online Quiz  - Result </title>
<link href="css/styleResult.css" rel='stylesheet' type='text/css' />
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
extract($_SESSION);



if (!isset($_SESSION[login]))
{

	header("Location: index2.php");
		
	exit;
}
$rs=mysqli_query($cn,"select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'") or die(mysqli_error($cn));

?>

<h1>Result</h1>
		<div class="app-location">
			<?php if(mysqli_num_rows($rs)<1)
{
         echo "<br><br><h2>You have not given any quiz</h2>";
	exit;
}
?>
		</div>
            <div class="app-location">
                <?php
                echo "<table border=1 align=center><tr class=style2><td width=300>Test Name <td> Total<br> Question <td> Score";
                while($row=mysqli_fetch_row($rs))
                {
                echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
                echo "<br />";
                }
                echo "</table>";
?>
            </div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | Template by Anubhav Mathur</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>