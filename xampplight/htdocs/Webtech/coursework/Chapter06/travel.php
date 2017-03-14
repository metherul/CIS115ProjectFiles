<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   March 2
	File:	travel.php
	Purpose:Chapter 6 Exercise

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

		$writeFile = fopen("reservations.txt", "a");
		fputs($writeFile, "Rome:$numTravelers:$numNights \n");
		fclose($writeFile);

		print("<p>Your reservation has been received.");

	?>

</body>
</html>
