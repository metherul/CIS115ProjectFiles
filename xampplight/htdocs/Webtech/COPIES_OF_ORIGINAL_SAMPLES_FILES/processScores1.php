<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	processScores1.php
		Purpose:Process a file containing a list of scores, each ona separate line
		Input: fileName received from processScores1.html
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
	$fileName = $_POST['fileName'];	

	$scoreFile =fopen("$fileName", "r");

	$score = fgets($scoreFile);

	while (!feof($scoreFile))
	{
		print ("$score<br />");
		$score = fgets($scoreFile);
	}

	fclose($scoreFile);

	print("<p>END OF FILE REACHED</p>");
?>

</body>
</html>
