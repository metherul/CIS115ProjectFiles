<!DOCTYPE html>
<!--Author:
	Date:
	File:	Modify2.php
	Purpose:Chapter 6 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(Modify2.html) and a PHP progam (Modify2.php).

	Modify2.html includes a form that consists only of a Submit button
	When the button is pressed, Modify2.php runs, opens the file
	capitalInfo.txt which contans a list of four countries and capital
	cities. The program reads and displays the country and capital city
	from the first line.

	Modify Modify2.php so that it reads and displays all four countries and
	capital cities in the capitalInfo.txt file.

-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$capitalFile = fopen("capitalInfo.txt","r");	// open the file for read operations
		$countryRecord1 = fgets($capitalFile);			// read a line from the file
		fclose($capitalFile);

		list ($country1, $capital1) = explode(":", $countryRecord1);

		print("<p>$capital1 is the capital city of $country1.</p>");

	?>

</body>
</html>
