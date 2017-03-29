<!--	Author: Ethan Green
		Date:   March 28
		File:	mySales.php
-->
<!-- COMPLETED -->

<html>
<head>
	<title>My CD Sales: 2014</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>My CD Sales: 2014</h1>

<?php

		// Gotta get creative.
		// Alright, mySales.txt contains 12 lines, so we have to read it 12 times. Rest in peace.
		// This is scary. 
		$file = fopen("mySales.txt", "r");
		$totalSold += fgets($file); 
		$totalSold += fgets($file); 
		$totalSold += fgets($file); 
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		$totalSold += fgets($file);
		fclose($file);

		// Make sure to use number_format() to remove any extra decimals
		$totalProfit = number_format(($totalSold * 8.50), 2);

		print ("TOTAL CDs SOLD IN 2014: $totalSold <br />");
		print ("TOTAL SALES INCOME FOR 2014: $totalProfit <br />");

		if ($totalSold > 1200)
		{
			print ("Good news: Your 2014 sales are higher than 2013. Let’s achieve even higher sales in 2015!");
		}

		else
		{
			print ("Sales have slowed since 2013, it’s important to determine why and take action to increase your online visibility.");
		}

?>
</body>
</html>