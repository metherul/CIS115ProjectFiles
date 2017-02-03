<!DOCTYPE html>
<!--Author:
	Date:
	File:	Modify3.php
	Purpose:Chapter 9 Exercise

			Modify3.html does not need to be changed. Modify3.php
			reads three wages from a file names wages.txt and displays
			the total. Change this so it uses a loop to do the same thing
			The file actually contains 20 wages so your loop
			should run 20 times.

			Hints: look at the program examples that accumulate a total
			Consider that each time through the loop the program
			will read a single line from the file and add this to the total
			(so you won't need so many wage variables).
			Consider which statements come BEFORE the loop, which are
			IN THE LOOP (statements you want to repeat), and which
			come AFTER the loop.
			The total should be $21710

-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify3</h1>

	<?php

		$wageFile = fopen("wages.txt", "r");
		$wage1 = fgets($wageFile);
		$wage2 = fgets($wageFile);
		$wage3 = fgets($wageFile);
		fclose($wageFile);

		$total = $wage1 + $wage2 + $wage3;
		print("<p>The total wages are  $$total</p>");
	?>


</body>
</html>
