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
$stringData = $_POST["spotname"];
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["instaname"] ;    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["flickrname"] ;    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["twittername"] ;    
fwrite($fh, $webData);
fwrite($fh, $stringData);
$webData = ",";
$stringData = $_POST["youname"] ;    
fwrite($fh, $webData);
fwrite($fh, $stringData);
fclose($fh);



?>

<p>Please check that the following information is correct: </p>

Spotify subject is: <?php echo $_POST["spotname"]; ?> <br />
Instagram subject is: <?php echo $_POST["instaname"]; ?> <br />
Flickr subject is: <?php echo $_POST["flickrname"]; ?> <br />
Twitter subject is: <?php echo $_POST["twittername"]; ?> <br />
YouTube subject is: <?php echo $_POST["youname"]; ?> <br />

<input type="button" value="No Take Me Back" onclick="location.href='backend.php'" />
<input type="button" value="Continue" onclick="location.href='index.php'" />
