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
	
		<div class="jumbotron my-3">
			<div class="row">
				<div class="col-2">	
					<img class="mx-3" style="width:100px; float:left;" src="img\logos\linux.png" />
				</div>
				<div class="col-10">
					<h3>
						There I will put my notes about Linux
					</h3>
				</div>
			</div>			
		</div>

		<div class="mypost row border border-primary my-3 p-2">
			<div class="col-6">
				<p class="mynote">
					I have my Laravel/Homestead vm up and running and there is Apache web server on this machine, but looks like this service is not setup to start automatically. 
					Need to take a look how to configure service to start automatically.
				</p>
				<p class="mynote">
					The second way to check service status<kbd class="mykbd">systemctl status apache2</kbd>and the result is the same apache2 service is not started. 
					<img src="img\linux\apache_service2.jpg" class = "img-responsive" width = "100%" />
					And I don't want to do it manually every time I start my VM.
				</p>
				<p class="mynote"> 
					is it that simple... ?
					<kbd class="mykbd">sudo systemctl enable apache2</kbd> 
					just one command
					<img src="img\linux\apache2_started.jpg" class = "img-responsive" width = "100%" />
				</p>
				<p><a href="https://linuxconfig.org/how-to-start-service-on-boot-on-ubuntu-20-04" target="_blank">More info there</a></p>
			</div>
			<div class="col-6">
				<p class="mynote"><kbd>service --status-all</kbd></p>
				<img src="img\linux\apache_service.jpg" class = "img-responsive" width = "100%" />
			</div>
		</div>

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