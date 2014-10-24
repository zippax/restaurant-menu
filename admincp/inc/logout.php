<?php
session_start();
if(!empty($_SESSION['login_user']))
{
$_SESSION['login_user']='';
}
echo'<script> window.location="login.php"; </script> ';

?>
