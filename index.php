<?php 

session_start();

	$country_city = [
		"Japan" => "Tokyo",
		"Mexico" => "Mexico City",
		"USA" => "New York",
		"India" => "Mumbai",
		"Korea" => "Seoul",
		"China" => "Shanghai",
		"Nigeria" => "Lagos",
		"Philippines" => "Manila"
	];

	$country_city ["Argentina"] = "Buenos Aires"; // Add Items in our associative array.
	$country_city ["China"] = "Beijing"; // Changed Shanghai to Beijing
	// var_dump($country_city); 
	// Remove item from associative array using unset() method.
 	// Syntax: unset($array["key"]);
 	// unset($country_city["Korea"]);

 	//Array Splice removes an item and the other items after it. 
 	


	//Challenge: Display all the country-city pairs using foreach loop in the following format: city is in country.


	// foreach ($country_city as $country => $city) {
	// 	echo "$city is the capital of $country <br>";
	// }


	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Associative Arrays Activity</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery-3.3.1.min.css"></script>

	<link href="https://fonts.googleapis.com/css?family=Cardo|Oxygen" rel="stylesheet">

</head>
<body>
	

	<div class="container">
		<div class="row">
			<header class="col-12">
				<nav class="navbar navbar-expand-lg navbar-light float-right mr-5">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">About</a>
      <a class="nav-item nav-link" href="#">Collection</a>
      
    </div>
  </div>

</nav>
			</header>
			<main>
				<h1>A Poem About Countries and Cities</h1>
				<small>Written By Darren</small>
				<section class="places">
					<?php foreach ($country_city as $country => $city) { ?>
					<p><?php echo "$city is the capital of $country.";
					?>
						
					</p>
					<?php } ?>

				</section>
				<section class="input">
					<form action="validate.php" method="GET">
						<label for="">Country: </label>
						<input type="text" name="country" class="form-control" placeholder="Enter a country">
						<?php if (isset($_SESSION["empty_country"])): ?>
							<span class="text-danger"> <?php echo $_SESSION["empty_country"]; ?> </span>
							<?php unset($_SESSION["empty_country"]); ?>	
						<?php endif; ?>
						

	
						<br>
						<label for="">City: </label>
						<input type="text" name="city" class="form-control fc2" placeholder="Enter a country">
						<?php if (isset($_SESSION["empty_city"])): ?>
							<span class="text-danger"> <?php echo $_SESSION["empty_city"]; ?> </span>
							<?php unset($_SESSION["empty_city"]); ?>	
						<?php endif; ?>
						<br>
						<button class="btn hvr-shutter-out-horizontal">Submit</button>
						

						<?php 
							$user_country = $_SESSION["country"];
							$user_city = $_SESSION["city"];

							$countries_cities["$user_country"] = "$user_city";
							foreach ($countries_cities as $country => $city) { ?>
							<p><?php echo "$city is the capital of $country."; ?></p>
  						<?php } ?>

					
					</form>
				</section>
			</main>
		</div>
	</div>





	<script src="js/script.js"></script>
</body>
</html>