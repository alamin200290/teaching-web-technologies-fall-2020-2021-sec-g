<?php

	if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}
	}

	/*if(isset($_COOKIE['rm'])){
		header('location: home.php');
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../php/loginCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>