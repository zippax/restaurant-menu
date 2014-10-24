<?
$getId = $_GET['id'];
$getName = $_GET['name'];

$delete1 = @mysql_query("DELETE FROM categories WHERE id = '$getId' AND category_name='$getName'");
$delete2 = @mysql_query("DELETE FROM items WHERE id = '$getId' AND category_name='$getName'");

if($delete1){
$delete3 = @mysql_query("DELETE FROM items WHERE item_gategory = '$getId'");
}

		echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=index.php?do=browse_all">';

?>