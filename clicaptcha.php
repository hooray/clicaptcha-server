<?php
	header("Access-Control-Allow-Origin: http://localhost:8080");
	header('Access-Control-Allow-Credentials: true');

	require('clicaptcha.class.php');
	
	$clicaptcha = new clicaptcha();
	if($_POST['do'] == 'check'){
		echo $clicaptcha->check($_POST['info'], false) ? 1 : 0;
	}else{
		$clicaptcha->creat();
	}
?>