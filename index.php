<?php
include('functions.php');

// router

$page = 'home';
if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
}

include('menu.php');


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

getPageTemplate($page);

