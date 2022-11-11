
<?php

	include('data/projects.php');

	$foundProject = null;

	if ( isset($_GET['page']) && isset($_GET['slug'])  ) {

		foreach ($projects as $project) {
			if ($project['slug'] == $_GET['slug']) {
				$foundProject = $project;
			}
		}

		var_dump( $foundProject );

	}
?>


<h1><?=$foundProject['title']?></h1>
