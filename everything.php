<?php

session_start(); //start PHP Session


$_SESSION['spotjsvalue'] = $_POST["spotname"]; //store the posted value in a php session variable
$_SESSION['instajsvalue'] = $_POST["instaname"]; //store the posted value in a php session variable
$_SESSION['flickrjsvalue'] = $_POST["flickrname"]; //store the posted value in a php session variable
$_SESSION['twitterjsvalue'] = $_POST["twittername"]; //store the posted value in a php session variable
$_SESSION['youtubejsvalue'] = $_POST["youname"]; //store the posted value in a php session variable
$_SESSION['everythingjsvalue'] = $_POST["everyname"]; //store the posted value in a php session variable



$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST["everyname"];
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["everyname"];    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["everyname"];    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["everyname"];    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["everyname"];    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
fwrite($fh, $webData);
$stringData = $_POST["everyname"];    
fwrite($fh, $stringData);
fclose($fh);



?>

<p>Please check that the following information is correct: </p>

Spotify subject is: <?php echo $_POST["everyname"]; ?> <br />
Instagram subject is: <?php echo $_POST["everyname"]; ?> <br />
Flickr subject is: <?php echo $_POST["everyname"]; ?> <br />
Twitter subject is: <?php echo $_POST["everyname"]; ?> <br />
YouTube subject is: <?php echo $_POST["everyname"]; ?> <br />

<input type="button" value="No Take Me Back" onclick="location.href='modern.php'" />
<input type="button" value="Continue" onclick="location.href='Regular.php'" />
