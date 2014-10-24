<?
$getId = $_GET['id'];
$getName = $_GET['name'];
$submit = $_POST['submit'];
if($submit){

$delete3 = @mysql_query("DELETE FROM items WHERE id = '$getId' AND item_name='$getName'");
if($delete3){
echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?do=browse_all">';
}
}
?>
<div class="alert alert-danger fade in" role="alert">
       <?=$zi_delete_item;?>
    </div>
<form action="<?=$geturl;?>" method="post">
<input type="submit" name="submit"  value="<?=$zi_yesBtn;?>" class="btn btn-primary">
<a type="button" name="back" class="btn btn-primary" href="index.php?do=browse_all"><?=$zi_noBtn;?></a>
</form>