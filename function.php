<?php
	$home_url = "http://".$_SERVER["HTTP_HOST"]."/";
	$file_name = basename( $_SERVER['PHP_SELF'], ".php" );
	if($file_name !== "index"){
		$body_class = basename(dirname($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]))." ".$file_name;
	}else{
		$body_class = basename(dirname($_SERVER['PHP_SELF']));
		if($body_class == ""){
			$body_class = "home";
		}
	}
?>