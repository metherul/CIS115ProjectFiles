<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	processScores4.php
		Purpose:Process a file containing a list of scores, each ona separate line
		Input: fileName received from processScores4.html
		Output: A list of the scores stored in the file

-->
<html>
<head>
	<title>STUDENT SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<h1> STUDENT SCORES </h1>

<?php
	include ("incNumericFileFunctions.php");

	$fileName = $_POST['fileName'];

	printData($fileName);

	$avgScore = getAverage($fileName);
	$numScores = getCount($fileName);
	print ("Number of Scores: $numScores<br />");
	print ("Average Score: $avgScore<br />");

?>

</body>
</html>
