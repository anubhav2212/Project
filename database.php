<?php
$cn=mysqli_connect("localhost","root","","students") or die("Could not Connect to My Sql");
mysqli_select_db($cn,"students")  or die("Could connect to Database");
?>
