<?php
	session_start();
?>

<!--	Author: Mike O'Kane
		Date:	December 2007
		File:	mathQuit.php
		Purpose: Web session example
-->
<html>

<head>
	<title>Math Quiz - RESULT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

<?php
		print ("<h1>Thanks for Playing! </h1>");
		print("<h2>YOU SCORED ".$_SESSION['score']." OUT OF ".$_SESSION['count']."</h2>");
		session_destroy();
		print (" <p><a href = \"mathQuiz.php\">Try Again?</a></p> ");
	

?>

</body>
</html>
