<?php session_start(); ?>
<?
if(empty($_SESSION['login_user']))
{
echo'<script> window.location="login.php"; </script> ';
}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
$geturl = curPageURL();
@include("inc/config.php");
@include("inc/languages/$lang.php");
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Zippax&#8482; | Restaurant Control Panel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- ZippaxCss -->
    <link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light|Raleway' rel='stylesheet' type='text/css'>
	<? if($lang == "ar"){ echo '<link rel="stylesheet" href="css/arabic.css">'; } ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
	
	</div>
	<div class="leftMenu">
		 <!-- Sidebar -->
		<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<?=$zi_controlTitle;?>
		</li>
		
		<li>
		<a href="index.php?do=browse_all"><?=$zi_browse;?></a>
		</li>
		<li>
		<a href="index.php?do=new_cat"><?=$zi_newCategory;?></a>
		</li><li>
		<a href="index.php?do=new_item"><?=$zi_newItem;?></a>
		</li>
		<li>
		<a href="index.php?do=update_info"><?=$zi_restaurantInfo;?></a>
		</li>
		<li>
		<a href="index.php?do=update_password"><?=$zi_changePassword;?></a>
		</li>
	
		<li >
		<a style="color:#52cce6" href="index.php?do=logout"><span class="glyphicon glyphicon-log-out"></span> <?=$zi_logout;?></a>
		</li>
		
		</ul>
		</div>
		<!-- /#sidebar-wrapper -->
	</div>
	
	<div class="page">
		<?
		$getDo = $_GET['do'];
		$do=$_GET['do'].".php";
		if($_GET['do']){
			@include("inc/$do");
		}
		if(!$getDo){
			echo'<script> window.location="index.php?do=browse_all"; </script> ';
		}
		?>
	</div>
	
   
   
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>