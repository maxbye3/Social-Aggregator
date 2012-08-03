
  /*
   * 
   * YouTube
   * 
   */


var page = 1;
var query;

function jasoncalling(query,maxresults,startindex){

   $.getJSON('http://gdata.youtube.com/feeds/api/videos?q='+query+'&alt=json-in-script&callback=?&max-results='+maxresults+'&start-index='+startindex, function(data) { 
        var videoloop =0;
		var videolist =[];
		var videodesc = [];
		$.each(data.feed.entry, function(i, item) {
	    var title = item['title']['$t'];
	    var video = item['id']['$t'];
		var content = item['content']['$t'];
	    video = video.replace('http://gdata.youtube.com/feeds/api/videos/','http://www.youtube.com/watch?v=');
	    videoID = video.replace('http://www.youtube.com/watch?v=','');
		videolist[videoloop] = videoID;
		videodesc[videoloop] = content;
		videoloop= videoloop+1;

			if(videoloop == 3)
			{
				defaultvideo(videolist,videodesc)
			}
		  });
	    });
      }

	function defaultvideo(videolist,videodesc)
	{
		var picloop;
			for(picloop=0; picloop <= 2; picloop++)
			{
				var thevideopicdiv = document.getElementById('video'+picloop);
				thevideopicdiv.innerHTML = '<div style="cursor:pointer;" desc="'+escape(videodesc[picloop])+'" name="http://www.youtube.com/v/'+videolist[picloop]+'&hl=en_GB&fs=1&" id="videopics"><img style="z-index:1; position:absolute;" src="http://i.ytimg.com/vi/'+videolist[picloop]+'/default.jpg" width="320px"><img style="filter: alpha(opacity=50); opacity:0.4; z-index:999; position:relative;" src="images/videocover.png" width="320px"></img></img>  </div>';
			}
		return false;
	}


	$(document).ready(function() {
		$('#errorbox').click(function(){
	});
    
jasoncalling(YouTubeSubject,3,page);

$('#submitsearch').click(function(){
page = 1;
query = $('#searchbox').val();
	if(query == '') 
	{
	$('#errorbox').show(1000).html('Please enter some search query');
	}
	else
	{
			jasoncalling(query,3,page) }
	});

	$('#videopics').live("click",
		function(){
		var videolink = $(this).attr('name');
		var videodesc = $(this).attr('desc');
		
		newwindow=window.open(videolink,'name','height=480,width=800');
		if (window.focus) {newwindow.focus()}
		
		});
  });



	