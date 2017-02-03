<!DOCTYPE html>
<!--Author:
	Date:
	File:	Modify3.php
	Purpose:Chapter 12 Exercise

	Modify3.html provides the user with a form to submit the name of a game player. 
	Modify3.php contains an array that stores the game characters of each player,
	indexed by the player names. The application receives the name submitted by the
	user and uses an IF..ELSE structure to display the correct game character. 
	Modify this by relpacing the entire IF..ELSE structure with a single statement 
	that looks up the game character using the $playerName variable and assigns 
	the correct character to the $character variable. 
	You do not need to change Modify3.html.

-->
<html>
<head>
	<title>Modify 3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>Modify 3</h1>

	<?php
		$gamePlayers['Bob'] = "human";
		$gamePlayers['Mary'] = "dragon";
		$gamePlayers['Christine'] = "wizard";
		$gamePlayers['Joe'] = "dwarf";

		$playerName = $_POST['playerName'];
		
		if ($playerName == "Bob")
			$character = $gamePlayers['Bob'];
		elseif ($playerName == "Mary")
			$character = $gamePlayers['Mary'];
		elseif ($playerName == "Christine")
			$character = $gamePlayers['Christine'];
		elseif ($playerName == "Joe")
			$character = $gamePlayers['Joe'];

		print("<p>$playerName is a $character.</p>");
	?>
</body>
</html>
