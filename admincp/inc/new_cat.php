	<?
	$category_name = $_POST['category_name'];
	$category_description = $_POST['category_description'];
	if($_POST['add']){
	mysql_query("INSERT INTO categories (category_name,category_order, category_description) VALUES ('$category_name','0','$category_description')");
	?>
	<div class="alert alert-success" role="alert">
      <?=$zi_insert_alart;?>
    </div>
	<?
	}
	?>
<form action="index.php?do=new_cat" method="post">
<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" name="category_name" placeholder="<?=$zi_cate_name_word;?>" required><br />
<textarea class="form-control" rows="3" style="width:300px;" name="category_description"  placeholder="<?=$zi_desc_word;?>..."></textarea><br /><br />

<input type="submit" name="add"  value="<?=$zi_newBtn;?>" class="btn btn-primary"><br />
</form>
<br />
	<div style="width:500px;">
	<?=$zi_ourList;?><br />
	<?
	$sql = mysql_query("SELECT * FROM categories");
	while($r = mysql_fetch_array($sql)){
	$category_id = $r[0];
	$category = $r[1];
	echo '<code>#'.$category.'</code> ';
	}
	?>
	</div>