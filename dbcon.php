<?php
global $con;
$con = mysqli_connect("localhost","carolche_eric","33#NO#Skbv6e","carolche_blog");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
function clean($str) {
	$str = @trim($str);
	if (get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}
?>
