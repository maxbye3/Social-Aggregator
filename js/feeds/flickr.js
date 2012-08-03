  
  /*
   * 
   * Flickr
   */ 
   	
	function NewFlickrSubject(subject) {
    var apiKey = '2c2e75f36ebe9d01b2b9b977219261e2';
    var userId = '58882721@N03';
    var tag = subject;
	var sort = 'relevance';
    //var sort = 'interestingness-asc';
    var perPage = '25';
    var showOnPage = '3';
    
	
    $.getJSON('http://api.flickr.com/services/rest/?format=json&method='+
        'flickr.photos.search&safe_search=1&api_key=' + apiKey +  
        '&tags=' + tag + '&sort=' + sort + '&per_page=' + perPage + '&jsoncallback=?', 
    
	
	function(data){
        var classShown = 'class="lightbox"';
        var classHidden = 'class="lightbox hidden"';
        
		$("#flickr0").empty();
		$("#flickr1").empty();
		$("#flickr2").empty();

        $.each(data.photos.photo,
			   
			function(i, rPhoto){
            var basePhotoURL = 'http://farm' + rPhoto.farm + '.static.flickr.com/'
                + rPhoto.server + '/' + rPhoto.id + '_' + rPhoto.secret;
            
            var thumbPhotoURL = basePhotoURL + '_n.jpg';
            var mediumPhotoURL = basePhotoURL + '.jpg';
            
            var photoStringStart = '<STYLE type="text"> margin-left: auto;margin-right: auto </STYLE><a ';
   			var photoStyle = '';
			var photoStringEnd = 'title="' + rPhoto.title + '" href="'+ 
                mediumPhotoURL +'"><img src="' + thumbPhotoURL + '" alt="' + 
                rPhoto.title + '" style=\"width: 300px; height: 300px; text-align: center; vertical-align : middle;\"/></a>;'
			
			var photoString = (i < showOnPage) ? 
      			photoStringStart + photoStyle + classShown + photoStringEnd : 
                photoStringStart + classHidden + photoStringEnd;
            	$(photoString).appendTo("#flickr"+i);
		    });
          $("a.lightbox").lightBox();
        });
     };
    
	

	NewFlickrSubject(FlickrTag);
	
	function newFlickr() 
	{
    var subject = $("#flickrSubject").val();
    NewFlickrSubject(subject);
	}
	
  	$(document).ready(function() {
    $("#flick").removeAttr("disabled");
	});
