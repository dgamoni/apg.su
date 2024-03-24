$(document).ready(function(){
	$('#eng').bind('click', function(e){
		e.preventDefault();
		$.cookie('lang', 'eng', { expires: 7, path: '/' });
		return window.location = "/eng/";
	});
	$('#ru').bind('click', function(e){
		e.preventDefault();
		$.cookie('lang', 'ru', { expires: 7, path: '/' });
		return window.location = "/";
	});
});