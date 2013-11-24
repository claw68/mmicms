$(function(){
	$("#navigation a").button();
	$(".add").button();
	$(".edit").button();
	$(".delete").button();
	$("#logout_btn").button();
	$("#login").dialog({
		height: 'auto',
		width: 'auto',
		closeOnEscape: false,
		buttons: {
			Submit: function(){
				$("#login form").submit();
			}
		}
	}).parent('.ui-dialog').find('.ui-dialog-titlebar-close').hide();
	$('#login').keyup(function(e) {
	    if (e.keyCode == 13) {
	    	$("#login form").submit();
	    }
	});
});