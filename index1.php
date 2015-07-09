<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz1.css" rel="stylesheet" type="text/css">
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
echo "<div class='welcome_head'><h1 class='style8' align=center>Wel come to Online Exam</h1></div>";

echo '<div class = "help_img"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></div>
    <div class="subj_link"> <a href="sublist.php" class="style4">Subject for Quiz </a></div>
    <div class="deg_img"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></div>
    <div class="result_link"> <a href="result.php" class="style4">Result </a></div>';
   
exit;
		

}


?>
<table width="100%" border="0">
    <div class="user_login_head" align="center" class="style1">User Login </div>
  
    <div class="welcome_head">
        <h1 class="style8">Wel come to Online Quiz</h1>
    </div>      

<div class="pathshala_img">
<img src="image/paathshala.jpg" width="129" height="100">
</div>
<div class="help_img">
<img src="image/HLPBUTT2.JPG" width="50" height="50">
</div>
<div class="bookpg_img">
<img src="image/BOOKPG.JPG" width="43" height="43">
</div>
        
          
<div class="intro_text">
<p align="left" class="style5"><span class="style7">Wel Come to Online 
            exam. This Site will provide the quiz for various subject of interest. 
            You need to login for the take the online exam.</p>
</div>
          <div class="form"><form name="form1" method="post" action="">
          <div class="login_text">Login ID </div>
          <div class="login_name_space"><input name="loginid" type="text" id="loginid2"></div>
        
          <div class="pass_text>Password</div>
          <div class="pass_tet_space"><input name="pass" type="password" id="pass2"></div>
          

<div class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
 
        
          <div class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </div>
                  
		<div class="new_user_text">New User ? <a href="signup.php">Signup Free</a></div>

      <div class="topleft_img">
        <img src="images/topleft.jpg" width="134" height="128">          
      </div>
    </form>
</div>

</body>
</html>
