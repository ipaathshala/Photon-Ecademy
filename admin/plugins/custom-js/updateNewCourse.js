$(document).ready(function(){
	$('#invcourse, #fail, #savecourse, #loader').hide();
	$('form').submit(function(){
		var reqid = $('#id').val();
		var course = $('#course').val();
		alert(reqid);
		alert(course);
	});
});