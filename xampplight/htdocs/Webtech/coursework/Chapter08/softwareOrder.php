<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   March 16
	File:	softwareOrder.php
	Purpose:Chapter 8 Exercise
-->
<!-- COMPLETED -->
<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>YOUR ORDER:</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		
		if ($numCopies < 1)
		{
			print("<p><strong>ERROR! You must order at least one copy!</strong></p>");
		}

		else
		{
			$subTotal = $numCopies * 35.00;
			$salesTax = $subTotal * 0.07;

			if ($numCopies < 5) // 3.50
			{
				$shippingAndHandling = 3.50;	
			}

			else if ($numCopies < 10) // f(9) = 6.75 - I had this IF statement as "if ($shippingAndHandling < 10)". Took me 10 minutes to fix it.
			{
				$shippingAndHandling = $numCopies * 0.75;
			}

			else // f(10) = 8.5
			{
				$shippingAndHandling = $numCopies * 0.85;
			}

			$totalCost = $subTotal + $salesTax + $shippingAndHandling;

			print("<table border = \"2\"><tr><td>Operating System</td><td>$os</td></tr>");
			print("<tr><td>Number of copies</td><td>$numCopies</td><td>");
			print("<tr><td>Sub-total</td><td align=\"right\">$".number_format($subTotal, 2)."</td></tr>");
			print("<tr><td>Sales tax</td><td align=\"right\">$".number_format($salesTax, 2)."</td></tr>");
			print("<tr><td>Shipping and handling</td><td align=\"right\">$".number_format($shippingAndHandling, 2)."</td></tr>");
			print("<tr><td>TOTAL:</td><td align=\"right\">$".number_format($totalCost, 2)."</td></tr></table>");
		}

	?>

</body>
</html>
