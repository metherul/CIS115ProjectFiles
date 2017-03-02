<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   February 16  
	File:	Modify1.php
	Purpose:Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(Modify1.html) and a PHP progam (Modify1.php).

	Modify1.html should include a form that prompts the user for their age
	and submits this to Modify1.php for processing. Modify1.html has been
	provided and can be used as-is.

	Modify1.php should: receive the age from the $_POST array;
	calculate the number of years until they retire
	(assume they retire at 65); calculate the number of years they have
	worked so far (assume they have worked since 18 years old);
	display their age, years to retire, and years they have worked so far.

	Modify1.php already contains the code to calculate and display the
	numbers of years to retirement. You must add the code to calculate
	and display the years worked so far.

-->
<!-- COMPLETED -->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Modify1</h1>

	<?php
		$age = $_POST['age'];
		$yearsToRetire = 65 - $age;
		$yearsWorked = $age - 18;

		print("<p>Your age is $age, you have worked for $yearsWorked years, and you have $yearsToRetire years until retirement.</p>");
	?>

</body>
</html>
