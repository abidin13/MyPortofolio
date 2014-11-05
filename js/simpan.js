$(document).ready(function(){
	$("form#btn-form").submit(function(){
		var user_email = $('#user_email').attr('value');

		$.ajax({
			type: "POST",
			url: "save.php",
			data: "user_email="+user_email,
			success: function(){
				$("#email-form").fadeOut();
				$("#success").fadeIn();
			}
		});
		return false;
	});
});
