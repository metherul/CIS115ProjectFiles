<?php
include ("incHead.php");
include("incErrorMessages.php");
include ("incCompanyInfo.php");
print ("<h1>SALES REPORT FOR ".$companyInfo['name']."</h1>");

$fileName = "salesData.txt";
if (file_exists($fileName)) {
	$salesfile = fopen($fileName, "r");
	$total = 0;
	$count = 0;
	$nextSalesPerson = fgets($salesfile);
	while (!feof($salesfile))
	{ 
		$total = $total + $nextSalesPerson;
		$count = $count + 1;
		$nextSalesPerson = fgets($salesfile);
	}
	fclose ($salesfile);
	
	if ($count == 0)
			print ($errorMessage['emptyFile']);
	else {
		$avgSale = $total / $count;
		print ("<p>TOTAL SALES: $".number_format($total,2)."<br />");
		print ("AVERAGE (BY SALES PERSON): $".number_format($avgSale,2)."</p>");	
	}
}
else
print ($errorMessage['fileNotFound']);

print ("<p>Email: ".$companyInfo['email']." Phone: ".$companyInfo['phone']."</p>");

include ("incFoot.php");
?>