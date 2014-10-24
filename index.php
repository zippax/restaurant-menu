<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zippax&#8482;</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
					<table class="table">
		
					<?php
					include("admincp/inc/config.php");
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
						  '.$r1[category_name].''.$category_description.'
						  </td>
						  </tr>';

					$data2 = mysql_query("SELECT * FROM items WHERE item_category='$categoryId' ORDER BY item_order asc");
					while($r2=mysql_fetch_array($data2)){
					if($r2[item_description]){
					$item_description = '<br /><br /> <div style="color:#a69f9b;"><span class="glyphicon glyphicon-record"></span> '.$r2[item_description];
					}else{
					$item_description = '';
					}
					echo '
					<tr >
					<td style="width:100%;">
					'.$r2[item_name].'<span style="float:right; margin-right:30px;">'.$currency.''.$r2[item_price].'</span>'.$item_description.'</div>
					</td>
					</tr>';

					}
					}
							?>
		
					</table>
	
	
   
   
					<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
					<!-- Include all compiled plugins (below), or include individual files as needed -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>