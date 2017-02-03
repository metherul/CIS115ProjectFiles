<!DOCTYPE html>
<!--		Author: 	Mike O'Kane
		Date:	December 21, 2007
		File:		mileageLog.php
		Purpose:	Example of appending data to a file
-->
<html>
<head>
	<title>Mileage Log</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
	<?php
		$mileage = $_POST['mileage'];
		
		$logFile =fopen("mileageLog.txt","a");
		fputs($logFile, "$mileage\n");
		fclose($logFile );

		print (" <h1>Your mileage submission ($mileage) has been recorded:</h1>");
		print (" <p><a href = \"mileageLog.html\">Submit another mileage</a></p> ");
	?>
</body>
</html>
