<?
@header('Content-type: text/html; charset=utf-8');
// CONNECT TO DATABASE 
$host 		= "localhost";
$user 		= "root";
$password   = "";
$dbname		= "zi_restaurant";
$con = mysql_connect($host,$user,$password);
mysql_select_db($dbname,$con);

// SETTING

$lang		= "en";
$currency	= "$";
?>