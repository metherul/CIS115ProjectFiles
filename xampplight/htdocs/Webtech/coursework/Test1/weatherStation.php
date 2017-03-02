<!--	Author:  Ethan Green
		Date:    February 21
		File:	 weatherStation.php
		Purpose: Weather exercise
-->
<!-- COMPLETED -->
<html>
	<head>
		<title>Weather Station</title>
		<link rel ="stylesheet" type="text/css" href="weather.css" />
	</head>

	<body>
		<h1>Weather Station</h1>

		<?php
			$highTemperature = $_POST['highTemperature'];
			$lowTemperature = $_POST['lowTemperature'];
			$rainfallAmount = $_POST['rainfallAmount'];
			$estimatedRainfall = round($rainfallAmount, 2);
			$temperatureRange = ceil($highTemperature) - floor($lowTemperature);

			print("<p>Today will be cloudy with a rainfall amount of $estimatedRainfall inches, and a temperature range of $temperatureRange degrees.</p>");

		?>


	</body>
</html>