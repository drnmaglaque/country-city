<?php 

	session_start();

	$input_country = $_GET["country"];
	$input_city = $_GET["city"];
	$url = "localhost/mod07/mod07-03/";

	function authenticate($country, $city) {
		if ($country != "" && $city != "") {
			return true;
		} else {
			return false;
		}
	}

	function redirect($page) {
		header("Location: $url".$page);
	}

	if ($input_country == "") {
		$_SESSION["empty_country"] = "Please enter a country.";
	} 
	if ($input_city == "") {
		$_SESSION["empty_city"] = "Please enter a city";
	} 

	if ($input_city != "" && $input_country != "") {
		redirect("index.php");
	}

	if (authenticate($input_country, $input_city)) {
		// Using $_SESSION.
		$_SESSION["country"] = $input_country; // Remember that this $_SESSION variable is an associative array. It contains a key which in this case is "user" and a value which is $username.
		$_SESSION["city"] = $input_city; // Remember that this $_SESSION variable is an associative array. It contains a key which in this case is "user" and a value which is $username.
		redirect("index.php"); 
		// echo "Welcome, {$username}";
	} else {
		//"Wrong Username or Password";
		redirect("index.php");
	}

 ?>