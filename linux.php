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
	
		<div class="jumbotron my-3">There I will put my notes about Linux</div>

		<div class="mypost row border border-primary my-3 p-2">
			<div class="col-6">
				<p class="mynote">
					As I have my laravel/homestead vm up and running at the same time I investigating linux, and today I see that my vm needs updates
				</p>
				<img src="img\vagrant\apt_updates.jpg" class = "img-responsive" width = "100%"/>
				<p class="mynote">So input in cmd <br/> <kbd>sudo apt upgrade</kbd> </p>
				
				<img src="img\vagrant\apt_upgrade.jpg" class = "img-responsive" width = "100%" />
			</div>
			<div class="col-6">
				<p class="mynote">And the result ...</p>
				<img src="img\vagrant\after_upgrade.jpg" class = "img-responsive" width = "100%" />
			</div>
		</div>
	
		<div class="mypost border border-primary my-3 p-2">
			ok, so GRUB
			<hr />
			<img src="img/linux_grub.jpg" />
			<hr />
			looks like it's important part of linux system
		</div>
		
		<div class="mypost border border-primary my-3 p-2">
		What is Ngrok?
		<hr />
		<p class="mynote">
			ngrok is a cross-platform application that enables developers to expose a local development server to the Internet with minimal effort. The software makes your locally-hosted web server appear to be hosted on a subdomain of ngrok.com, 
			meaning that no public IP or domain name on the local machine is needed.
		</p>	
		<hr />
		<a href='https://ngrok.com/'> NGROK: Read more </a>
		and there is a Laravel tutorial
		https://www.youtube.com/watch?v=ImtZ5yENzgE
		
		</div>
		
	</div>	
	
</body>
</html>