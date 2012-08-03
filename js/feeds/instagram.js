/*
   * 
   * InstaGram
   * 
   */


function newInstagramSubject(subject) {
	var tag = subject;		
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.instagram.com/v1/tags/" + tag + "/media/recent?client_id=0e529e5ff5a04389a9fe6c1dc98f1cd5&access_token=179266628.0e529e5.adda6dfa7771430aa9f8575c06c928b7",
	
	
        success: function(data) {



for (var i = 0; i < 3; i++) {
$(".instagram"+i).empty();
$(".instagram"+i).append("<a target='_blank' href='" + data.data[i].link +
"'><img src='" + data.data[i].images.low_resolution.url +"'></img></a>");
			}                  
        }
    });
};

newInstagramSubject(InstagramSubject);
