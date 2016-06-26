/* ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== */

//Global Variables
var enableSubmit = true, enableLoginSubmit = true;
$(document).ready(function(){
	
	$("#larashortSuccess").hide();
	$("#larashortError").hide();
	
	$("#larashortForm").submit(function(event){
		
		event.preventDefault();
		
		if(enableSubmit) {
			
			enableSubmit = false;
			
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
						$("#larashortSuccess").html('Your short URL has been created: <strong>'+data.shortenedURL+'</strong><button id="larashortCopy" type="button" class="btn btn-success btn-sm"  data-clipboard-text="'+data.shortenedURL+'">Copy</button><span id="larashortCopyCallback" style="margin-left:10px; display:none;">Copied</span><hr><b>'+data.shortenedTitle+'</b>');
						$("#larashortSuccess").show();
						$("#inputURL").val("");
						var clipboard = new Clipboard('#larashortCopy');
						clipboard.on('success', function(e) {
						    $("#larashortCopyCallback").show(500,function(){
						    	$("#larashortCopyCallback").hide(500);
						    });
						});
						enableSubmit = true;
					},
					error: function() {
						$("#larashortError").html("Something went wrong. Please refresh the page and try again");
						$("#larashortError").show();
						enableSubmit = true;
					}
				});
			}
			else {
				$("#larashortError").html("Please enter a valid URL");
				$("#larashortError").show();
				enableSubmit = true;
			}
			
			
		}
		
	});

	$("#larashortLoginForm").submit(function(event){

		event.preventDefault();

		if(enableLoginSubmit) {

			enableLoginSubmit = false;

			$("#larashortLoginError").hide();

			var loginEmail = $("#larashortLoginEmail").val().trim();
			var loginPassword = $("#larashortLoginPassword").val().trim();
			var loginRemember = $("#larashortLoginRemember").val();
			var validation = validateLogin(loginEmail,loginPassword);

			if(validation == "validated") {

				$.ajax({
					url: "login",
					type: "POST",
					dataType: "json",
					data: { email: loginEmail, password: loginPassword, remember: loginRemember, _token: $("#larashortLoginForm").find("input[name=_token]").val()},
					success: function(data) {
						if(data.auth) {
							location.reload();
						}
						else {
							$("#larashortLoginError").html("Invalid Email and/or Password");
							$("#larashortLoginError").show();
						}
						enableLoginSubmit = true;
					},
					error: function() {
						$("#larashortLoginError").html("Something went wrong. Please refresh the page and try again");
						$("#larashortLoginError").show();
						enableLoginSubmit = true;
					}
				});
			}
			else {
				$("#larashortLoginError").html(validation);
				$("#larashortLoginError").show();
				enableLoginSubmit = true;
			}


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

function validateLogin(loginEmail, loginPassword) {

	var errorMessage = "";

	var validated = true;

	if(loginEmail.length <= 0) {
		errorMessage += "Email is required<br/>";
		validated = false;
	}

	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!re.test(loginEmail)) {
		errorMessage += "Email is not valid<br/>";
		validated = false;
	}

	if(loginPassword.length <= 0) {
		errorMessage += "Password is required<br/>";
		validated = false;
	}

	if(validated) {
		return "validated";
	}
	else {
		return errorMessage;
	}
}