<!--	Author: Ethan Green
		Date:   March 29
		File:	orderForm2.php
-->
<!-- COMPLETED -->
<html>
<head>
	<title>CD Orders</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php

		// Miss my comments? 
		// Nothing to really add here, sorry!
		// Copied and pasted code from orderForm1.php, I'm sp lazy.'
		print ("<h1>CD Orders</h1>");

		$cdCount = $_POST['numCDs'];
		$title = $_POST['title'];
		$shippingCost = 0;

		if ($cdCount > 0)
		{
			if ($cdCount <= 4 and $cdCount >= 1)
			{
				$shippingCost = 2.50;
			}

			if ($title == "Hip")
			{
				$individualCost = 7.50;
			}

			else if ($title = "Hep" or $title == "Hop")
			{
				$individualCost = 8.50;
			}	

			$cdCost = number_format($individualCost * $cdCount, 2);
			$totalCost = number_format($cdCost + $shippingCost, 2);

			print ("<p>CD Title: $title <br/>");
			print ("Number of CDs: $cdCount <br/>");
			print ("Cost of CDs: $cdCost$ <br/>");
			print ("Shipping Cost: $shippingCost$ <br/>");
			print ("Total Cost: $totalCost$ </p>");
		}

		else
		{
			print ("<p>ERROR! YOU MUST ORDER AT LEAST 1 CD!</p>");
			print ("<p>Please <a href='orderForm2.html'>try again</a> .</p>");
		}


	?>

</body>
</html>

