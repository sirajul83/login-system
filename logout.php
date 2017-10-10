<?php
	session_start();
	if (!$_session['user']) {
		header("Location:loginform.php");
	}else{
		session_start();
		session_destroy();
		header("Location:loginform.php");
	}
?>