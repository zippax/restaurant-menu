<?
include("admincp/inc/config.php");

/*----------------------
	   VARIABLES
----------------------*/
$name 	 = "r_name";
$address = "r_address";
$city	 = "r_city";
$state	 = "r_state";
$zipcode = "r_zipcode";
$phone	 = "r_phone";
$email	 = "r_email";
$website = "r_website";
//---------------------


function data($name){
$information = @mysql_query("SELECT * FROM restaurant_info");
$data = mysql_fetch_array($information);
echo $data[$name];
}

// to view data, Example: @data($address);

?>