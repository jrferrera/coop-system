$(document).ready(function() {
	$("#add-user-form").submit(function() {
		event.preventDefault();

		$("#body-loader").addClass("loading");

		$.post($(this).attr('action'), $(this).serialize(), function() { }).done(function(response) {
			var result = jQuery.parseJSON(response);

			displayMessage($("#add-user-notification"), result['messageType'], result['message']);

			$("#add-user-form").trigger('reset');

			generateUsersTable();

			$("#body-loader").removeClass("loading");
		});
	});
});