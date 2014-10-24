	<?
	$sql = mysql_query("SELECT * FROM restaurant_info");
	while($r = mysql_fetch_array($sql)){
	$name = $r[1];
	$address = $r[2];
	$city = $r[3];
	$state = $r[4];
	$zipcode = $r[5];
	$phone = $r[6];
	$email = $r[7];
	$website = $r[8];
	}
	
	$name0 = $_POST[name];
	$address0 = $_POST[address];
	$city0 = $_POST[city];
	$state0 = $_POST[state];
	$zipcode0 = $_POST[zipcode];
	$phone0 = $_POST[phone];
	$email0 = $_POST[email];
	$website0 = $_POST[website];
	$submit = $_POST[update];
	if($submit){
	$update = mysql_query("UPDATE restaurant_info SET r_name= '$name0', 
													  r_address = '$address0', 
													  r_city='$city0', r_state='$state0', 
													  r_zipcode='$zipcode0', 
													  r_phone='$phone0', 
													  r_email='$email0', 
													  r_website='$website0'");
	if($update){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?do=update_info&update=1">';
	}
	}
	if($_GET['update'] == "1"){
	echo '<div class="alert alert-success" role="alert">
      <?=$zi_update_alart;?>
    </div>';
	}
	?>
	

<form action="index.php?do=update_info" method="post">
	
<table class="table">
  <tr>
  <td>
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_nameWord;?>" value="<?=$name;?>" name = "name" tabindex=1><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_addressWord;?>" value="<?=$address;?>" name = "address" tabindex=3><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_stateWord;?>" value="<?=$state;?>" name = "state" tabindex=5><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_emailWord;?>" value="<?=$email;?>" name = "email" tabindex=7><br />

  </td>
  <td>
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_phoneWord;?>" value="<?=$phone;?>" name = "phone" tabindex=2><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_zipcodeWord;?>" value="<?=$zipcode;?>" name = "zipcode" tabindex=4><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_cityWord;?>" value="<?=$city;?>" name = "city" tabindex=6><br />
		<input type="text" class="form-control"  autocomplete="off" style="width:300px;" placeholder="<?=$zi_websiteWord;?>" value="<?=$website;?>" name = "website" tabindex=8><br />
  </td>
  </tr>
    <tr>
  <td><input type="submit"  value="<?=$zi_updateBtn;?>" class="btn btn-primary" name="update" tabindex=10></td>
  </tr>
</table>

<form />


