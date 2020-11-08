<?php
	//session_start();

	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""){
			//echo "Username field is empty...";
			header('location: ../view/login.php?msg=null_username');

		}else if(empty($pass)){
			//echo "Password field is empty...";
			header('location: ../view/login.php?msg=null_password');

		}else{
			if($uname == $pass){

				//$_SESSION['isValid'] = "true";

				/*if(){
					setcookie('rm', 'true', time()+3600000, '/');
				}*/
				
				setcookie('isValid', 'true', time()+3600, '/');
				header('location: ../view/home.php');

			}else{
				//echo "invalid user!please register...";
				header('location: ../view/login.php?msg=invalid_user');
			}
		}
	}else{
		header('location: login.php');
	}
?>