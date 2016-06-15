/* ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== */

$(document).ready(function(){
	
	$("#larashortSuccess").hide();
	$("#larashortError").hide();
	
	$("#larashortForm").submit(function(event){
		
		event.preventDefault();
		
		$("#larashortSuccess").hide();
		$("#larashortError").hide();
		
		var inputURL = $("#inputURL").val().trim();
		if(validateURL(inputURL)) {
			
			$.ajax({
				url: "createURL",
				type: "POST",
				dataType: "json",
				data: { inputURL: inputURL, _token: $("#inputToken").val()},
				success: function(data) {
					$("#larashortSuccess").html("Your short URL has been created: "+data.shortenedURL);
					$("#larashortSuccess").show();
				},
				error: function() {
					$("#larashortError").html("Something went wrong. Please refresh the page and try again");
					$("#larashortError").show();
				}
			});
		}
		else {
			$("#larashortError").html("Please enter a valid URL");
			$("#larashortError").show();
		}
		
	});
});

function validateURL(inputURL) {
	
	if(inputURL.length <= 0) {
		return false;
	}
	
	var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
	if (!re.test(inputURL)) { 
	    return false;
	}
	
	return true;
}