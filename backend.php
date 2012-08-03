

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modern Way</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<h1> Welcome to the Back-End! </h1>

<body>
<p><strong> Either </strong> fill the subjects in seperatly: </p>
 
<form action="Intermediate_BackEnd.php" method="post">
Spotify Subject: <input type="text" name="spotname"  placeholder="Enter Spotify Subject"/><br />
Instagram Subject - One word only: <input type="text" name="instaname"  placeholder="Enter Instagram Subject"/><br />
Flickr Subject: <input type="text" name="flickrname"  placeholder="Enter Instagram Subject"/><br />
Twitter Subject: <input type="text" name="twittername"  placeholder="Enter Instagram Subject"/><br />
YouTube Subject: <input type="text" name="youname" placeholder="Enter Instagram Subject"/><br />

<input type="submit" />
</form>

<p><strong> Or </strong> fill the everything field: </p>

<form action="everything.php" method="post">
One Word Please! (thanks instagram) <br />
Spotify, Instagram, Flickr, Twitter and YouTube: <input type="text" name="everyname" placeholder="Every Subject Will Be.."/>

<input type="submit" />
</form>

</body>
</html>


	