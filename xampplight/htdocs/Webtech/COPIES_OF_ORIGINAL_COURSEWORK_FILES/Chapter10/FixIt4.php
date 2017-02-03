<!DOCTYPE html>
<!--Author:
	Date:
	File:	  FixIt4.php
	Purpose:  What's wrong here?
			  The program is supposed to calculate and display the
			  average once, of all the ages in the ages.txt file, but
			  instead of displaying the average just once it displays
			  the average every time it reads a new age from the file!
			  (Hint: moving ONE line will fix the display problem but
			  moving TWO lines will save the program from performing
			  unncessary calculations!)
-->

<html>
<head>
	<title>FixIt4</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<?php
		$total = 0;
		$count = 0;
		$agesFile = fopen("ages.txt", "r");
		$nextAge = fgets ($agesFile);

		while (!feof($agesFile) )
		{
			$total = $total + $nextAge;
			$count = $count + 1;

			$averageAge = $total / $count;
			print ("<p>AVERAGE AGE: $averageAge</p>");

			$nextAge = fgets ($agesFile);
		}
		fclose ($agesFile);
	?>
</body>
</html>
