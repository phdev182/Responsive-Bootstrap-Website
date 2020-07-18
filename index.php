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
			<img src="img/background.png" >
			<div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background2.png">
		</div>
		<div class="carousel-item">
			<img src="img/background3.png">
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
	<p class="lead">A web hosting service allows individuals and 
	organizations to make their website accessible via the Word Wide Web.</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
	<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
	</div>
</div>
</div>

<!--- Welcome Section -->
<div class="container-fuid padding">
<div class="row welcome text-center">
	<div class="col-12">
	<h1 class="display-4">Build with ease</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Welcome to my Bootstrap 4 Website tutorial! 
		 Bootstrap is a free and open-source front-end library with HTML and CSS based design.</p>
	</div>

</div>
</div>

<!--- Three Column Section -->
<div class="container-fuid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-code"></i>
		<h3>HTML</h3>
		<p>Build with the latest version of the HTML, HTML 5.</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bold"></i>
		<h3>BOOTSTRAP</h3>
		<p>Build with the latest version of the bootstrap, Bootstrap 4.</p>
	</div>
	<div class="col-sm-12 col-sm-6 col-md-4">
		<i class="fab fa-css3"></i>
		<h3>CSS3</h3>
		<p>Build with the latest version of the CSS, CSS 3.</p>
	</div>
</div>
<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fuid padding">
<div class="row padding">
	<div class="col-lg-6">
		<h2>If you build it...</h2>
		<p>The columns will automatically on top of each other when 
			the screen is less than 576px wide.</p>
			<p>Risize the browser window to see the effect. Responsive web 
			design has become more important as the amount of mobile traffic now 
			accounts for more than half of total internet traffic</p>
			<p>It can also display the web page differently depending on the 
			sreen size or viewing device.</p>
			<br>
			<a href="#" class="btn btn-primary">Learn More</a>
	</div>
	<div class="col-lg-6">
		<img src="img/desk.png" class="img-fluid" />
	</div>
</div>	
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
	<div id="fixed">
	</div>
	</div>
</figure>
<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
<div class="row text-center">
<div class="col-sm-6 col-md-3">
	<img class="gif" src="/img/gif/panda.gif" />
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="/img/gif/poo.gif" />
	</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="/img/gif/unicorn.gif" />
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="/img/gif/chicken.gif" />
</div>
</div>
</div>	
</div>
  
<!--- Featured Units -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
	<h1 class="display-4">Featured Units</h1>
	</div>
<hr>
</div>
</div>

<!--- Cards -->
<divc class="container-fluid padding">
<div class="row padding">
	<div class="col-md-4">
	<div class="card">
		<img class="card-img-top" src="img/team1.png" />
		<div class="card-body">
			<h4 class="card-tittle">Jhon Doe</h4>
			<p class="card-text">Joe is a internet intrepreneur with almost 20 years of experience.</p>
			<a href="#" class="btn btn-outline-secondary">See Profile</a>
		</div>
	</div>
	</div>
	<div class="col-md-4">
	<div class="card">
		<img class="card-img-top" src="img/team2.png" />
		<div class="card-body">
			<h4 class="card-tittle">Mary Jo</h4>
			<p class="card-text">Mary is a designer with almost 10 years of digital design experience.</p>
			<a href="#" class="btn btn-outline-secondary">See Profile</a>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<div class="card">
		<img class="card-img-top" src="img/team3.png" />
		<div class="card-body">
			<h4 class="card-tittle">Phil Ho</h4>
			<p class="card-text">Phil is a developer with over 5 years od
			web development experience.</p>
			<a href="#" class="btn btn-outline-secondary">See Profile</a>
		</div>
	</div>
	</div>
</div>
</div>

<!--- Two Column Section -->
<divc class="container-fluid padding">
<div class="row padding">
	<div class="col-lg-6">
		<h2>Our Philosophy</h2>
		<p>We know that greatness is a disruptive era requires bold ambition,
		curious talent and a culture that believes we´re smarter together.</p>
			<p>We approach every challenge holistically, with best-inclass expertise, 
			in data, creativity, media, technology, search, social and more. We call this Alchemy. 
			It has the power to build our clients' brands and transform their business.
			And while it may seem like magic, we've go it down to a science.</p>
	</div>
	<div class="col-lg-6">
		<img src="img/bootstrap2.png" class="img-fluid" />
	</div>
</div>
<hr class="my-4">
</div>


<!--- Connect -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-google-plus-g"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>
</div>
</div>
<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>
</body>
</html>