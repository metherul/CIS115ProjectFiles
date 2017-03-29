<!--	Author: Ethan Green
		Date:   March 28
		File:	My CDs.php
-->
<!-- COMPLETED -->
<html>
<head>
	<title>My CDs</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

<?php

	// Not a pretty way to go about things.
	$file = fopen ("myCDs.txt", "r");

	// Line (1
	$childArray = explode(":", fgets($file));
	$year1 = $childArray[0];
	$title1 = $childArray[1];
	$sold1 = $childArray[2];
	$price1 = $childArray[3];

	// Line 2
	$childArray = explode(":", fgets($file));
	$year2 = $childArray[0];
	$title2 = $childArray[1];
	$sold2 = $childArray[2];
	$price2 = $childArray[3];

	// Line 3
	$childArray = explode(":", fgets($file));
	$year3 = $childArray[0];
	$title3 = $childArray[1];
	$sold3 = $childArray[2];
	$price3 = $childArray[3];

	fclose($file);



	print("<h1>Here are my CDs</h1>
			<table border = \"1\">
			<tr><th>Year</th><th>Title</th><th>Sold</th><th>Price</th></tr>
			<tr><td>$year1</td><td>$title1</td><td>$sold1</td><td>$price1</td></tr>
			<tr><td>$year2</td><td>$title2</td><td>$sold2</td><td>$price2</td></tr>
			<tr><td>$year3</td><td>$title3</td><td>$sold3</td><td>$price3</td></tr>
			</table>");

?>
</body>
</html>