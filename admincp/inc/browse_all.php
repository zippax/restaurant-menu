	<?
	$order1 = $_POST['order1'];
	$order2 = $_POST['order2'];
	$pId1 = $_POST['id1'];
	$pId2 = $_POST['id2'];
	
	foreach( $order1 as $key => $n ) {
	if($_POST['update']){
	$catId1=$pId1[$key];
	$getUpdate1 = mysql_query("UPDATE categories SET category_order='$n' WHERE id ='$catId1'");
	}
	}
	
	
	foreach( $order2 as $key => $n ) {
	if($_POST['update']){
	$catId2=$pId2[$key];
	$getUpdate2 = mysql_query("UPDATE items SET item_order='$n' WHERE id ='$catId2'");
	}
	}
	
	
	if($getUpdate1 || $getUpdat2){
	echo '<div class="alert alert-success" role="alert">
      '.$zi_update_alart.'
    </div>';
	}
	?>
<table class="table">
<form action="<?=$geturl;?>" method="post">
		
							<?php
					$data1 = mysql_query("SELECT * FROM categories ORDER BY category_order asc");
					$count = mysql_num_rows($data1);
					if($count <1){
					echo $zi_noData;
					}
					while($r1=mysql_fetch_array($data1)){
					$categoryId=$r1[0];
					if($r1[category_description]){
					$category_description = '<br /><br /><span class="glyphicon glyphicon-list-alt"></span> '.$r1[category_description];
					}else{
					$category_description = '';
					}
					echo '<tr style="background:#cc415b; color:#ffffff;">
							  <td style="width:400px;">
							  <input type="hidden" name="id1[]" value="'.$r1[0].'" />
							  <input type="text" name="order1[]" value="'.$r1[category_order].'" style="width:30px; color:#cc415b;   text-align:center;" value="1"/> '.$r1[category_name].''.$category_description.'</td>
							  <td> <a href="index.php?do=update_cat&id='.$r1[0].'" style="color:#ffffff;"><span class="glyphicon glyphicon-edit"></span></a></td>
							  <td><a href="index.php?do=delete_cat&id='.$r1[0].'&name='.$r1[1].'" style="color:#ffffff;"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>';

					$data2 = mysql_query("SELECT * FROM items WHERE item_category='$categoryId' ORDER BY item_order asc");
					while($r2=mysql_fetch_array($data2)){
					if($r2[item_description]){
					$item_description = '<br /><br /> <div style="color:#a69f9b;"><span class="glyphicon glyphicon-record"></span> '.$r2[item_description];
					}else{
					$item_description = '';
					}
					echo '<tr >
							  <td style="width:400px;">
							  <input type="hidden" name="id2[]" value="'.$r2[0].'" />
							  <input type="text" value="'.$r2[item_order].'" name="order2[]" style="width:30px;  text-align:center;" value="1"/> '.$r2[item_name].' - '.$currency.''.$r2[item_price].''.$item_description.'</div></td>
							  <td> <a href="index.php?do=update_item&id='.$r2[0].'" ><span class="glyphicon glyphicon-edit"></span></a></td>
							  <td><a href="index.php?do=delete_item&id='.$r2[0].'&name='.$r2[1].'" ><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>';

					}
					}
							?>
		
    </table>
	
	<br />
	<input type="submit"  value="<?=$zi_updateBtn;?>" name="update" class="btn btn-success" <? if($count <1){ echo 'disabled'; }?>><br /><br />
	<form />