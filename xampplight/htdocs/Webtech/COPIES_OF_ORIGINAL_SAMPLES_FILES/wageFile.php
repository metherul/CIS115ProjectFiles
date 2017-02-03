<!DOCTYPE html>
<!--	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	wageReport3.php
	Purpose: Write a Wage Report to a file
-->
<html>
<head>
	<title>EMPLOYEE WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

<?php
	$timesheetFile =fopen("timesheets.txt","r");

	$emp1 = fgets($timesheetFile);
	$emp2 = fgets($timesheetFile);
	$emp3 = fgets($timesheetFile);

	fclose($timesheetFile);

	list($firstName1, $lastName1, $hours1, $payRate1) = explode (":", $emp1);
	list($firstName2, $lastName2, $hours2, $payRate2) = explode (":", $emp2);
	list($firstName3, $lastName3, $hours3, $payRate3) = explode (":", $emp3);

	$pay1 = $hours1 * $payRate1;
	$pay2 = $hours2 * $payRate2;
	$pay3 = $hours3 * $payRate3;

	$totalPay = 	$pay1 + $pay2 + $pay3;

	$reportFile =fopen("wageReport.txt","w");

	fputs($reportFile, " EMPLOYEE WEEKLY WAGE REPORT \n\n");

	fputs($reportFile, "$lastName1, $firstName1: $$pay1.\n");
	fputs($reportFile, "$lastName2, $firstName2: $$pay2.\n");
	fputs($reportFile, "$lastName3, $firstName3: $$pay3.\n\n");
	fputs($reportFile, "TOTAL PAY: $$totalPay.\n");
	fclose($reportFile);

	print("<p>The wage report has been written to the
		<strong>wageReport.txt</strong> file");

	print (" <p><a href = \"wageFile.html\">Return to wageFile form</a></p> ");
?>

</body>
</html>
