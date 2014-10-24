	<?
	$sql = mysql_query("SELECT * FROM categories");
	$in = $_POST['insert'];
	if($in){
	$item_name = $_POST[item_name];
	$item_category = $_POST[item_category];
	$item_order = "0";
	$item_description = $_POST[item_description];
	$item_price = $_POST[item_price];
	$item_image = "";
	$insert = mysql_query("INSERT INTO items (item_name, item_category, item_order, item_description, item_price, item_image) 
										VALUES 
											('$item_name', '$item_category', '$item_order', '$item_description', '$item_price', '$item_image')");
											
											echo '<div class="alert alert-success" role="alert">
      <strong><span class="glyphicon glyphicon-check"></span> Thank You, </strong> Data has been Added.
    </div>';
	}
	?>
	<form action="index.php?do=new_item" method="post">
	<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" placeholder="<?=$zi_item_name_word;?>" name= "item_name" required><br />
	<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><?=$currency;?></div>
      <input class="form-control" name= "item_price" type="text" style="width:60px;" required>
    </div>
  </div>
	
	<br />
    <label><?=$zi_category_word;?>:</label>
	<select class="form-control"  style="width:300px;" name="item_category">
	<?
	while($r = mysql_fetch_array($sql)){
	$category_id = $r[0];
	$category = $r[1];
	echo '<option value="'.$category_id.'">'.$category.'</option>';
	}
	?>
	</select>
	<br />
<textarea class="form-control" rows="3" placeholder="<?=$zi_itemDes;?>" tabindex=9 style="width:300px;" name="item_description"></textarea><br />

<input type="submit"  value="<?=$zi_newBtn;?>" name="insert" class="btn btn-primary"><br />
<form />
