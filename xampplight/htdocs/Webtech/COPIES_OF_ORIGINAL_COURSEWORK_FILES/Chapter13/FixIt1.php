<!DOCTYPE html>
<!--Author:
	Date:
	File:	  FixIt1.php
	Purpose:  What's wrong here? The getWage() function is
			  one of the functions provided in a file named
			  incWageFunctions.php. This program uses the getWage()
			  function but this generates an error message.
			  Can you fix it? What statement is missing?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 12.75;
		$hoursWorked = 45;
		$wage = getWage($hourlyWage, $hoursWorked);

		print("<p>Your hourly wage is $$hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
	?>
</body>
</html>
