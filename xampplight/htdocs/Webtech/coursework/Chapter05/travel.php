<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   February 16
	File:	travel.php
	Purpose:Chapter 5 Exercise
-->
<!-- COMPLETED -->

<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Travel to Rome</h1>

	<?php
		$numTravelers = $_POST['numTravelers'];
		$numNights = $_POST['numNights'];
		$airlineCost = $numTravelers * 875;
		$hotelCost = ($numTravelers * $numNights) * 110;
		$totalCost = $airlineCost + $hotelCost;

		print("<p>Number of Travelers: $numTravelers <br/>");
		print("Number of Nights: $numNights <br/>");
		print("Airline Cost: $". number_format($airlineCost) ." <br/>");
		print("Hotel Cost: $". number_format($hotelCost) ."<br/>");
		print("Total Cost: $". number_format($totalCost));

	?>

</body>
</html>
