	<?
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$e_mail = $_POST['email'];
	$submit = $_POST['update'];
	
	
	if($submit){
	if($password == $repassword){
	$update = mysql_query("UPDATE users SET username='$username', password='$password'");
	echo '<div class="alert alert-success" role="alert">
      '.$zi_update_alart.'
    </div>';
	}else{
	echo '<div class="alert alert-danger fade in" role="alert">
      '.$zi_passwordWrong.'
    </div>';
	}
	}
	$sql=mysql_query("SELECT * FROM users");
	while($r=mysql_fetch_array($sql)){
	$email = $r['email'];
	}
	?>
<form action="index.php?do=update_password" method="post">
<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" placeholder="<?=$zi_newUserWord;?>" name="username" required><br />
<input type="password" class="form-control" id="name" autocomplete="off" style="width:300px;" placeholder="<?=$zi_PassWord;?>" name="password" required><br />
<input type="password" class="form-control" id="name" autocomplete="off" style="width:300px;" placeholder="<?=$zi_conPassWord;?>" name="repassword" required><br />
<lable style="color:green"><?=$zi_emailWord;?></lable><br /><br />
<input type="text" class="form-control" id="name" autocomplete="off" style="width:300px;" value="<?=$email;?>" name="email" disabled required><br />
<input type="submit" name="update" value="<?=$zi_updateBtn;?>" class="btn btn-primary"><br />
<form />