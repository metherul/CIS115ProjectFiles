<?php
include ("incHead.php");
include("incErrorMessages.php");
include ("incCompanyInfo.php");
include ("incNumericFileFunctions.php");

print ("<h1>SALES REPORT FOR ".$companyInfo['name']."</h1>");
$fileName = "salesData.txt";
if (file_exists($fileName)) {
	$total = getTotal ($fileName);
	$count = getCount ($fileName);
	if ($count == 0)
			print ($errorMessage['emptyFile']);
	else {
		$avgSale = $total /$count;
		print ("<p>TOTAL SALES: $".number_format($total,2)."<br />");
		print ("AVERAGE (BY SALES PERSON): $".number_format($avgSale,2)."</p>");	
	}
}
else
	print ($errorMessage['fileNotFound']);

print ("<p>Email: ".$companyInfo['email']." Phone: ".$companyInfo['phone']."</p>");

include ("incFoot.php");
?>
