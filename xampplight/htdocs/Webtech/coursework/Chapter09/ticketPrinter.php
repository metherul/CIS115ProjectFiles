<!DOCTYPE html>
<!--	Author:
		Date:
		File:	ticketPrinter.php
		Purpose: Chapter 9 Exercise
-->

<html>
<head>
	<title>Ticket Printer</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$ticketFile = fopen ("ticketCount.txt", "r");
		$totalTickets = fgets($ticketFile);
		fclose ($ticketFile);

		// Add a FOR loop here to display all the tickets, numbered from 1 to 
		// the total number of tickets. For example, here is how three tickets 
		// might print for a Rolling Stones concert:
		
		//	------------------------------------------------------
		//	ADMIT 1: Rolling Stones TICKET #1
		//	------------------------------------------------------
		//	ADMIT 1: Rolling Stones TICKET #2
		//	------------------------------------------------------
		//	ADMIT 1: Rolling Stones TICKET #3
		//	------------------------------------------------------

		
		
		// You may find this print statement useful:
				
		print("<p>------------------------------------------------------</p>");
?>
</body>
</html>
