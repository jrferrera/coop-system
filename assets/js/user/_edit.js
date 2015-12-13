function initializeEditForm() {
	$.post(window.location.origin + '/user/get', { id : $(this).attr('data-id') }, function() { }).done(function(response) {
		var result = jQuery.parseJSON(response);

		$("#edit-user-form #user-id").val(result['id']);
		$("#edit-user-form #last-name").val(result['last_name']);
		$("#edit-user-form #first-name").val(result['first_name']);
		$("#edit-user-form #middle-name").val(result['middle_name']);
		$("#edit-user-form #" + result['sex'] + "-sex").attr("checked", "checked");
		$("#edit-user-form #email").val(result['email']);
		$("#edit-user-form #role").val(result['position']);
	});
}

$(document).ready(function() {
	$("#edit-user-form").submit(function() {
		event.preventDefault();

		$("#body-loader").addClass("loading");

		$.post($(this).attr('action'), $(this).serialize(), function() { }).done(function(response) {
			var result = jQuery.parseJSON(response);

			generateUsersTable();

			displayMessage($("#edit-user-notification"), result['messageType'], result['message']);

			$("#body-loader").removeClass("loading");
		});
	});
});