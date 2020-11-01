<?php
	
	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""){
			//echo "Username field is empty...";
			header('location: login.php?msg=null_username');

		}else if(empty($pass)){
			//echo "Password field is empty...";
			header('location: login.php?msg=null_password');

		}else{
			if($uname == $pass){
				//echo "valid user!";
				header('location: home.html');

			}else{
				//echo "invalid user!please register...";
				header('location: login.php?msg=invalid_user');
			}
		}
	}
?>