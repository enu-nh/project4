<?php
	$home_url = "http://".$_SERVER["HTTP_HOST"].'/project4/';
	$body_class = basename(dirname($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]));
	if($body_class == "localhost"){
		$body_class = "home";
	}
?>