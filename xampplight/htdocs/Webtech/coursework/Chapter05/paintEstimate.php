<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   February 16
	File:	paintEstimate.php
	Purpose:Chapter 5 Exercise
-->
<!-- COMPLETED -->

<html>
<head>
	<title>King Painting</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>King Painting: Paint Estimate</h1>

	<?php
		$roomLength = $_POST['roomLength'];
		$roomWidth = $_POST['roomWidth'];
		$roomHeight = $_POST['roomHeight'];

		$roomArea = ($roomLength * $roomHeight)*2 + ($roomWidth * $roomHeight)*2 + ($roomLength * $roomWidth);
		$paintCost = ceil($roomArea / 400) * 17.00;
		$laborCost = ceil($roomArea / 200) * 25.00;
		$totalCost = $paintCost + $laborCost;

		print("<p>Room Length: $roomLength <br/>");
		print("Room Width: $roomWidth <br/>");
		print("Room Height: $roomHeight <br/>");
		print ("Room Area: $roomArea <br/>");
		print("Paint Cost: $". number_format($paintCost) ." <br/>");
		print("Labor Cost: $". number_format($laborCost) ." <br/>");
		print("Total Cost: $". number_format($totalCost));

	?>

</body>
</html>
