<?php
	$url = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
	switch($_SERVER["PHP_SELF"]){
		case '/project4/index.php':
			$body_class = home;
			break;
		case '/project4/signup/signup.php':
			$body_class = signup;
			break;
		case '/project4/signup/confirm.php':
			$body_class = signup;
			break;
		case '/project4/signup/complete.php':
			$body_class = signup;
			break;
	}
	
?>