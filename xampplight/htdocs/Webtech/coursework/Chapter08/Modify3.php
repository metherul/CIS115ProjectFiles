<!DOCTYPE html>
<!--Author: Ethan Green
	Date:   March 16
	File:	Modify3.php
	Purpose:Chapter 8 Exercise

	Modify this so that if the user selects the right city, the
	program displays the message "<p>That is correct!</p>"
	Otherwise the the program displays a message that includes the
	city selected by the user and the country where the city is located.
	The message will be only one of the following:
	"<p>You entered London, which is the capital city of England.</p>"
	"<p>You entered Madrid, which is the capital city of Spain.</p>"
	"<p>You entered Istanbul, which is the capital city of Turkey.</p>"
	"<p>You entered Rome, which is the capital city of Italy.</p>"
	This will require multiple selection structures. For help take
	a look at artGallery.php and jokester.php in the samples folder

-->
<!-- COMPLETED -->
<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify3</h1>

	<?php
		$capital = $_POST['capital'];

		if ($capital == "Cairo")
		{
			print("<p>That is correct.</p>");
			print("<p>The capital of Egypt is Cairo</p>");
		}

		else if ($capital == "London")
		{
			print("<p>You entered London, which is the capital city of England.</p>");
		}

		else if ($capital == "Madrid")
		{
			print("<p>You entered Madrid, which is the capital city of Spain.</p>");
		}

		else if ($capital == "Istanbul")
		{
			print("<p>You entered Istanbul, which is the capital city of Turkey.</p>");
		}

		else if ($capital == "Rome")
		{
			print("<p>You entered Rome, which is the capital city of Italy.</p>");
		}

		// Can't wait until we're using Switch Statements. These IF statements did not feel good to write.

	?>

</body>
</html>
