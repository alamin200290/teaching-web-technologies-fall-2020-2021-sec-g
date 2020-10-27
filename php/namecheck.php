<?php
	
	//$_GET
	//$_POST
	//$_REQUEST

	//print_r($_GET);
	//$name = $_GET['sname'];
	//$pass = $_GET['pass'];
	//$name	=	$_POST['sname'];
	//$id	=	$_POST['pass'];
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['sname'];
		$pass = $_REQUEST['pass'];
		echo $name. "<br>".$pass;	
	}else{
		echo "error...";
	}

?>