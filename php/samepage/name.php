<?php
		
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['sname'];
		$pass = $_REQUEST['pass'];
		echo $name. "<br>".$pass;	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" >
		Name: <input type="text" name="sname"> <br>
		Password: <input type="password" name="pass"> <br>
		<input type="submit" name="submit" value="Click">
	</form>
</body>
</html>