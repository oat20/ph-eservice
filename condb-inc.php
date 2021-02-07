<?php
$result = mysqli_connect('localhost',$username,$password, $cf_database);
	//mysql_select_db($cf_database,$result);
	mysqli_query($result, "SET NAMES utf8");
?>