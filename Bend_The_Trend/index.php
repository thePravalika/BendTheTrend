<?php
	include("includes/DatabaseClass.php");
	$dbObj = new DatabaseClass(); 
	$con = $dbObj -> connect();
?>


<!DOCTYPE html>
<html>

<head>
	<title>Bend The Trend </title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

	<link href="styles/bootstrap.min.css" rel="stylesheet">

	<link href="styles/style.css" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

	<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
		<div class="container" ><!-- container Starts -->

			<div class="navbar-header"><!-- navbar-header Starts -->

				<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->

					<img src="images/logo2.jpeg" alt="btt logo" class="hidden-xs" >
					<img src="images/logo-small.png" alt="btt logo" class="visible-xs" >

				</a><!--- navbar navbar-brand home Ends -->

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

					<span class="sr-only" >Toggle Navigation </span>

					<i class="fa fa-align-justify"></i>

				</button>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

					<span class="sr-only" >Toggle Search</span>

					<i class="fa fa-search" ></i>

				</button>


			</div><!-- navbar-header Ends -->

			<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

				<div class="padding-nav" ><!-- padding-nav Starts -->

					<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

						<li class="active"><a href="index.php"> Home </a></li>

						<li><a href="shop.php"> Shop </a></li>

						<li><a href="cart.php"> Shopping Cart </a></li>

						<li><a href="about.php"> About Us </a></li>

					</ul><!-- nav navbar-nav navbar-left Ends -->

				</div><!-- padding-nav Ends -->

				<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

					<i class="fa fa-shopping-cart"></i>

					<span><?php $dbObj -> totalItems(); ?>  item(s) in cart </span>

				</a><!-- btn btn-primary navbar-btn right Ends -->

				<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

						<span class="sr-only">Toggle Search</span>

						<i class="fa fa-search"></i>

					</button>

				</div><!-- navbar-collapse collapse right Ends -->

				<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

					<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

						<div class="input-group"><!-- input-group Starts -->

							<input class="form-control" type="text" placeholder="Search" name="user_query" required>

							<span class="input-group-btn"><!-- input-group-btn Starts -->

								<button type="submit" value="Search" name="search" class="btn btn-primary">

									<i class="fa fa-search"></i>

								</button>

							</span><!-- input-group-btn Ends -->

						</div><!-- input-group Ends -->

					</form><!-- navbar-form Ends -->

				</div><!-- collapse clearfix Ends -->

			</div><!-- navbar-collapse collapse Ends -->

		</div><!-- container Ends -->
	</div><!-- navbar navbar-default Ends -->

	<div class="container" id="slider"><!-- container Starts -->

		<div class="col-md-12"><!-- col-md-12 Starts -->

			<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Starts --->

				<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

					<li data-target="#myCarousel" data-slide-to="1"></li>

					<li data-target="#myCarousel" data-slide-to="2"></li>

					<li data-target="#myCarousel" data-slide-to="3"></li>

				</ol><!-- carousel-indicators Ends -->

				<div class="carousel-inner"><!-- carousel-inner Starts -->

					<!-- For the first slide - to be active -->
					<?php

						$get_slides = "select * from slider LIMIT 0,1";
						
						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides=mysqli_fetch_array($run_slides)){

							$slide_name = $row_slides['slide_name'];
							$slide_image = $row_slides['slide_image'];

							echo "

								<div class='item active'>

									<img src='images/slider_images/$slide_image'>

								</div>

								";
						}//end while

					?>
					
					<!-- For the rest of the sliders-->
					<?php

						$get_slides = "select * from slider LIMIT 1,3 ";

						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides = mysqli_fetch_array($run_slides)) {


							//$slide_name = $row_slides['slide_name'];

							$slide_image = $row_slides['slide_image'];

							echo "

							<div class='item'>

								<img src='images/slider_images/$slide_image'>

							</div>

							";

						}//end while

					?>

				</div><!-- carousel-inner Ends -->

				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left carousel-control Starts -->

					<span class="glyphicon glyphicon-chevron-left"> </span>

					<span class="sr-only"> Previous </span>

				</a><!-- left carousel-control Ends -->

				<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

					<span class="glyphicon glyphicon-chevron-right"></span>

					<span class="sr-only"> Next </span>

				</a><!-- right carousel-control Ends -->

			</div><!-- carousel slide Ends --->

		</div><!-- col-md-12 Ends -->

	</div><!-- container Ends -->

	<div id="advantages"><!-- advantages Starts -->
		<div class="container"><!-- container Starts -->

			<div class="same-height-row"><!-- same-height-row Starts -->

				<div class="col-sm-4"><!-- col-sm-4 Starts -->

					<div class="box same-height"><!-- box same-height Starts -->

						<div class="icon">

							<i class="fa fa-heart" ></i>

						</div>

						<h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>

						<p>We are known to provide best possible service ever</p>
						
					</div><!-- box same-height Ends -->

				</div><!-- col-sm-4 Ends -->

				<div class="col-sm-4"><!-- col-sm-4 Starts -->

					<div class="box same-height" ><!-- box same-height Starts -->

						<div class="icon" >

							<i class="fa fa-tags" ></i>

						</div>

						<h3><a href="#" > BEST PRICES </a></h3>

						<p>You can check on all others sites about the prices and than compare with us.</p>

					</div><!-- box same-height Ends -->

				</div><!-- col-sm-4 Ends -->

				<div class="col-sm-4"><!-- col-sm-4 Starts -->

					<div class="box same-height" ><!-- box same-height Starts -->

						<div class="icon" >

							<i class="fa fa-thumbs-up" ></i>

						</div>

						<h3><a href="#" > 100% SATISFACTION GUARANTEED </a></h3>

						<p>Free returns on everything for 3 months.</p>

					</div><!-- box same-height Ends -->

				</div><!-- col-sm-4 Ends -->


			</div><!-- same-height-row Ends -->

		</div><!-- container Ends -->
	</div><!-- advantages Ends -->

	<div id="hot"><!-- hot Starts -->

		<div class="box"><!-- box Starts -->

			<div class="container"><!-- container Starts -->

				<div class="col-md-12"><!-- col-md-12 Starts -->

					<h2>Latest this week</h2>

				</div><!-- col-md-12 Ends -->

			</div><!-- container Ends -->

		</div><!-- box Ends -->

	</div><!-- hot Ends -->


	<div id="content" class="container"><!-- container Starts -->

		<div class="row"><!-- row Starts -->

			<?php

				$dbObj -> getProducts();

			?>

		</div><!-- row Ends -->

	</div><!-- container Ends -->

	<?php

		include("includes/footer.php");

	?>

	<script src="js/jquery.min.js"> </script>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>