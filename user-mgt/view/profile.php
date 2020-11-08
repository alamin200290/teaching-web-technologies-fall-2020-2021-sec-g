<?php
	require('header.php');
	session_start();
	
	$img = "";
	if(isset($_SESSION['img'])){
		$img = $_SESSION['img'];
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>This is profile page</h1>

	<img src="../assets/<?=$img?>" width="100px" height="100px"/>
	<br>

	<form method="post" action="../php/imgCheck.php" enctype="multipart/form-data">
		<input type="file" name="mypic">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
