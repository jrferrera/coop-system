function initializeDeleteForm() {
	$.post(window.location.origin + '/user/get', { id : $(this).attr('data-id') }, function() { }).done(function(response) {
		var result = jQuery.parseJSON(response);

		$("#delete-user-form #user-id").val(result['id']);
		$("#delete-user-form .name").html(result['first_name'] + ' ' + result['last_name']);
		$("#delete-user-form .email").html(result['email']);
	});
}

$(document).ready(function() {
	$("#delete-user-form").submit(function() {
		event.preventDefault();

		$("#body-loader").addClass("loading");

		$.post($(this).attr('action'), $(this).serialize(), function() { }).done(function(response) {
			var result = jQuery.parseJSON(response);

			generateUsersTable();

			$("#delete-user-modal").modal("toggle");
			$('#delete-user-message-modal').modal('toggle');

			$('#delete-user-modal-message').html(result['message']);

			$("#body-loader").removeClass("loading");
		});
	});
});