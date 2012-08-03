<?php 
$pollids  = "testFile.txt";
$contents = file_get_contents($pollids);
$pollfields = explode(',', $contents);
?> 

<!DOCTYPE html>
<html><head>

	<meta charset="UTF-8">

	<title>Social Feeder</title>
	
	<link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/jquery.lightbox-0.5.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="js/tinybox.js"></script>
  	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
    <script type="text/javascript">
  var SpotifyArtist = '<?php echo $pollfields[0]; ?>';
  var InstagramSubject = '<?php echo $pollfields[1]; ?>'
  var FlickrTag = '<?php echo $pollfields[2]; ?>';
  var TwitterSubject = '<?php echo $pollfields[3]; ?>'
  var YouTubeSubject = '<?php echo $pollfields[4]; ?>'; 
  

 </script>
 
 <script type="text/javascript" src="js/feeds/spotify.js"></script>
 <script type="text/javascript" src="js/feeds/instagram.js"></script>
 <script type="text/javascript" src="js/feeds/flickr.js"></script>
 <script type="text/javascript" src="js/feeds/twitter.js"></script>
 <script type="text/javascript" src="js/feeds/youtube.js"></script>

</head>
<body>





<style>
table.grid tbody tr th.one {width: 320px;}
table.grid tbody tr th.two { width: 325px; }
table.grid tbody tr th.three { width: 360px; }
table.grid tbody tr th.four { width: 400px; }
table.grid tbody tr th.five { width: 370px; }
table.grid tbody tr th.six { width: 280px; }
</style>

<!-- This is a leaderboard that I've put above the table
 		
	
      <div id="table" style="position:relative; width:2350px;  margin:0 0 0 0;">
        <table style="float: left;">
        <tr>
        <th>
        <a href="http://sportandentertainment.mcsaatchi.com/" target="_blank">
        <img border="0" src="images/header3.png" width="1500"/></div>
        </a>
        </th>
        </table>
	  </div>

-->

        <table class="grid">
        
        <tr>
		<th class="one"><div id="spotify_header"><img border="0" src="images/spotify.png" /></div> <br/></th>
        <th class="two"><div id="instagram_header"><img border="0" src="images/instagram.png"/></div><br/></th>
        <th class="three"><div id="flickr_header"><img border="0" src="images/flickr.png"/></div><br/></th>
		<th class="four"><div id="twitter_header"><img border="0" src="images/twitter.png"/></div><br/></th>
		<th class="five"><div id="youtube_header"><img border="0" src="images/youtube.png"/></div><br/></th>
   
		</tr>
        
        <tr>
        <td><div id="spotify"><div id="results0"> </div></div> <br> <br>	</td>
		<td><div class='instagram0' id="instagram"></td>
        <td><div id="flickr0"></div> </td>
		<td><div id="tweets"><div id="twitter0"></div></div>
        </td>
       
		<td>

        
       <div id="video0" class="videodiv"></div>
     
        </td>
        
		 
        
        </tr>
        
		<tr>
		<td>   <div id="spotify"><div id="results1"> </div></div> <br> <br>	</td>
        <td><div class='instagram1' id="instagram"></td>
        <td> <div id="flickr1"></div> </td>
        <td><div id="tweets"><div id="twitter1"></div></div>
        </td>
        
        <td>
        
        <div id="video1" class="videodiv"></div>
        </td>
        
         
        
		</tr>
		
        <tr>
		<td>        <div id="spotify"><div id="results2"> </div></div>	</td>
        <td><div class='instagram2' id="instagram"></td>
        <td> <div id="flickr2"></div> </td>
		<td><div id="tweets"><div id="twitter2"></div></div> </td>		
	    <td>
        
        <div id="video2" class="videodiv"></div>
        </td>
        
       

    </tr>
		
</table>

		<script type="text/javascript">
       
	
	
		$(document).ready(function() {
			
			  $('#instagram, instagram3').hide().delay(500).fadeIn(1500);
			  $('#instagram_header').hide().delay(500).fadeIn(1500);
			  
			  for (var i = 0; i < 3; i++) {
			  $('#flickr' + i).hide().delay(1000).fadeIn(1500);
			  }
			  $('#flickr_header').hide().delay(1000).fadeIn(1500);
			  
			  $('#tweets, tweet').hide().delay(1500).fadeIn(1500);
			  $('#twitter_header').hide().delay(1500).fadeIn(1500);
			 
			  for (var i = 0; i < 3; i++) {
			  $('#video' + i).hide().delay(2000).fadeIn(1500);
			  }
			  $('#youtube_header').hide().delay(2000).fadeIn(1500);
			 
			 

        });
		
        </script>
        	
</body>
</html>