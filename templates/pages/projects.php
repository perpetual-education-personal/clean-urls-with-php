<?php

$projects = [
	[
		"id" => 0,
		"slug" => "project-one",
		"title" => "Project number one",
	],
	[
		"id" => 1,
		"slug" => "project-two",
		"title" => "Project number two",
	],
	[
		"id" => 2,
		"slug" => "project-three",
		"title" => "Project number three",
	],
];

function renderProjectsList($projects) {
	foreach ($projects as $project) {
		echo "<h2>$project[title]</h2>";
		echo "<a href='projects/$project[slug]'>projects/$project[slug]</a> - ";
		echo "<a href='?page=project&slug=$project[slug]'>?page=project&slug=$project[slug]?></a>";
	}
}
?>



<h1>Projects</h1>

<?php renderProjectsList($projects); ?>
