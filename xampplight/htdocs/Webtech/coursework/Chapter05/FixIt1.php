<!DOCTYPE html>
<!--Author:   Ethan Green
	Date:     February 16
	File:	  FixIt1.php
	Purpose:  What's wrong here? When you run the program the browser
			  DISPLAYS the three PHP assignment statements instead
			  of executing them. Then it does not display the results
			  correctly! HINT: remember that ALL PHP code must be
			  enclosed within .... ????
-->
<!-- COMPLETED -->
<html>

<head>
	<title>Wage Report</title>
	<link rel="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>WAGE REPORT</h1>
	<?php
		$hourlyWage = 15.75;
		$hoursWorked = 19;
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
	?>
</body>

</html>