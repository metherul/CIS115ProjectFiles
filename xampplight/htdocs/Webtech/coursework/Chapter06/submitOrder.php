<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   March 2
	File:	SubmitOrder.php
	Purpose:Chapter 6 Exercise

-->
<!-- COMPLETED -->
<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>SaveTheWorld: Submission Results</h1>

	<?php
		$operatingSystem = $_POST['os'];
		$copyAmount = $_POST['numCopies'];
		$writeFile = fopen("order.txt", "w");

		fputs($writeFile, "$operatingSystem:$copyAmount \n");

		fclose($writeFile);

		print("<p>Your order had been received and will be processed shortly");
	?>

</body>
</html>
