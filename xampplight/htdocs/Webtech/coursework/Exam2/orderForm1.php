<!--	Author: Ethan Green
		Date:   March 29
		File:	orderForm1.php
-->
<!-- COMPLETED -->
<html>
<head>
	<title>CD Orders</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		print ("<h1>CD Orders</h1>");

		$cdCount = $_POST['numCDs'];
		$title = $_POST['title'];

		if ($title == "Hip")
		{
			$individualCost = 7.50;
		}

		else if ($title = "Hep" or $title == "Hop")
		{
			$individualCost = 8.50;
		}	

		$cdCost = number_format($individualCost * $cdCount, 2);
		$totalCost = number_format($cdCost + 2.50, 2);

		print ("<p>CD Title: $title <br/>");
		print ("Number of CDs: $cdCount <br/>");
		print ("Cost of CDs: $cdCost$ <br/>");
		print ("Shipping Cost: 2.50$ <br/>");
		print ("Total Cost: $totalCost$ </p>")		
	?>

</body>
</html>

