<?php

function getPageTemplate($page) {
	$path = "templates/pages/$page.php";
	echo $path;
	if ( file_get_contents($path)) {
		include($path);
	} else {
		http_response_code(404);
		include("templates/pages/404.php");
	}
}
