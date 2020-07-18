<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>
<?php include 'includes/navbar.php';?>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/img1.png" >
			<div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/img2.png">
		</div>
		<div class="carousel-item">
			<img src="img/img3.png">
		</div>
	</div>
</div>




<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>