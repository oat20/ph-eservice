<?php
header ('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

date_default_timezone_set('Asia/Bangkok'); //set datetime thailand
$cf_database='ph_servicelink';

if($_SERVER['HTTP_HOST']=='localhost' or $_SERVER['HTTP_HOST']=='127.0.0.1'){
	$username='root'; $password='12345678';
	$livesite="http://".$_SERVER['HTTP_HOST']."/www2/ph/eservice/"; //on localhost
}else{
	$username='chakkapan'; $password='shk,g-hk';
	$livesite="http://".$_SERVER['HTTP_HOST']."/eservice/"; //on server
}

$cf_section=array(
	"internet"=>array("name"=>"Internet","color"=>"primary"),
	"intranet"=>array("name"=>"Intranet","color"=>"info")
);
?>