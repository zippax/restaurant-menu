	<?
	$getId = $_GET['id'];
	$sql = mysql_query("SELECT * FROM categories");
	$in = $_POST['update'];
	
	$data = mysql_query("SELECT * FROM items WHERE id='$getId'");
	while($row = mysql_fetch_array($data)){
	$uitem_name = $row[1];
	$uitem_category = $row[2];
	$uitem_description = $row[item_description];
	$uitem_price = $row[item_price];
	}
	if($in){
	$item_name = $_POST[item_name];
	$item_category = $_POST[item_category];
	$item_order = "0";
	$item_description = $_POST[item_description];
	$item_price = $_POST[item_price];
	$item_image = "";
	
	mysql_query("UPDATE items SET item_name='$uitem_name', item_price='$item_price', item_category='$item_category', item_description='$item_description' WHERE id='$getId'");
		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?do=update_item&u=1&id='.$getId.'">';
		
	}

	if($_GET[u]=="1"){
	echo '<div class="alert alert-success" role="alert">
      '.$zi_update_alart.'
    </div>';
	}
	
	$ca = mysql_query("SELECT * FROM categories WHERE id='$uitem_category'");
	while($cr = mysql_fetch_array($ca)){
	$ca_name = $cr['1'];
	}
	
	?>
	<form action="index.php?do=update_item&id=<?=$getId;?>" method="post">
	<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" value="<?=$uitem_name;?>" name= "item_name" required><br />
	<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input class="form-control" name= "item_price" value="<?=$uitem_price;?>" type="text" style="width:60px;" required>
    </div>
  </div>
	
	<br />
    <label><?=$zi_category_word;?>:</label>
	<select class="form-control"  style="width:300px;" name="item_category">
	<option value="<?=$uitem_category;?>"><?=$ca_name;?></option>
	<?
	while($r = mysql_fetch_array($sql)){
	$category_id = $r[0];
	$category = $r[1];
	echo '<option value="'.$category_id.'">'.$category.'</option>';
	}
	?>
	</select>
	<br />
<textarea class="form-control" rows="3" tabindex=9 style="width:300px;" name="item_description"><?=$uitem_description;?></textarea><br />

<input type="submit"  value="<?=$zi_updateBtn;?>" name="update" class="btn btn-primary"><br />
<form />
