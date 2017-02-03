<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2007
		File:	addTwoImproved.php
		Purpose:PHP Practice
-->
<html>

<head>
	<title>Add Two Numbers - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

<?php
	if (isset($_POST['number1']))   // this could check any of the form input names
	{
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$result = $number1 + $number2;
		print ("<h1> RESULTS </h1>");
		print (" <p>$number1 + $number2 = $result.</p> ");
		print (" <p><a href = \"addTwoImproved.php\">Return to the Input Form</a></p> ");
	}
	else
	{
?>
	<h1>ADD TWO NUMBERS</h1>
	<form action = "addTwoImproved.php" method = "post" >
		<p>What is the 1st number?<input type = "text" size = "20" name = "number1"  />	</p>
		<p>What is the 2nd number?<input type = "text" size = "20" name = "number2"  /></p>
		<p><input type = "submit" value = "Tell me the sum" name = "submit" /></p>
	</form>
<?php
	}
?>
</body>
</html>
