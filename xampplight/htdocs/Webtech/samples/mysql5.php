<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2012
		File:	mysql5.php
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

$id = $_POST['id'];

$userQuery = "SELECT jobTitle, hourlyWage FROM personnel WHERE empID='$id'";

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
	print("<h1>RESULTS</h1>");
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th><th>Job Title</th>
		 <th>Hourly Wage</th></tr>");
		 
	$row = mysqli_fetch_assoc($result);
	print ("<tr><td>".$id."</td><td>".$row['jobTitle']."</td><td>$".
			number_format($row['hourlyWage'], 2)."</td></tr>");
	print ("</table>");
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
