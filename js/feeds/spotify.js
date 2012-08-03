  
  /*
   * 
   * Spotify
   * 
   */




jQuery.ajaxSettings.traditional = true; 

var embed = '<iframe src="https://embed.spotify.com/?uri=TRACK_URI" style="width:260px; height:340.5px;" frameborder="0" allowTransparency="true">';

function fetchArtistPlaylist(SpotifyArtist,  wandering, variety) {
    var url = 'http://developer.echonest.com/api/v4/playlist/static?api_key=FHPFXUKUGHZWWUXPR&callback=?';
    $("#all_results").hide();
    info("Creating the playlist ...");
     $.getJSON(url, { 'artist': SpotifyArtist, 'format':'jsonp', 
            'bucket': [ 'id:spotify-WW', 'tracks'], 'limit' : true,
            'results': 3, 'type':'artist-radio', 'variety' : variety,
            'distribution' : wandering ? 'wandering' : 'focused' }, function(data) {
		
					
		info("");
		$("#results0").empty();
		$("#results1").empty();
		$("#results2").empty();
        $("#all_results").show();

        for (var i = 0; i < data.response.songs.length; i++) {
            var song = data.response.songs[i];
            var tid = song.tracks[0].foreign_id.replace('-WW', '');
            var tembed = embed.replace('TRACK_URI', tid);
            var li = $("<span>").html(tembed);
		$("#results"+i).append(li);
        }
    });
}

// $('#spotify, flickr2').hide().delay(2500).fadeIn(1500);
fetchArtistPlaylist(SpotifyArtist, false, 0.5);


function info(txt) {
    $("#info").text(txt);
}