<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	rainfall4.php
		Purpose:Example of using nested loops
		Input: File containing a year, followed by 12 monthly rainfall amounts
		Output: HTML document containing year, the name of each month,
				and a bar chart that displays each monthly rainfall value
-->
<html>
<head>
	<title>RAINFALL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
	<?php
		$rainDataFile =fopen("rainfall2007.txt","r");

		$year = fgets($rainDataFile);
		print ("<h1>RAINFALL SUMMARY FOR $year</h1>");

		print("<table border = \"1\" >");
		print ("<tr><td>MONTH</td><td>RAINFALL</td></tr>");
		print ("<tr>");

		for ($count= 1; $count <= 12; $count = $count + 1)
		{
			$nextRainfallAmount = fgets($rainDataFile);
			if ($count == 1)
				print("<td>January</td>");
			elseif ($count == 2)
				print("<td>February</td>");
			elseif ($count == 3)
				print("<td>March</td>");
			elseif ($count == 4)
				print("<td>April</td>");
			elseif ($count == 5)
				print("<td>May</td>");
			elseif ($count == 6)
				print("<td>June</td>");
			elseif ($count == 7)
				print("<td>July</td>");
			elseif ($count == 8)
				print("<td>August</td>");
			elseif ($count == 9)
				print("<td>September</td>");
			elseif ($count == 10)
				print("<td>October</td>");
			elseif ($count == 11)
				print("<td>November</td>");
			else
				print("<td>December</td>");

			print ("<td>");

			$chartLength = ceil($nextRainfallAmount);

			for ($numInches = 1; $numInches <= $chartLength; $numInches = $numInches + 1)
			{
				print("<img src = \"InchOfRain.jpg\" >");
			}
			print("</td>");
			print("</tr>");
		}
		fclose($rainDataFile);
		print("</table>");
	?>
</body>
</html>