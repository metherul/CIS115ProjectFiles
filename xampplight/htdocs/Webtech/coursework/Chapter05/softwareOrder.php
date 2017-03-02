<!DOCTYPE html>
<!--	Author: Ethan Green
		Date:   February 16
		File:	softWareOrder.php
		Purpose:Chapter 5 Exercise
-->
<!-- COMPLETED -->
<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Your Order</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		$subTotal = $numCopies * 35.00;
		$tax = $subTotal * .07;
		$shippingHandling = $numCopies * 1.25;
		$totalCost = $subTotal + $tax + $shippingHandling;

		print("<p>Operating System: $os <br/>");
		print("Copies Purchased: $numCopies <br/>");
		print("Sub Total: $". number_format($subTotal) ." <br/>");
		print("Tax: $". number_format($tax) ." <br/>");
		print("Shipping and Handling: $". number_format($shippingHandling) ." <br/>");
		print("Total Cost: $". number_format($totalCost) ." <br/>");
	?>

</body>
</html>
