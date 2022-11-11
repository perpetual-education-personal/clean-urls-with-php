<?php

include('data/projects.php');

function renderProjectsList($projects) {
	foreach ($projects as $project) {
		echo "<h2>$project[title]</h2>";
		echo "<a href='projects/$project[slug]'>projects/$project[slug]</a> → ";
		echo "<a href='?page=project&slug=$project[slug]'>?page=project&slug=$project[slug]</a>";
	}
}

?>



<h1>Projects</h1>

<?php renderProjectsList($projects); ?>
