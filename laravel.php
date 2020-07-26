<!DOCTYPE html>
<html lang="en">
<head>
  <title>IT World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include 'includes/menu.php';
	?>
	
	<div class="container">
	
		<div class="jumbotron">
		<div class="row">
			<div class="col-2">	
				<img class="img-thumbnail mx-3" style="width:100px; float:left;" src="img\logos\laravel.png" />
			</div>
			<div class="col-10">
				<h3>
					As I have decided to learn Laravel, 
					so I will keep my notes here ...
				</h3>
				<p>I know it's shit, make it better and show it ;)</p>
			</div>
		</div>			
		</div>
	
		<a href="https://laravel.com/">  Laravel </a>
		<hr />
		<p>There some links to video tutorials</p>
		<a href="https://www.youtube.com/watch?v=ubfxi21M1vQ"> LARAVEL essentials you need to know in 45 minutes </a> <br />
		<a href="https://www.youtube.com/watch?v=bkyjiXSx6WE"> Laravel Tutorial For Beginners | What Is Laravel? | Laravel Training Part - 1 | Edureka </a>
		<hr />
		<a href="https://youtu.be/ubfxi21M1vQ?t=1875">continue tomorrow</a>
		<!--
		<div class="embed-responsive embed-responsive-16by9">
			<iframe width="420" height="315" class="embed-responsive-item" src="https://www.youtube.com/watch?v=ubfxi21M1vQ" allowfullscreen></iframe>
		</div>
		-->

		<div class="mypost border border-primary p-2">
			<div class="row">
				<div class="col-12 p-3">		
					<h4>database</h4>
					<p class="mynote"> and after executing migration there is the view in database </p> 
					<img src="img\laravel\view_in_database.jpg" class = "img-responsive" width = "100%" />
				</div>
			</div>
		</div>

		<div class="mypost border border-primary p-2">
			<div class="row">
				<div class="col-12 p-3">		
					<h4>creating migration</h4>
					<img src="img\laravel\create_migration.jpg" class = "img-responsive" width = "100%" />
					<p class="mynote"> and it's there </p> 
					<img src="img\laravel\migration.jpg" class = "img-responsive" width = "100%" />
				</div>
			</div>
		</div>

		<div class="mypost border border-primary p-2">
			<div class="row">
				<div class="col-12 p-3">		
					<h4>creating model</h4>
					<img src="img\laravel\laravel_create_model.jpg" class = "img-responsive" width = "100%" />
					<p class="mynote">
						So far so good, I have successfully created my first model. <kbd>php artisan make:model Message</kbd> As you see I stoped using PhpStorm. 
						And did it from standard Windows command line. And editing source files in free Notepad++ editor.
					</p>
					<img src="img\laravel\laravel_edit_proj.jpg" class="img-responsive" width="100%" />
					<p class="mynote"> File -> Open Folder As Workspace </p> 
					<p class="mynote"> And there you go my new Message model, simple and elegant using free tools ;) </p> 
					<img src="img\laravel\my_new_model.jpg" class="img-responsive" width="100%" />
					<p class=mynote"> why? ... <a href="https://mattstauffer.com/blog/sublime-text-3-for-php-developers/"> Read Here </a></p>
				</div>
			</div>
		</div>

		<div class="mypost border border-primary p-2">
			<div class="row">
				<div class="col-12 p-3">		
					<h4>creating controller</h4>
					<img src="img\laravel\laravel_create_controler.jpg" class = "img-responsive" width = "100%" />
				</div>
			</div>
		</div>
	
		<div class="mypost border border-primary p-2">
			<div class="row">
				<div class="col-12 p-3">
					<h4>So I have sucessfully created new project</h4>
				</div>
				<div class="col-6 p-3 my-2">
					<p class="mynote">The command used: </p>
					<kbd>composer create-project --prefer-dist laravel/laravel messageboad</kbd>
					<p class="mynote">Or the second command: </p>
					<kbd>laravel new blog </kbd>
					<p class="mynote">
						Need to investigate what's the difference. <br />
						But looks like both similar... about 50 MB and ~8K files in project folder ;)
					</p>
				</div>
				<div class="col-6 p-3 my-2">
					<img src="img/laravel/composer_new_project.jpg" class="img-responsive" width="100%" />
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<p class="mynote">And I setup PhpStorm and can open my new projects in my Host,that were created in Guest. ;) </p>
				
				</div>
				<div class="col-6">				
					<img src="img/laravel/open_project_storm.jpg" class="img-responsive" width="100%" />
				</div>
			</div>			
		</div>
		
	</div>	
	
</body>
</html>