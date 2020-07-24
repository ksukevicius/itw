<!DOCTYPE html>
<html lang="en">
<head>
  <title>IT World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include 'includes/menu.php';
	?>
	
	<div class="container">
	
		<div class="jumbotron my-3">As I have decided to learn Laravel, so I will keep my notes here ...</div>
	
		<a href="https://laravel.com/">  Laravel </a>
		<hr />
		<p>There some links to video tutorials</p>
		<a href="https://www.youtube.com/watch?v=ubfxi21M1vQ"> LARAVEL essentials you need to know in 45 minutes </a>
	
	
		<div class="border border-primary my-3 p-2">
			<h2>So I have sucessfully created new project</h2>
			<hr>
			The command used: <pre>composer create-project --prefer-dist laravel/laravel messageboad</pre>
			<img src="img/laravel/composer_new_project.jpg" />
			<br />
			Or the second command: <pre>laravel new blog </pre>
			<hr>
			Need to investigate what's the difference. <br />
			But looks like both similar... about 50 MB and ~8K files in project folder ;)<br>
			And I setup PhpStorm and can open my new projects in my Host,that were created in Guest. ;) <br>
			<img src="img/laravel/open_project_storm.jpg" />
			
		</div>
		
	</div>	
	
</body>
</html>