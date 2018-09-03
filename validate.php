<?php
	$myemail = "doctor@udom.ac.tz";
	$mypass = "1234";

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$rem = $_POST['remember'];

		if( $email == $myemail and $pass = $mypass ){
			if(isset($_POST['remember'])){
				setcookie('email', $email, time()+60*60*7);
				setcookie('pass', $pass, time()+60*60*7);
			}
			session_start();
			$_SESSION['email'] = $email;
			header("Location: ?page=news");	
		} else {
			echo "Invalid<a href='?page=home'>Try Again</a>";
		}

	}//else{
	//	header("Location: ?page=login");
	//}
?>