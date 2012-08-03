<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>


<?php 

$myFile = "testFile.txt";
$lines = file($myFile);//file in to an array
echo $lines[0];
echo $lines[1];
echo $lines[2];
echo $lines[3];
echo $lines[4];
?>





<body>
</body>
</html>