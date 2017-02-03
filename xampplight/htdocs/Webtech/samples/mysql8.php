<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2012
		File:	mysql8.php
		Purpose:MySQL Example
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>

<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$searchName = $_POST['searchName'];

$userQuery = "SELECT personnel.firstName, personnel.lastName, personnel.hourlyWage, timesheet.hoursWorked FROM personnel, timesheet WHERE personnel.empID = timesheet.empID";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>PAY CHECKS</h1>");

	while ($row = mysqli_fetch_assoc($result))
	{
		$weeklyPay = $row['hourlyWage'] * $row['hoursWorked'];
		print ("<p>PAY TO: ".$row['firstName'].
			" ".$row['lastName']." THE SUM OF $".
			number_format($weeklyPay,2)."</p>");
	}

}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
