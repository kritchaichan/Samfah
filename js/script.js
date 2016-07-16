// JavaScript Document
function fncTH(){
		
		var parts = window.location.pathname.split( '/' );
		var query = parts[parts.length-1];
		var redirectpathTH = "../" + "th" + "/" + query;
		location.replace(redirectpathTH);
		
		}
		
		function fncEN(){
		var parts = window.location.pathname.split( '/' );
		var query = parts[parts.length-1];
		var redirectpathEN = "../" + "en" + "/" + query;
		location.replace(redirectpathEN);
		
		}
