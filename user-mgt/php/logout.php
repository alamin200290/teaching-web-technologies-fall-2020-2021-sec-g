<?php

	//session_start();
	//session_destroy();

	setcookie('isValid', 'true', time()-1000, '/');
	header('location: ../view/login.php');

?>