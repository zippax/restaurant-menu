	<?
	$getId = $_GET['id'];
	
	$sql = mysql_query("SELECT * FROM categories WHERE id='$getId'");
	while($r = mysql_fetch_array($sql)){
	$catName = $r['category_name'];
	$cat_description = $r['category_description'];
	}
	$category_name = $_POST['category_name'];
	$category_description = $_POST['category_description'];
	if($_POST['update']){
	mysql_query("UPDATE categories SET category_name='$category_name', category_description='$category_description' WHERE id='$getId'");
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?do=update_cat&u=1&id='.$getId.'">';
	}
	?>
	
	<?
	if($_GET[u]=="1"){
	echo '<div class="alert alert-success" role="alert">
      '.$zi_update_alart.'
    </div>';
	}
	?>
<form action="index.php?do=update_cat&id=<?=$getId;?>" method="post">
<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" name="category_name" value="<?=$catName;?>" required><br />
<textarea class="form-control" rows="3" style="width:300px;" name="category_description"><?=$cat_description;?></textarea><br /><br />
<input type="submit" name="update"  value="<?=$zi_updateBtn;?>" class="btn btn-primary"><br />
</form>
