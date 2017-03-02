<!--	Author:  Ethan Green
		Date:    February 21
		File:	 convertTemp.php
		Purpose: Weather exercise
-->
<!-- COMPLETED -->
<html>
	<head>
		<title>Temperature Conversion</title>
		<link rel ="stylesheet" type="text/css" href="weather.css" >
	</head>
	<body>
		<h1>Convert to Celsius</h1>

		<?php
			$initialTemp = $_POST['initialTemp'];
			$finalTemp = ($initialTemp - 32) / (9 / 5);

			print("<p>$initialTemp degrees Fahrenheit converts to $finalTemp degrees Celcius.</p>")
		?>

		<p>
			<a href = "convertTemp.html">Convert another?</a><br />
			<a href = "weather.html">Today's Weather</a>
		</p>

	</body>
</html>